<?php
  $title   = "Contribute";
  $icon    = "contribute";
  $related = false;
  include('includes/header.php');
?>
<?php echoH2(); ?>

    <dl>
      <dt><a href="translate.php">How to Translate BasKet Note Pads to Your Language</a></dt>
        <dd><b>This page is now out of date until the KDE 4 port is finished.</b>  If BasKet Note Pads is not yet translated to your native language, you can help to make this happens. This page explains how to do;</dd>
      <dt><a href="svnaccess.php">Git Source Code Repository</a></dt>
        <dd>You want to always be up to date, or you want to participate in the development effort? This is the page you're searching for;</dd>
      <dt>
        <img  src="icos/32-mailinglist.png" alt="" width="32" height="32" />
        <a href="mailinglist.php">Development Mailing List</a>
      </dt>
        <dd>
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
            To join the discussions all you have to do is to <a href="https://lists.sourceforge.net/lists/listinfo/basket-devel">subscribe to the mailing list</a> to be able to <a href="mailto:basket-devel@lists.sourceforge.net">send emails there</a>.
          </p>
        </dd>
      <dt><a href="wiki/doku.php?id=start">Developer Wiki</a> (Out of Date)</dt>
        <dd>The common dashboard where we put our ideas and didcuss what will be done for the next releases;</dd>
      <dt>IRC Channel</dt>
        <dd>Meet the developers on the channel #basket-devel of the server irc.freenode.net;</dd>
    </dl>

    <p>For this application, we had to create new components that could also be usefull to other KDE applications. Here they are:</p>

    <dl>
      <dt><a href="systemtray-on-close-info.php">System Tray on Close Info Dialog</a></dt>
        <dd>Integrate the dialog that appears when closing main window in your application;</dd>
      <dt><a href="likeback.php">LikeBack - Quick Feedback from Beta-Testers</a></dt>
        <dd>A simple system to lower down the barriers between the users and the developers.</dd>
    </dl>

<?php include('includes/footer.php'); ?>