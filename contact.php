<?php
  $title   = "Contact";
  $icon    = "contact";
  $related = false;
  include("includes/header.php");
?>
<?php echoH2(); ?>

    <dl>
      <dt><? emailLink("Send an e-mail to the maintainer") ?></dt>
        <dd>BasKet is currently maintained by <a href="mailto:kelvie@ieee.org">Kelvie Wong</a>.</dd>
	<dd>BasKet Note Pads was originally authored and maintained by <a href="mailto:slaout@linux62.org">Sébastien Laoût</a> who has since stepped down.</dd>
	<dd>To report a bug, a suggestion, a wish, propose a patch, a package, or a port, use the <a href="likeback.php">LikeBack</a> interface in BasKet, or post it to the <a href="bugs/">bug tracker</a>.</dd>
      <dt><a href="mailinglist.php">Development Mailing List</a></dt>
        <dd>Development decisions take place between developers by emails on this list; feel free to join in even if you aren't a developer!</dd>
      <dt><a href="http://kde-apps.org/content/show.php?content=10020">Add a comment on BasKet Note Pads's KDE-Apps.org page</a></dt>
        <dd>KDE-Apps.org site allows you to post comments. This allows other people interested in your comments to see and reply to them. The site also allows you to vote for applications. Vote for BasKet Note Pads if you like it;</dd>
      <dt>Help with BasKet development</dt>
        <dd>You don't need to be a programmer to help make BasKet Note Pads a great application.<br>
          I'm searching for translators, packagers, artists, and bug reporters. Just contact me and I will be happy to include your contribution to BasKet Note Pads.</dd>
    </dl>

<?php include('includes/footer.php'); ?>