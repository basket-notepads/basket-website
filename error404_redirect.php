<?
  // Don't threat Webots as 404 errors but log them for a graph:
  if ($_SERVER['REQUEST_URI'] == "/robots.txt") {
    if (!file_exists("hits/bots.logs")) {
      $f = fopen("hits/bots.logs", "w");
      fwrite($f, "");
      fclose($f);
    }
    $f = fopen("hits/bots.logs", "a");
    fwrite($f, date("Y-m-d H:i:s").(isset($_SERVER['HTTP_USER_AGENT']) ? " ".$_SERVER['HTTP_USER_AGENT'] : "")."\n");
    fclose($f);

    die();
  }

  // It's an error, log URL:
  if (!file_exists("hits/error404.logs")) {
    $f = fopen("hits/error404.logs", "w");
    fwrite($f, "");
    fclose($f);
  }
  $f = fopen("hits/error404.logs", "a");
  fwrite($f, $_SERVER['REQUEST_URI']."\n");
  fclose($f);

  header("Location: /error404.php");
?>
