<?php
  $title   = "RSS Feed";
  $icon    = "rss";
  $related = true;
  include("includes/header.php");
?>


<?php echoRelatedTop("More Details"); ?>
      <ul class="more">
        <li><a href="news.php">Read all news...</a></li>
      </ul>
<?php echoRelatedBottom(); ?>

<?php echoH2(); ?>

    <p>To be <strong>kept informed as soon as a new version of BasKet Note Pads or WeBasKet is released</strong>, you can use BasKet Note Pads's RSS feed:<br>
    <a href="basket.rss"><img src="icos/rss.png" width="28" height="16" alt=""> http://basket.kde.org/basket.rss</a></p>

    <p>A RSS feed is a small network resource that contains news from a site, a weblog, a project, etc.<br>
    You need a news aggregator to collect feeds.<br>
    An aggregator collects feeds so the news items are readable from a single place regardless of their source, and you can be notified as soon as a site is updated.<br>
    This saves you a lot of time because you won't have to visit all sites anymore. The aggregator collects them for you.</p>

    <p>Add the RSS link above as a source to one of the following applications (depending on your desktop):</p>
    <dl>
      <dt><a href="http://akregator.kde.org/"><? loadIcon16("akregator") ?> aKregator</a></dt>
        <dd>This is the <strong>KDE</strong> news aggregator. It is the best one, and it is also well integrated with Konqueror;</dd>
      <dt><a href="http://www.nongnu.org/straw/"><? loadIcon16("straw") ?> Straw</a></dt>
        <dd>The <strong>GNOME</strong> news aggregator;</dd>
      <dt><a href="http://ranchero.com/netnewswire/"><? loadIcon16("netnewswire") ?> NetNewsWire</a></dt>
        <dd>NetNewsWire is an elegant <strong>MAC OS X</strong> aggregator, easy to use, and powerful;</dd>
      <dt><a href="http://www.rssbandit.org/"><? loadIcon16("rssbandit") ?> RSS Bandit</a></dt>
        <dd>Simple, beautiful and efficient, RSS Bandit is a free and full-featured aggregator for <strong>Windows.</strong>;</dd>
      <dt><a href="http://www.bloglines.com/"><? loadIcon16("bloglines") ?> Bloglines</a></dt>
        <dd>Bloglines is a <strong>WEB</strong> based aggregator. After subscribing, you will be able to read feeds from any computer, with any OS. It only needs a WEB browser.</dd>
    </dl>

    <p>You can also use one of the following alternatives:</p>
    <dl>
      <dt><a href="http://eventwatcher.sourceforge.net/"><? loadIcon16("eventwatcher") ?> eventwatcher</a></dt>
        <dd>A KDE events daemon which can also display RSS feeds;</dd>
      <dt><a href="http://netdragon.sourceforge.net/"><? loadIcon16("super-karamba") ?> Super Karamba aggregators</a></dt>
        <dd>If you have Super Karamba installed (it allows you to display various information sources on your desktop), a lot of themes allow you to retreive RSS feeds;</dd>
      <dt><a href="http://www.mozilla.org/products/thunderbird/"><? loadIcon16("thunderbird") ?> Mozilla Thunderbird</a></dt>
        <dd>This mail client can also manage RSS feeds in a nice way;</dd>
      <dt><a href="http://www.getfirefox.com/"><? loadIcon16("firefox") ?> Mozilla Firefox</a></dt>
        <dd>Version 1.0 of this WEB browser automatically searches for RSS feeds in pages, and allows you to display them as dynamic bookmarks;</dd>
      <dt><a href="http://www.sharpreader.net/"><? loadIcon16("sharpreader") ?> SharpReader</a></dt>
        <dd>This is a simple but efficient aggregator for Windows;</dd>
      <dt><a href="http://www.bradsoft.com/feeddemon/"><? loadIcon16("feeddeamon") ?> FeedDeamon</a></dt>
        <dd>An aggregator for Windows with more features;</dd>
      <dt><a href="http://www.newzcrawler.com/"><? loadIcon16("newzcrawler") ?> NewzCrawler</a></dt>
        <dd>Another aggregator for Windows with more features.</dd>
    </dl>

<?php include('includes/footer.php'); ?>