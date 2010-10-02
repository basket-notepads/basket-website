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
      <dt>
        <img  src="icos/32-svn.png" alt="" width="32" height="32" />
        <a href="svnaccess.php">Git Source Code Repository</a>
      </dt>
        <dd>
          <?php echoRelatedTop("Related Links"); ?>
          <ul class="more">
            <li><a href="development.php">Unstable Development Version...</a></li>
            <li><a href="roadmap.php">Roadmap...</a></li>
            <li><a href="rss.php">Stay tuned: use the RSS Feed...</a></li>
            <li><a href="contact.php">Contact Developer...</a></li>
          </ul>
          <?php echoRelatedBottom(); ?>
          <p>You want to always be up to date, or you want to participate in the development effort?<br>
          This is the page you're searching for.<br>
          Here are instructions to download and install the latest development version of this application.<br>
          The version you will download is the latest code produced one week or one hour earlier!<br>
          We're trying to keep that code compilable and usable, but remember it's not a public release, so sometimes it can be hardly usable for daily needs. In those cases, retry some days later...</p>
          <p>
          Currently BasKet has two repositories, active git repository where porting to KDE4 is being done and the old svn repository. If you want to help out, help with the porting effort is much appreciated!</p>

          <h3>Instructions to Get the Latest Development Code for KDE</h3>
          <p>Open a console, and type the following command to get copy of the git repository:</p>
          <p>
          <code style="font-family:monospace,Courier New">git clone git://github.com/kelvie/basket.git</code>
          </p>
          <p>You can also browse the repository with a web browser at <a href="http://github.com/kelvie/basket/tree/master">http://github.com/kelvie/basket/tree/master</a></p>
          <p>Please read the README in the repository for further instructions.</p>
          <p>To contribute, please send patches to the <a href="mailinglist.php">mailing list</a></p>
          <h3>Note on the old SVN tree</h3>
          <p>The old SVN tree has been completely imported into the Git repository
              above (including the branches), so those are still available.</p>
          <p>The <a href="http://github.com/kelvie/basket/commits/maint">maint</a>
            branch is where the KDE3 code is still being kept (and is code frozen,
            minus bug fixes).</p>
        </dd>
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