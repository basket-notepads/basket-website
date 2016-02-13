<?php
  $title   = "Contribute";
  $icon    = "contribute";
  $related = false;
  include('includes/header.php');
?>
<?php echoH2(); ?>

<p>
  You don't need to be a programmer to help make Basket Note Pads a great application.<br>
  We are searching for translators, packagers, artists, and bug reporters.
  Just contact us and we will be happy to include your contribution to Basket Note Pads.
</p>

<h3>Questions, Praise, Comments</h3>
  <h4>
    <img  src="icons/launchpad.png" alt="" width="32" height="32" />
    Questions on Launchpad
  </h4>
  <p>
    <a href="https://answers.launchpad.net/basket">answers.launchpad.net/basket</a>
  </p>
  <h4>
    <img  src="icons/mail-to-maintainer.png" alt="" width="32" height="32" />
    Mail The Maintainer
  </h4>
  <p>
    For quick help or immediate contact you can write a mail to the maintainer.
  </p>
  <p>
    Basket is currently maintained by <? emailLink("Gleb Baryshev"); ?>.
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

<h3>Bugs</h3>
  <h4>
    <img  src="icons/bugs.png" alt="" width="32" height="32" />
    Report Bugs
  </h4>
  <p>
    You can help us by making us aware of bugs in Basket Note Pads, giving instructions how to reproduce them or even fixing them.
  </p>
  <p>
    You can do so by talking to us on IRC, on the Mailing List, <a href="https://bugs.launchpad.net/basket" title="Launchpad bugtracker">submitting bug reports, commenting and voting on them</a> as well as helping us hunt down <a href="https://bugs.launchpad.net/basket/+bugs?field.status%3Alist=NEW&field.status%3Alist=CONFIRMED&field.status%3Alist=TRIAGED&field.status%3Alist=INPROGRESS&field.status%3Alist=FIXCOMMITTED&field.status%3Alist=INCOMPLETE_WITH_RESPONSE&field.status%3Alist=INCOMPLETE_WITHOUT_RESPONSE" title="Basket Note Pads open bug list">already reported bugs</a>.
  </p>

<h3>Code</h3>
  <h4>
    <img  src="icons/code.png" alt="" width="32" height="32" />
    Get The Source Code
  </h4>
  <p>
    You can find our code repository on <a href="http://github.com">GitHub</a>:
  </p>
  <p>
    <a href="https://github.com/basket-notepads/basket">github.com/basket-notepads/basket</a>
  </p>
  <p>
    The repository contains the project's most recent code and probably some features in development.
    So we recomend you to backup your data before doing any testing or development.<br />
    We're trying to keep the code compilable and usable, but remember: it's not a public release, so sometimes it can be hardly usable for daily needs.
    In those cases, get in contanct with the developers or retry a few days later.
  </p>
  <p>
    You can find instructions to download or clone the repository on <a href="https://github.com/basket-notepads/basket">Basket project page on GitHub</a>.
    The <a href="https://github.com/basket-notepads/basket/blob/master/README.md">README file</a> in the repository contains detailed instructions on how to build Basket and on how you can have your changes integrated into the main repository.
  </p>

  <h5>Basket for KDE3</h5>
  <p>
    The old KDE3 code has been completely imported into the Git repository above (including the branches), so those are still available.
  </p>
  <p>
    The <a href="https://github.com/basket-notepads/basket/tree/maint">maint</a>
    branch is where the KDE3 code is still being kept.
    It is frozen and no work will be done on it except for critical bug fixes.
  </p>

  <!--
  <h4>Additional components</h4>
  <p>For this application, we had to create new components that could also be usefull to other KDE applications. Here they are:</p>
  <dl>
    <dt><a href="systemtray-on-close-info.php">System Tray on Close Info Dialog</a></dt>
      <dd>Integrate the dialog that appears when closing main window in your application;</dd>
    <dt><a href="likeback.php">LikeBack - Quick Feedback from Beta-Testers</a></dt>
      <dd>A simple system to lower down the barriers between the users and the developers.</dd>
  </dl>
  -->

  <h4>
    <img  src="icons/documentation.png" alt="" width="32" height="32" />
    Developer Documentation
  </h4>
  <p>
    There is no explicit developer documentation available at the moment (except <a href="https://github.com/basket-notepads/basket/wiki">wiki on GitHub</a>).
    If you need help please turn to the developers via IRC or on the mailing list.
  </p>


<h3>Translations</h3>
  <h4>
    <img  src="icons/translation.png" alt="" width="32" height="32" />
    Help Translating Basket to Your Language
  </h4>
  <p>
    <strong>The following information is outdated and will be updated once the KDE 4 port is finished.</strong>
  </p>
  <p>
    If Basket Note Pads is not yet translated to your native language, you can help to make this happen.
    You can follow the instructions on our <a href="translate.php">translation HOWTO</a> and send us a patch.
  </p>


<?php include('includes/footer.php'); ?>