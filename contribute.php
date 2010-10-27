<?php
  $title   = "Contribute";
  $icon    = "contribute";
  $related = false;
  include('includes/header.php');
?>
<?php echoH2(); ?>

<p>
  You don't need to be a programmer to help make BasKet Note Pads a great application.<br>
  We are searching for translators, packagers, artists, and bug reporters.
  Just contact us and we will be happy to include your contribution to BasKet Note Pads.
</p>

<h3>Questions, Praise, Comments</h3>
  <h4>
    <img  src="icons/mail-to-maintainer.png" alt="" width="32" height="32" />
    Mail The Maintainer
  </h4>
  <p>
    For quick help or immediate contanct you can write a mail to the maintainer.
  </p>
  <p>
    BasKet is currently maintained by <a href="mailto:kelvie@ieee.org">Kelvie Wong</a>.
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
    Visit us on <a href="http://kde-apps.org">KDE-Apps.org</a>
  </h4>
  <p>
    KDE-Apps.org is a directory for KDE applications so naturally you can <a href="http://kde-apps.org/content/show.php?content=10020" title="BasKet Note Pads on KDE-Apps.org">find BasKet Note Pads there</a>.
  </p>
  <p>
    There you can get in contanct with other BasKet users and comment on the application itself.
    You can also vote BasKet (up or down), so please vote and let us and other users know how you feel.
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
    You can help us by making us aware of bugs in BasKet Note Pads, giving instructions how to reproduce them or even fixing them.
  </p>
  <p>
    You can do so by talking to us on IRC, on the Mailing List, <a href="https://bugs.kde.org/" title="KDE Bugzilla">submitting bug reports, commenting and voting on them</a> as well as helping us hunt down <a href="https://bugs.kde.org/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=basket&long_desc_type=substring&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_status=NEEDSINFO&bug_status=VERIFIED&emailassigned_to1=1&emailtype1=substring&email1=&emailassigned_to2=1&emailreporter2=1&emailcc2=1&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Importance&field0-0-0=noop&type0-0-0=noop&value0-0-0=" title="BasKet Note Pads open bug list">already reported bugs</a>.
  </p>

<h3>Code</h3>
  <?php echoRelatedTop("Related Links"); ?>
  <ul class="more">
    <li><a href="development.php">Unstable Development Version...</a></li>
    <li><a href="roadmap.php">Roadmap...</a></li>
    <li><a href="rss.php">Stay tuned: use the RSS Feed...</a></li>
    <li><a href="contact.php">Contact Developer...</a></li>
  </ul>
  <?php echoRelatedBottom(); ?>
  <h4>
    <img  src="icons/code.png" alt="" width="32" height="32" />
    Get The Source Code
  </h4>
  <p>You want to always be up to date, or you want to participate in the development effort?<br>
  This is the page you're searching for.<br>
  Here are instructions to download and install the latest development version of this application.<br>
  The version you will download is the latest code produced one week or one hour earlier!<br>
  We're trying to keep that code compilable and usable, but remember it's not a public release, so sometimes it can be hardly usable for daily needs. In those cases, retry some days later...</p>
  <p>
  Currently BasKet has two repositories, active git repository where porting to KDE4 is being done and the old svn repository. If you want to help out, help with the porting effort is much appreciated!</p>

  <h5>Instructions to Get the Latest Development Code for KDE</h5>
  <p>Open a console, and type the following command to get copy of the git repository:</p>
  <p>
  <code style="font-family:monospace,Courier New">git clone git://github.com/kelvie/basket.git</code>
  </p>
  <p>You can also browse the repository with a web browser at <a href="http://github.com/kelvie/basket/tree/master">http://github.com/kelvie/basket/tree/master</a></p>
  <p>Please read the README in the repository for further instructions.</p>
  <p>To contribute, please send patches to the <a href="mailinglist.php">mailing list</a></p>

  <h5>Note on the old SVN tree</h5>
  <p>The old SVN tree has been completely imported into the Git repository
      above (including the branches), so those are still available.</p>
  <p>The <a href="http://github.com/kelvie/basket/commits/maint">maint</a>
    branch is where the KDE3 code is still being kept (and is code frozen,
    minus bug fixes).</p>

  <h4>Additional components</h4>
  <p>For this application, we had to create new components that could also be usefull to other KDE applications. Here they are:</p>
  <dl>
    <dt><a href="systemtray-on-close-info.php">System Tray on Close Info Dialog</a></dt>
      <dd>Integrate the dialog that appears when closing main window in your application;</dd>
    <dt><a href="likeback.php">LikeBack - Quick Feedback from Beta-Testers</a></dt>
      <dd>A simple system to lower down the barriers between the users and the developers.</dd>
  </dl>

  <h4>
    <img  src="icons/documentation.png" alt="" width="32" height="32" />
    Developer Documentation
  </h4>
  <p>
    There is no explicit developer documentation available at the moment.
    If you need help please turn to the developers via IRC or on the mailing list.
  </p>


<h3>Translations</h3>
  <h4>
    <img  src="icons/translation.png" alt="" width="32" height="32" />
    Help Translating BasKet to Your Language
  </h4>
  <p>
    <strong>The following information is outdated and will be updated once the KDE 4 port is finished.</strong>
  </p>
  <p>
    If BasKet Note Pads is not yet translated to your native language, you can help to make this happen.
    You can follow the instructions on our <a href="translate.php">translation HOWTO</a> and send us a patch.
  </p>


<?php include('includes/footer.php'); ?>