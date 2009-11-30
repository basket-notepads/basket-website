<?php
  include("includes/header.php");
  $title   = "Download Version $current";
  $icon    = "download";
  $related = true;
?>

<?php echoRelatedTop("Key New Features"); ?>
    <ul>
     <li>Reduced loading time for first "Filter all Baskets"</li>
     <li>Instantaneous "Filter as you Type"</li>
     <li>Faster Text Edition</li>
     <li>Enhanced Link Detection in Text Notes</li>
     <li>Focus Baskets when Using Alt+Up and Alt+Down</li>
     <li>Reviewed Japanese Translation</li>
    </ul>
    <p><a href="changes-1.0<? /*echo $current*/ ?>.php" class="buttonBar" style="width: 16em;"><span>Full List of Changes &nbsp;►</span></a></p>
<?php echoRelatedBottom(); ?>

<?php echoH2(); ?>

    <p class="go_home">This application is <a href="http://www.fsf.org/">free software</a> and is distributed under the terms of the <a href="http://www.gnu.org/copyleft/gpl.html">GPL licence</a>: you can <strong>download, use, modify and share it freely</strong>.</p>

    <ul class="downloads">
      <li><strong><a href="downloads/?file=basket-<? echo $current ?>"><? loadIcon16("tgz") ?> <span>Official sources of BasKet Note Pads</span></a></strong> (see <em><a href="install.php" class="linkAnyway">How to install...</a></em>)</li>
    </ul>

    <ul class="downloads">
<!--      <li><a href="downloads/?file=basket-0.6.0-suse"><? loadIcon16("suse") ?> <span>Packages for SuSE</span></a></li>
      <li><a href="downloads/?file=basket-0.6.0-mandriva"><? loadIcon16("mandriva") ?> <span>Package for Mandriva 2007</span></a></li>
      <li><a href="downloads/?file=basket-0.6.0-fedora6-pc"><? loadIcon16("fedora") ?> <span>Package for Fedora Core 6 for PC</span></a>< ! - - (you also can type &quot;<code>yum install basket</code>&quot; in a console as root)- - ></li>
      <li><a href="downloads/?file=basket-0.6.0-fedora6-pc64"><? loadIcon16("fedora") ?> <span>Package for Fedora Core 6 for 64 bits PC</span></a></li>
      <li><a href="downloads/?file=basket-0.6.0-fedora6-ppc"><? loadIcon16("fedora") ?> <span>Package for Fedora Core 6 for Power PC</span></a></li>
-->
<!--      <li><a href="downloads/?file=basket-1.0-kubuntu"><? loadIcon16("kubuntu") ?> <span>Package for KUbuntu</span></a></li>-->
    <!--  <li><a href="downloads/?file=basket-1.0-freebsd"><? loadIcon16("freebsd") ?> <span>Port for FreeBSD</span></a></li>-->
<!--
      <li><a href="downloads/?file=basket-0.6.0-kubuntu-dapper"><? loadIcon16("kubuntu") ?> <span>Package for KUbuntu Dapper</span></a></li>
      <li><? loadIcon16("archlinux") ?> Arch Linux users simply have to type the command "<code>pacman -S basket</code>" in a console as root</li>
      <li><a href="downloads/?file=basket-0.6.0-slackware"><? loadIcon16("slackware") ?> <span>Package for Slackware</span></a></li>
      <li><a href="downloads/?file=basket-0.6.0-gentoo"><? loadIcon16("gentoo") ?> <span>Ebuild for Gentoo</span></a></li>
-->
    <!--  <li><a href="downloads/?file=basket-1.0-debian"><? loadIcon16("debian") ?> <span>Package for Debian</span></a></li>-->
<!--
      <li><? loadIcon16("gentoo") ?> Gentoo Linux users simply have to type the command "<code>emerge - - sync &amp;&amp; emerge basket</code>" in a console as root</li>
      <li><a href=".package"><? loadIcon16("autopackage") ?> <span>Autopackage for Linux</span></a> (learn <em><a href="http://www.autopackage.org/">What is autopackage...</a></em>)</li>
-->
    </ul>

    <ul class="downloads">
      <li><a href="http://kde-apps.org/content/show.php?content=10020"><? loadIcon16("kde-apps") ?> <span>BasKet Note Pads on KDE-Apps.org</span></a> (you can <em>post comments about the application</em>)</li>
      <li><a href="http://freshmeat.net/projects/basket/"><? loadIcon16("freshmeat") ?> <span>BasKet Note Pads on Freshmeat</span></a> (you can <em>subscribe to be sent a notice when a new version is released</em>)</li>
      <!-- <li>CVS in KDE ExtraGear (updated each week-end: musn't be too broken, but can have bugs);</li> -->
    </ul>

    <ul class="downloads">
<?php
  if (isset($devel)) {
?>
      <li><a href="development.php"><? loadIcon16("developement") ?> <span>Unstable Development Version</span></a> (<em>latest nearly stable development version with new features and possibly new bugs</em>)</li>
<?php
  }
?>
      <li><a href="svnaccess.php"><? loadIcon16("svn") ?> <span>SVN Repository Access</span></a> (<em>very latest development version with even more bugs</em>)</li>
    </ul>

    <h3>Display Baskets on the Desktop</h3>
    <p class="screenshotImage" style="float: left;"><img src="screenshots/desktop-basket-1.3.1.png" width="410" height="324" alt="DesktopBasket Super Karamba Theme" class="cropped"></p>

    <p>Here is a SuperKaramba theme that lets you display a few choosen notes on the desktop.<br>
    Just assign the tag "Desktop" to a note and it will appear on your desktop.</p>

    <div id="downloadButton" style="margin-left: 430px">
      <a href="downloads/?file=desktop-basket" id="theButton"><strong>Download Now<br></strong>
      Version <em>1.3.1</em><br>
      SuperKaramba theme (50 Kb)</a>
    </div>

    <h3>Getting Things Done with Basket Note Pads</h3>

    <p class="screenshotImage" style="float: left;"><a href="screenshots/gtd-basket.png"><img src="screenshots/gtd-basket-mini.png" width="276" height="144" alt="A preview of Getting Things Done baskets" class="cropped"></a></p>

    <div style="margin-left: 298px">

      <p>One of the various ways to use BasKet Note Pads is to implement the "Getting Things Done" method in order to be more organized.<br>
      You can get more information by reading the <a href="http://en.wikipedia.org/wiki/Getting_Things_Done">article on Wikipedia</a> or this <a href="http://wikisummaries.org/Getting_Things_Done:_The_Art_of_Stress-Free_Productivity">book summary</a>.</p>

      <p>This basket archive you can download will help you getting started quickly with the method. The basket group is ready-to-use, specially made to adapt the Getting Things Done method to BasKet Note Pads, and all baskets have a short introduction text informing you about their goal. Click the left image to get a <a href="screenshots/gtd-basket.png">bigger screen capture</a> of the first basket. To start using Getting Things Done, just save the archive and open it with BasKet Note Pads.</p>

      <p>Tip: The top-level basket "GTD" is to be used as an inbox for this method. You can assign a global keyboard-shortcut to it by displaying the basket properties window. Then, whenever you get an idea, you can press this global shortcut, press the Insert. key to add a new entry, type your idea, and close with BasKet Note Pads to return to what you were doing right before. Easy and very fast.</p>

      <div id="downloadButton">
        <a href="downloads/?file=GTD.baskets" id="theButton"><strong>Download Now<br></strong>
        Basket Archive<br>(300 Kb)</a>
      </div>
      <div id="downloadButton">
        <a href="downloads/?file=GTD_german.baskets" id="theButton"><strong>Download Now<br></strong>
        Basket Archive<br>(German version - 300 Kb)</a>
      </div>
    </div>

    <div class="after_column"></div>

<?php include('includes/footer.php'); ?>