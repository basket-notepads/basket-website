<?php
  $title   = "Contact";
  $icon    = "contact";
  $related = false;
  include("includes/header.php");
?>
<?php echoH2(); ?>

<?php /* from contribute.php */ ?>
<h3>Questions, Praise, Comments</h3>
  <h4>
    <img  src="icons/mail-to-maintainer.png" alt="" width="32" height="32" />
    Mail The Maintainer
  </h4>
  <p>
    For quick help or immediate contanct you can write a mail to the maintainer.
  </p>
  <p>
    Basket is currently maintained by <a href="mailto:kelvie@ieee.org">Kelvie Wong</a>.
  </p>

  <h4>
    <img  src="icons/irc.png" alt="" width="32" height="32" />
    Join us in IRC
  </h4>
  <p>
    For fast help or a quick chat you can meet the developers on the #basket-devel channel on the irc.freenode.net server.
  </p>

  <h4>
    <img  src="icons/kde-apps.org.png" alt="" width="32" height="32" />
    Visit us on KDE-Apps.org
  </h4>
  <p>
    <a href="http://kde-apps.org">KDE-Apps.org</a> is a directory for KDE applications, so naturally you can <a href="http://kde-apps.org/content/show.php?content=10020" title="Basket Note Pads on KDE-Apps.org">find Basket Note Pads there</a>.
  </p>
  <p>
    There you can get in contanct with other Basket users and comment on the application itself.
    You can also vote Basket (up or down), so please vote and let us and other users know how you feel.
  </p>


<h3>Discussions</h3>
  <h4>
    <img  src="icons/mailinglist.png" alt="" width="32" height="32" />
    Development Mailing List
  </h4>
  <p>
    Development discussions take place in public.
    If you are interested in following or contributing to those discussions this is the place to be.
    Discussions generally revolve around things like
  </p>
  <ul>
    <li>User support</li>
    <li>Possible new features</li>
    <li>Finding and fixing bugs</li>
    <li>Release planing</li>
    <li>And general management</li>
  </ul>
  <p>
    To get a look at past topics you can <a href="http://sourceforge.net/mailarchive/forum.php?forum_name=basket-devel">browse the archives</a>.
  </p>
  <p>
    To join the discussions all you have to do is to <a href="https://lists.sourceforge.net/lists/listinfo/basket-devel">subscribe to the mailing list</a> to be able to <a href="mailto:basket-devel@lists.sourceforge.net">send emails</a> there.
  </p>
<?php /* end from contribute.php */ ?>

<h3>Contribute</h3>
  <p>
    You don't need to be a programmer to help make BasKet Note Pads a great application.<br>
    We are searching for translators, packagers, artists, and bug reporters.
    Just contact us and we will be happy to include your contribution to BasKet Note Pads.
  </p>
  <p>
    For more information how to participate and contribute please have a look at our <a href="contribute.php">contribution page</a>.
  </p>

<?php include('includes/footer.php'); ?>