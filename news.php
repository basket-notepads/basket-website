<?php
  $title   = "News";
  $icon    = "news";
  $related = true;
  include("includes/header.php");
?>

<?php echoRelatedTop("News Related Pages"); ?>
      <ul class="more">
        <li><a href="rss.php">Subscribe the RSS feed...</a></li>
        <li><a href="changes-0.6.0.php">List of changes...</a></li>
      </ul>
<?php echoRelatedBottom(); ?>

<?php echoH2(); ?>

    <p>Here are all news published about the BasKet Note Pads and WeBasKet projects or things related to it.</p>
<?
  include("news_main.php");
?>

<?php include('includes/footer.php'); ?>