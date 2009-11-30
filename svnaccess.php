<?php
    /// SVN: /////////////
    $lastRevision = "514";

  $title   = "Source Code Access";
  $icon    = "svn";
  $related = true;
  include("includes/header.php");
?>

<?php echoRelatedTop("Related Links"); ?>
      <ul class="more">
        <li><a href="development.php">Unstable Development Version...</a></li>
        <li><a href="roadmap.php">Roadmap...</a></li>
        <li><a href="rss.php">Stay tuned: use the RSS Feed...</a></li>
        <li><a href="contact.php">Contact Developer...</a></li>
      </ul>
<?php echoRelatedBottom(); ?>

<?php echoH2(); ?>

    <p>You want to always be up to date, or you want to participate in the development effort?<br>
    This is the page you're searching for.<br>
    Here are instructions to download and install the latest development version of this application.<br>
    The version you will download is the latest code produced one week or one hour earlier!<br>
    We're trying to keep that code compilable and usable, but remember it's not a public release, so sometimes it can be hardly usable for daily needs. In those cases, retry some days later...</p>
    <p>
    Currently BasKet has two repositories, active git repository where porting to KDE4 is being done and the old svn repository. If you want to help out, help with the porting effort is much appreciated!</p>

    <h3>Instructions to Get the Latest Development Code for KDE</h3>
    <p>Open a console, and type the following command to get copy of the git repository:</p>
    <p>
    <code style="font-family:monospace,Courier New">git clone git://github.com/kelvie/basket.git</code>
    </p>
    <p>You can also browse the repository with a web browser at <a href="http://github.com/kelvie/basket/tree/master">http://github.com/kelvie/basket/tree/master</a></p>
    <p>Please read the README in the repository for further instructions.</p>
    <p>To contribute, please send patches to the <a href="mailinglist.php">mailing list</a></p>
    <h3>Note on the old SVN tree</h3>
    <p>The old SVN tree has been completely imported into the Git repository
       above (including the branches), so those are still available.</p>
    <p>The <a href="http://github.com/kelvie/basket/commits/maint">maint</a>
branch is where the KDE3 code is still being kept (and is code frozen,
minus bug fixes).</p>
<!--
    <h3>Instructions to Get the Latest Development Code for KDE3</h3>
    <p>This repository is more or less obsolete, and has been imported (including branches) into the Git repository above</p>
    <p>Open a console, and type the following commands:</p>
    <p><code style="font-family:monospace,Courier New;white-space:pre">svn co http://basket.linux62.org/svn/basket/trunk basket
cd basket
./installer</code></p>
    <p>The first line will download the latest source codes, then the second line place you in the created folder, and you finally follow the installation assistant. That was not so complicated and you're going to enjoy the latest features and bug fixes... or the latest new bugs ;-)</p>
-->
<!--    <h3>What's New in SVN Since the Last Official Release?</h3> -->
<?php
/*
  $output = array();
  //exec("svn log --xml --limit 10 file:///home/basket.linux62.org/repos/basket", $output);
  exec("svn log --xml file:///home/basket.linux62.org/repos/basket", $output);
  //exec("svn log --xml --limit 10 /home/seb/Programmation/basket", &$output);

  $output = implode($output);

  $dom = new DomDocument();

  $somethingNew = false;
  if (!empty($output) && $dom->loadXML($output)) {
    $root = $dom->documentElement;
    $entries = $root->getElementsByTagName('logentry');
    foreach ($entries as $entry) {
      $rev  = $entry->getAttribute("revision");
      if ($rev == $lastRevision)
        break;
      if (!$somethingNew)
        echo "    <dl>\n\n";
      $somethingNew = true;
      $date   = $entry->getElementsByTagName("date");
      $date   = $date->item(0)->nodeValue;
      $date   = substr($date, 0, 10) . " " . substr($date, 11, 2) . "H" . substr($date, 14, 2);
      $author = $entry->getElementsByTagName("author");
      $author = $author->item(0)->nodeValue;
      $msg    = $entry->getElementsByTagName("msg");
      $msg    = $msg->item(0)->nodeValue;
      $msg    = str_replace(chr(226) . chr(128) . chr(168), "<br>\n      ", $msg);
      $msg    = str_replace("&", "&amp;", $msg);
      $msg    = str_replace("<", "&lt;", $msg);
      echo "      <dt>$date <span style=\"color: gray;\">by $author</span></dt>\n";
      echo "      <dd>$msg</dd>\n\n";
    }
    if ($somethingNew)
      echo "    </dl>\n";
  }

  if (!$somethingNew)
    echo "    <p>There is nothing new: the last released version is the very latest code produced by developers.</p>\n";
*/
?>

<?php include('includes/footer.php'); ?>