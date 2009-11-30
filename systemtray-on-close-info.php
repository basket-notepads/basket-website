<?php
  $title   = "System Tray on Close Info Dialog";
  $icon    = "oncloseinfo";
  $related = true;
  include("includes/header.php");
?>

<!--<?php echoRelatedTop("Other Usability Informations"); ?>
      <ul class="more">
        <li><a href="usability.php">Usability page...</a></li>
      </ul>
<?php echoRelatedBottom(); ?>-->

<?php echoRelatedTop("Other Reusable Technologies"); ?>
      <ul class="more">
        <li><a href="likeback.php">LikeBack - Quick Feedback from Beta-Testers...</a></li>
      </ul>
<?php echoRelatedBottom(); ?>

<?php echoH2(); ?>

    <p><!--This page is a light page of the <a href="usability.php">BasKet usability changes and features removals</a>, showing the new BasKet's On close info dialog. -->This improvement has been asked by the <a href="http://openusability.org/reports/?group_id=54">OpenUsability.org usability review</a>.<br>
    I tryed to put this thing into KDE libs, but there is one remaining bug: if windows can be behind Kicker, the screenshot take that window and not the kicker icon!</p>

    <h3>Rational</h3>
    <ul>
      <li>For the text: I've got it from <a href="http://developer.kde.org/~wheeler/juk.html">JuK</a> and like it because it's consise and relevant. But I used bold instead of surrounding menu items with simple quotes. My rationale is that users don't read the message boxes and have the two items hilighted like this help them to view and memorize the menus where to get the described feature. It also avoid traduction work to match local way of quotting texts.</li>
      <li>For the image: Users (humans generally) are attracted to visual effects. This sort of message box with image is used similiary in the dialog used in Windows XP to configure the Taskbar, in Mozilla and other Windows applications...<br>
      And I think it is a very good idea because, one more time, users don't read dialogs (and don't like them). This dialog is important for users to know the application they closed (and perhapse wanted to quit) is a quite special one. If it is pushed to be standard for all KDE applications, on the 2nd systray based application that the user close, he/she will <strong>immediatly</strong> see that he isn't quitting but minimizing the window. Images are more powerful and recognizable than (unreaded or not) texts: a picture explain all very quickly without have to pay attention in reading..., and users are pleased with.<br>
      Moreover, the image I propose (in fact, the solution mentioned in the usability report) is <strong>dynamic</strong>. Ie. it mirror the <strong>real</strong> user desktop configuration and he/she can better match it to her screen.</li>
    </ul>

    <h3>Screenshots</h3>
    <p>Screenshot of the &quot;on close info dialog&quot; that show a snapshot of the systray that circle the system tray icon. The screenshot is dynamically taken (not a static image), which then show the <strong>real</strong> user configuration:</p>
    <p class="screenshotImage"><img src="usability/ksystemtray_red.png" alt="Normal screenshot: kicker with pixmap on bottom" width="447" height="289"></p>

    <p>The snapshot is taken even if the kicker in on top of the screen:</p>
    <p class="screenshotImage"><img src="usability/ksystemtray_top.png" alt="Transparent kicker on top" width="447" height="289"></p>

    <p>Or on right (or left):</p>
    <p class="screenshotImage"><img src="usability/ksystemtray_right.png" alt="Kicker on right" width="447" height="289"></p>

    <p>Some guys proposed to use the current highlight color instead of red. But that color is often nearly the same as windows decoration one (kicker on top) or of the colored kicker... It result less contrast and a circle that can be missed:</p>
    <p class="screenshotImage"><img src="usability/ksystemtray_highlight.png" alt="Same as first, but with highlight color instead of red: less visible" width="447" height="289"></p>

    <h3>Implementation</h3>
    <p>If you want to integrate this dialog in your application, copy and paste tis code in your project: <a href="ksystemtray2.txt">class KSystemTray2</a>.<br>
    It is a class that inherit KSystemTray to extend it and add one method: <code>displayCloseMessage()</code>. Use or extend it instead of KSystemTray, and voil&agrave;!</p>

<?php include('includes/footer.php'); ?>