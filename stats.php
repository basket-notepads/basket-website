<?
  $path = "hits/";

  $files = array();

  echo "<title>BasKet Website Stats</title>
        <style>
//   * { border: solid 1px black; }
//   div { border: dotted 1px blue; }
//   h1, h2, h3, h4, h5, h6 { border: solid 1px gray40; }
//   p { border: solid 1px lightsteelblue; }
//   table { border: solid 1px red; }
//   th { border: solid 1px yellow; }
//   td { border: solid 1px orange; }
          h2    { margin: 0 2em 0 0; color: gray80; border-bottom: solid 1px gray90; }
          th    { text-align: right; width: 10px; }
          table { width: 100%; }
          td    { vertical-align: top; }
          p     { margin: 0 0 1.5em 0; }
        </style>";


  $dh=opendir($path);
  while ($file=readdir($dh)) {
    if ($file!="." && $file!="..") {
      $fullPath=$path."/".$file;
      if (!is_dir($fullPath)) {
        $f = fopen($fullPath, "r");
        $hits = fread($f, 100000); // 100000 digits should be enouth ;)
        fclose($f);
        $value = str_replace("\n", "<br>", $hits);
        // Use the key "$value-$file" and not "$value" because $value is the download count and is not unique
        // An array key SHOULD be unique.
             if ($value < 10) $value = "0000$value";
        else if ($value < 100) $value = "000$value";
        else if ($value < 1000) $value = "00$value";
        else if ($value < 10000) $value = "0$value";

        $files = $files + array("$value-$file"=>"$file");
      }
    }
  }

  echo "<table><tr><td>";
  echo "<h2>Hits</h2>";

  echo "<table>";
  krsort($files);
  for (reset($files); $key = key($files); next($files)) {
    $fileName = $files[$key];
    if ($fileName == "error404.logs" || $fileName == "bots.logs")
      continue;
    if (substr($fileName, -5) == ".hits")
      $fileName = substr($fileName, 0, strlen($fileName) - 5);
    // Get the download count:
    $key = split("-", $key);
    $key = (int)$key[0];
    echo "<tr><th>$fileName</th><td>".$key."</td></tr>";
  }

  echo "</table></td><td>";

  $file = "error404.logs";
  if (file_exists("$path/$file")) {
    echo "<h2>Errors 404</h2><p>";
    $f = fopen("$path/$file", "r");
    $hits = fread($f, 100000); // 100000 digits should be enouth ;)
    fclose($f);
    $value = str_replace("\n", "<br>", $hits);
    echo $value . "</p>";
  }

  $file = "bots.logs";
  if (file_exists("$path/$file")) {
    echo "<h2>Bots</h2><p>";
    $f = fopen("$path/$file", "r");
    $hits = fread($f, 100000); // 100000 digits should be enouth ;)
    fclose($f);
    $value = str_replace("\n", "<br>", $hits);
    echo $value . "</p>";
  }

  closedir($dh);
?>

