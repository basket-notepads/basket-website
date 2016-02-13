<?php
  include("includes/header.php");
  $title   = "Download Version $current";
  $icon    = "download";
  $related = true;
?>

<?php echoRelatedTop("Key New Features"); ?>
    <ul>
     <li>Ported to KDE 4</li>
     <li>Ability to add cross references between Baskets</li>
     <li>Import your data from Jreepad</li>
    </ul>
<?php echoRelatedBottom(); ?>

<?php echoH2(); ?>

    <p class="go_home">This application is <a href="http://www.fsf.org/">free software</a> and is distributed under the terms of the <a href="http://www.gnu.org/copyleft/gpl.html">GPL licence</a>: you can <strong>download, use, modify and share it freely</strong>.</p>

    <ul class="downloads">
      <li><strong><span>Official sources of BasKet Note Pads</span></strong> (see <em><a href="install.php" class="linkAnyway">How to install...</a></em>)<br>
      <a href="<? echo $current_github ?>"><? loadIcon16("tgz") ?> Mirror 1</a>, <a href="<? echo $current_launchpad ?>"><? loadIcon16("tgz") ?> Mirror 2</a>
      </li>
    </ul>

    <ul class="downloads">
      <li><a href="http://kde-apps.org/content/show.php?content=10020"><? loadIcon16("kde-apps") ?> <span>BasKet Note Pads on KDE-Apps.org</span></a> (you can <em>post comments about the application</em>)</li>
      <li><a href="http://freshmeat.net/projects/basket/"><? loadIcon16("freshmeat") ?> <span>BasKet Note Pads on Freshmeat</span></a> (you can <em>subscribe to be sent a notice when a new version is released</em>)</li>
    </ul>

    <ul class="downloads">
<?php
  if (isset($devel)) {
?>
      <li><a href="development.php"><? loadIcon16("developement") ?> <span>Unstable Development Version</span></a> (<em>latest nearly stable development version with new features and possibly new bugs</em>)</li>
<?php
  }
?>
      <li><a href="https://github.com/basket-notepads/basket/archive/master.zip"><? loadIcon16("svn") ?> <span>Git Repository Access</span></a> (<em>very latest development version with even more bugs</em>)</li>
    </ul>

    <h3>Getting Things Done with Basket Note Pads</h3>

    <p class="screenshotImage" style="float: left;"><a href="screenshots/gtd-basket.png"><img src="screenshots/gtd-basket-mini.png" width="276" height="144" alt="A preview of Getting Things Done baskets" class="cropped"></a></p>

    <div style="margin-left: 298px">

      <p>One of the various ways to use BasKet Note Pads is to implement the "Getting Things Done" method in order to be more organized.<br>
      You can get more information by reading the <a href="http://en.wikipedia.org/wiki/Getting_Things_Done">article on Wikipedia</a> or this <a href="http://wikisummaries.org/Getting_Things_Done:_The_Art_of_Stress-Free_Productivity">book summary</a>.</p>

      <p>This basket archive you can download will help you getting started quickly with the method. The basket group is ready-to-use, specially made to adapt the Getting Things Done method to BasKet Note Pads, and all baskets have a short introduction text informing you about their goal. Click the left image to get a <a href="screenshots/gtd-basket.png">bigger screen capture</a> of the first basket. To start using Getting Things Done, just save the archive and open it with BasKet Note Pads.</p>

      <p>Tip: The top-level basket "GTD" is to be used as an inbox for this method. You can assign a global keyboard-shortcut to it by displaying the basket properties window. Then, whenever you get an idea, you can press this global shortcut, press the Insert. key to add a new entry, type your idea, and close with BasKet Note Pads to return to what you were doing right before. Easy and very fast.</p>

      <div id="downloadButton">
        <a href="downloads/GTD.baskets" id="theButton"><strong>Download Now<br></strong>
        Basket Archive<br>(300 Kb)</a>
      </div>
      <div id="downloadButton">
        <a href="downloads/GTD_german.baskets" id="theButton"><strong>Download Now<br></strong>
        Basket Archive<br>(German version - 300 Kb)</a>
      </div>
    </div>

    <div class="after_column"></div>

<?php include('includes/footer.php'); ?>
