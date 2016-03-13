<?php
  $title   = "Unstable Development Version";
  $icon    = "developement";
  $related = true;
  include("includes/header.php");
?>

<?php echoRelatedTop("Other Progress Information"); ?>
      <ul class="more">
        <li><a href="roadmap.php">Roadmap...</a></li>
        <li><a href="svnaccess.php">SVN Repository Access...</a></li>
        <li><a href="rss.php">Stay tuned: use the RSS Feed...</a></li>
      </ul>
<?php echoRelatedBottom(); ?>

<?php echoH2(); ?>

    <p>On this page, you will discover what is under development for the future of this application.<br>
    While the releases provided on this page are not officially supported, they are quite usable and relatively stable.</p>

    <!--<p>Since the release of the version <?php echo $current; ?>, no more development has been done. You will be informed as soon as there are changes.</p>-->
    <p> <a href="<?php echo $devel_launchpad; ?>">Basket 2.49a for KF5</a> </p>


    <h3>New Developers Wanted</h3>
    <p>See the page <a href="version2.php">Road to Version 2</a> to see the mockups, read the vision and roadmap, and who is wanted for BasKet Note Pads to continue. Without any new developers, the project might be dead.</p>

    <h3>Take Part in the Usability Project!</h3>
    <p>Are you a user of BasKet Note Pads?<br>
    Then help the BasKet Note Pads Usability Project to improve this application!</p>
    <p><!--It is easy: just follow the link from-->Visit <a href="http://basket.openusability.org/">the project homepage</a><!-- and start the survey. It will take you less than 20 minutes-->. The survey is closed by now. But in a week you will be able to participate again by reading and commenting on personas and scenarios or give personal feedback.</p>
    <p><strong>About the BasKet Note Pads Usability Project:</strong></p>
    <p>This is the project set up by Frank Ploss, the student who is participating to the OpenUsability.org's "Season of Usability" and maintainer of the BasKet Note Pads Usability Project. It is part of a research project for his diploma thesis at the Univesity of Hamburg, Germany.</p>
    <p>The aim of the usability project is to improve the usability of the BasKet Note Pads tool. Usability, as Frank sees it, not only depends on the user interface, but also on the underlying assumptions that are made about the users and their context of use. So, knowing about the users, their contexts and claims are of vital importance for this project.</p>
    <p>Also, the aim of this project is to also involve you, the users, into the development of BasKet Note Pads. With your specific knowledge about how you use BasKet Note Pads and with what intentions, you can make a difference in the further development of the application!</p>
    <p>To find out about further possibilities to participate, please visit <a href="http://basket.openusability.org/">http://basket.openusability.org</a> and subscribe to the email newsletter or the RSS feed or email <a href="mailto:frank.ploss(à)informatik.uni-hamburg.de">frank.ploss(à)informatik.uni-hamburg.de</a>.</p>

<?php include('includes/footer.php'); ?>