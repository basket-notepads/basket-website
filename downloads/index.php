<?php
  // List all downloadable files with an alias:
  $filesMap = array
  (

    "demo-basket-fr.mpeg"    => "../demo/demo-basket-fr.mpeg",

    "basket-0.6.0"                => "basket-0.6.0.tar.gz",
    "basket-0.6.0-suse"           => "http://ftp.gwdg.de/pub/linux/misc/suser-guru/rpm/packages/Utilities/basket/",
    "basket-0.6.0-mandriva"       => "http://people.mandriva.com/~lmontel/basket-2007/basket-0.6.0-1mdv2007.0.i586.rpm",
    "basket-0.6.0-fedora6-pc"     => "ftp://download.fedora.redhat.com/pub/fedora/linux/extras/6/i386/basket-0.6.0-1.fc6.i386.rpm",
    "basket-0.6.0-fedora6-pc64"   => "ftp://download.fedora.redhat.com/pub/fedora/linux/extras/6/x86_64/basket-0.6.0-1.fc6.x86_64.rpm",
    "basket-0.6.0-fedora6-ppc"    => "ftp://download.fedora.redhat.com/pub/fedora/linux/extras/6/ppc/basket-0.6.0-1.fc6.ppc.rpm",
    "basket-0.6.0-kubuntu-dapper" => "http://geeksoc.org/~kd/basket/basket_0.6.0-0basket.kde.org1~dapper_i386.deb",
    "basket-0.6.0-kubuntu-edgy"   => "http://geeksoc.org/~kd/basket/basket_0.6.0-0basket.kde.org1~edgy_i386.deb",
    "basket-0.6.0-freebsd"        => "http://www.freshports.org/deskutils/basket",
    "basket-0.6.0-slackware"      => "http://www.linuxpackages.net/pkg_details.php?id=10129",
    "basket-0.6.0-gentoo"         => "http://packages.gentoo.org/ebuilds/?basket-0.6.0",

    "basket-0.6.1Beta1"           => "basket-1.0.2.tar.gz",
    "basket-0.6.1Beta2"           => "basket-1.0.2.tar.gz",
    "basket-1.0Beta3"             => "basket-1.0.2.tar.gz",
    "basket-1.0RC"                => "basket-1.0.2.tar.gz",
    "basket-1.0RC2"               => "basket-1.0.2.tar.gz",
    "basket-1.0RC3"               => "basket-1.0.2.tar.gz",
    "WelcomeBaskets"              => "Welcome_en_US.baskets",
    "GTD.baskets"                 => "GTD.baskets",
    "GTD_german.baskets"          => "GTD_german.baskets",

    "basket-1.0.1"                => "basket-1.0.2.tar.gz",
    "basket-1.0.2"                => "basket-1.0.2.tar.gz",
    "basket-1.0.3"                => "basket-1.0.3.tar.gz",
    "basket-1.0.3.1"              => "basket-1.0.3.1.tar.gz",
    "basket-1.80"                 => "basket-1.80.tar.bz2",

    "desktop-basket"              => "http://www.kde-look.org/content/download.php?content=59052&id=1",

    "likeback-0.4.tar.gz"    => "likeback-0.4.tar.gz",
    "convert-baskets-to-utf8.bash.tar.gz" => "convert-baskets-to-utf8.bash.tar.gz"
  );

  // Test if the file the visitor want to download is legal:
  if (
          !isset($_GET['file']) // File not specified
       || $_GET['file'] == ""   // File not specified
       || !(    in_array($_GET['file'], array_keys($filesMap)) // File not in array
             || file_exists($_GET['file'])                     // File not existing
           )
     )
  {
    if (!file_exists("../hits/error404.logs")) {
      $f = fopen("../hits/error404.logs", "w");
      fwrite($f, "");
      fclose($f);
    }
    $f = fopen("../hits/error404.logs", "a");
    fwrite($f, "Wanted to download: ".(isset($_GET['file']) ? $_GET['file'] : "No file")."\n");
    fclose($f);

    header("Location: ../download.php");
    exit();
  }

  // Register the download in hits files:
  $fileName = "../hits/{$_GET['file']}.hits";
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

  // Redirect if needed:
  if ( in_array($_GET['file'], array_keys($filesMap)) ) {
    header("Location: " . $filesMap[$_GET['file']]);
    exit();
  }

  // A function useful to know content-type:
  function strEndsWith($string, $end)
  {
    return substr($string, strlen($string) - strlen($end)) == $end;
  }

  // Output meta-data and then the file:
  if      (strEndsWith($_GET['file'], ".rpm"))     header("Content-type: application/x-rpm");
  else if (strEndsWith($_GET['file'], ".deb"))     header("Content-type: application/x-deb");
  else if (strEndsWith($_GET['file'], ".tar.gz"))  header("Content-type: application/x-tgz");
  else if (strEndsWith($_GET['file'], ".tar.bz"))  header("Content-type: application/x-tbz");
  else if (strEndsWith($_GET['file'], ".tar.bz2")) header("Content-type: application/x-tbz");
  else if (strEndsWith($_GET['file'], ".baskets")) header("Content-type: application/x-basket-archive");

  header("Content-length: ".filesize("./".$_GET['file']));
  header("Content-Disposition: attachment; filename={$_GET['file']}");

  $f = fopen("./".$_GET['file'], "r");
  echo fread($f, filesize("./".$_GET['file']));
  fclose($f);
?>
