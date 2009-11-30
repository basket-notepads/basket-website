<?php
  class NewsItem {
    var $title;
    var $date;
    var $description;
  }

  $file   = "basket.rss";
  $depth  = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
  $curTag = "";

  $news   = array();
  $lastN  = -1;

  function startElement($parser, $name, $attrs) {
    global $depth, $curTag, $news, $lastN;

    if ($depth[$parser] == 3 && ($name == "TITLE" || $name == "PUBDATE" || $name == "DESCRIPTION"))
      $curTag = $name;
    if ($curTag == "TITLE") {
      array_push($news, new NewsItem());
      $lastN++;
    }
    $depth[$parser]++;
  }

  function endElement($parser, $name) {
    global $depth, $curTag;

    if ($curTag != "")
      $curTag = "";
    $depth[$parser]--;
  }

  function dataElement($parser, $data) {
    global $curTag, $news, $lastN;

    if ($curTag != "")
      $news[$lastN];
    if ($curTag == "TITLE")            $news[$lastN]->title       .= $data;
    else if ($curTag == "PUBDATE")     $news[$lastN]->date        .= $data;
    else if ($curTag == "DESCRIPTION") $news[$lastN]->description .= $data;
  }

  $xml_parser = xml_parser_create();
  xml_set_element_handler($xml_parser, "startElement", "endElement");
  xml_set_character_data_handler($xml_parser, "dataElement");
  if (!($fp = fopen($file, "r")))
    die("    <p>Error: Could not open the RSS feed to print news.<br>\n".
        "    Please retry in a few minutes.</p>\n");

  while ($data = fread($fp, 4096)) {
    if (!xml_parse($xml_parser, $data, feof($fp))) {
      die(sprintf("    <p>XML error: %s at line %d</p>\n",
                  xml_error_string(xml_get_error_code($xml_parser)),
                  xml_get_current_line_number($xml_parser)));
    }
  }
  xml_parser_free($xml_parser);

  $nbItemsToPrint = $lastN + 1;

//if (isset($onlyFirstOne) && $onlyFirstOne == true)
//  $nbItemsToPrint = 1;
  if (!isset($onlyFirstOne))
    $onlyFirstOne = false;

  for ($i = 0; $i < $nbItemsToPrint; $i++) {
    $item   = $news[$i];               //       [1][2] [3]
    $dates  = split(" ", $item->date); // "Wed, 09 Mar 2005 21:41:46 +0100"
    $list   = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
    $iMonth = array_search($dates[2], $list) + 1;
    $date   = $dates[3] . "-" . ($iMonth < 10 ? "0$iMonth" : $iMonth) . "-" . $dates[1];
    $title  = str_replace("&", "&amp;", $item->title);

    $desc   = substr($item->description, 1); // My feed always begin with "\n"
    $desc   = str_replace("<br>\n", "\n",         $desc);
    $desc   = str_replace("\n",     "<br>\n    ", $desc);
    $desc   = str_replace("&",      "&amp;",      $desc);

    $hx = ($onlyFirstOne ? "h4" : "h3");
    if (!$onlyFirstOne || $i == 0)
      echo "    <$hx><a name=\"the-{$date}\" id=\"the-{$date}\"></a>[{$date}] $title</$hx>\n".
           "    $desc\n".
           "\n";
    else if ($i <= 4)
      echo "    <$hx><a href=\"news.php#the-{$date}\">[{$date}] $title</a></$hx>\n";
  }
?>
