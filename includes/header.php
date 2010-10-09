<?php
  header("Content-Type: text/html; charset=utf-8");

  /// Global variables:
  $email="kelvie@ieee.org";
  $current="1.81";
//  $devel="2.0Alpha1"; // To be commented when no development version is available

  /// Find page filename:
  // 'PHP_SELF'        /~seb/basket2/debug.php
  // 'SCRIPT_FILENAME' /home/seb/Sites/basket2/debug.php
  // 'PATH_TRANSLATED' /home/seb/Sites/basket2/debug.php
  // 'SCRIPT_NAME'     /~seb/basket2/debug.php
  // 'REQUEST_URI'     /~seb/basket2/debug.php
  $pos = -1;
  do {
    $lastPos = $pos;
    $pos = strpos($_SERVER['PHP_SELF'], '/', $pos + 1);
  } while ($pos !== false);
  $fileName = substr($_SERVER['PHP_SELF'], $lastPos + 1);

  /// Increment the hit counter for this page:
  $fileName = "hits/$fileName.hits";
  if (!file_exists($fileName)) {
    $f = fopen($fileName, "w");
    $hits = 0;
    fwrite($f, $hits);
    fclose($f);
  } else {
    $f = fopen($fileName, "r");
    $hits = fread($f, 10); // 10 digits should be enouth :)
    fclose($f);
  }
  $hits++;
  $f = fopen($fileName, "w");
  fwrite($f, $hits);
  fclose($f);

  /// Insert an image of given size for the wanted name:
  function loadIcon16($name) {
    echo "<img src=\"icos/16-$name.png\" alt=\"\" width=\"16\" height=\"16\">";
  }
  function loadIcon32($name) {
    echo "<img src=\"icos/32-$name.png\" alt=\"\" width=\"32\" height=\"32\">";
  }
  function loadIcon64($name) {
    echo "<img src=\"icos/64-$name.png\" alt=\"\" width=\"64\" height=\"64\">";
  }

  function echoH2() {
    global $title, $icon, $related;
    if (isset($title) && $title != "") {
      $class = "pageTitle" . (isset($related) && $related ? " withRelated" : "");
      echo "    <h2 class=\"$class\"><span><span>";
      loadIcon32($icon);
      echo " $title</span></span></h2>\n";
    }
  }

  function echoRelatedTopWithMargin($title, $margin) {
    $margin = ($margin ? " style=\"margin-top: -1px;\"": "");
    echo "    <div class=\"related\"$margin>\n";
    echo "      <h2>$title</h2>\n";
    echo "      <div class=\"content\">\n";
  }
  function echoRelatedTop($title) {
    echoRelatedTopWithMargin($title, false);
  }
  function echoRelatedBottom() {
    echo "      </div>\n";
    echo "      <div class=\"bottom\">&nbsp;</div>\n";
    echo "    </div>\n";
  }

  /// Insert a link to mail the author
  /// FIXME: echo $email is empty (should be local variable!)
  function emailLink($linkTitle) {
    echo "<a href=\"mailto:kelvie@ieee.org\">$linkTitle</a>";
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
 <head>
  <title><?php echo($title != "" ? "$title - " : ""); ?>BasKet Note Pads</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="Author" lang="fr" content="S&eacute;bastien Lao&ucirc;t">
  <meta name="copyright" content="&copy; 2003-2006 S&eacute;bastien Lao&ucirc;t.">
  <link rel="stylesheet" type="text/css" href="includes/style.css">
  <link rel="shortcut icon" type="image/png" href="icos/16-basket.png">
  <link rel="alternate" type="application/rss+xml" title="BasKet Note Pads News" href="http://basket.kde.org/basket.rss">
  <meta name="verify-v1" content="JOY6B+WuxHbxJ9qDCOBdSY9EqLrABU6mWwoJQnk9aTo=">
 </head>
 <body>
  <div id="header">
   <div id="subHeader">
    <p>Taking care of<br>
      your ideas.</p>
    <h1><a href="http://basket.kde.org/"><img src="icos/64-basket.png" alt="" width="64" height="64"><img src="images/basket-note-pads.png" width="347" height="41" alt="BasKet Note Pads"></a><br></h1>
    <div class="bar">
     <ul>
      <li><a href="index.php"       accesskey="h">Home</a></li>
      <li><a href="news.php"        accesskey="n">News</a></li>
      <li><a href="tour.php"        accesskey="t">Tour</a></li>
      <li><a href="screenshots.php" accesskey="s">Screenshots</a></li>
      <li><a href="download.php"    accesskey="d">Download</a></li>
<?php
  if (isset($devel))
    echo "      <li><a href=\"development.php\" accesskey=\"v\">Development</a></li>\n";
?>
      <li><a href="roadmap.php"     accesskey="r">Roadmap</a></li>
      <li><a href="contribute.php"  accesskey="o">Contribute</a></li>
      <li class="last"><a href="contact.php" accesskey="c">Contact</a></li>
     </ul>
    </div>
   </div>
  </div>

  <div id="content">
