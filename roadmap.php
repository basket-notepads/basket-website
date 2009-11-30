<?php
  $title   = "Roadmap";
  $icon    = "roadmap";
  $related = true;
  include("includes/header.php");
?>

<?php echoRelatedTop("Other Progress Information"); ?>
      <ul class="more">
        <li><a href="development.php">Unstable Development Version...</a></li>
        <li><a href="svnaccess.php">SVN Repository Access...</a></li>
        <!--<li><a href="todo.php">TODO List...</a></li>
        <li><a href="dropdb.php">Drop Database...</a></li>-->
      </ul>
<?php echoRelatedBottom(); ?>

<?php echoH2(); ?>

    <style type="text/css">
      .helpwanted  { background-color: #FFF5EB; border: solid 1px #E6CDFF; }
      p.helpwanted { padding: 2px; }
      del          { color: red; }
      del.svn      { color: #FF8000; }
    </style>

<!--
Examples:
      <li><del>Keyboard navigation</del> (done in Alpha 2);</li>
      <li><del class="svn">Baloon feedbacks</del> (done in SVN);</li>
-->
    <p><b>Note:</b> While much of this is still relevant, this roadmap is out of date.  Either a lot of time, or more developers are required to make <i>all</i> of these happen.</p>
    <p>Here are all features I plan to implant into BasKet Note Pads in the future.<br>
    <!--The version numbers are only there for information purpose, and I will perhapse not follow them.<br>-->
    The features are splitted in groups, this gives a good idea of how features will be packed in different versions, and roughly when (first groups should be implemented first).</p>

    <h3>2.0</h3>
    <ul>
      <li>Be <strong>Qt 4 and KDE 4 based</strong>. This will allow:
        <ul>
          <li><strong>Available for Windows and Mac OS X</strong>, but also use the <em>same</em> baskets on both systems on the same computer</li>
          <li>Import from Windows and Mac OS X applications</li>
          <li>Undo/Redo (using the Qt 4 History framework) + Undo Basket Deletion</li>
          <li>Highlight searched terms in matching notes, with a yellow background color</li>
          <li>Image editor <span class="helpwanted">(need to import a very light version of KolourPaint for KDE 4, can be done independently by sombody else)</span></li>
        </ul>
      </li>
      <li>A new <strong>redesigned engine</strong> allowing to:
        <ul>
          <li>A new "document-like" interface from <a href="http://basket.openusability.org/">the usability project</a>, without annoying browsing/editing modes and with more one-click-to-do-everything</li>
          <li>Print</li>
          <li>Really transparent notes</li>
          <li>New vector-based look</li>
          <li>Solve Enter vs. Ctrl+Enter in text editors</li>
          <li>Live filters / Indexing / Store in a database (for faster loading/access/searching)?</li>
          <li>Show several baskets in different windows, or a basket in several windows (needed to add baskets on the desktop)</li>
          <li>Use threads (load baskets in a separate thread...)</li>
        </ul>
      </li>
    </ul>

    <h3>Features Nice to Have</h3>
    <ul>
      <li>Basket templates <span class="helpwanted">(send your ideas)</span>.</li>
    </ul>

    <h3>DCOP Interface, Plugins &amp; Scripting</h3>
    <p class="helpwanted"><a href="brainstorming/DCOP-ideas-basket.html">See this brainstorming ideas basket</a>.<br>
    I will <strong>need help from two sort of people: script makers and binding makers</strong>. I need people who know how to write eg. SuperKaramba scripts, and people who know Python, Ruby, etc., as I do not know those languages.<br>
    And if you have script/applets ideas or you want to write a script, contact me.</p>
    <ul>
      <li><strong>DCOP interface</strong>;</li>
      <li>BASH / C++ / Python wrappers for the DCOP interface;</li>
      <li>Some <strong>scripts, plugins and kicker applets</strong> included with the application.</li>
    </ul>

    <h3>New Types of Notes</h3>
    <ul>
      <li><strong>New alarm note type</strong>: allow to insert notes that will ring or display a message periodically. Should support basic needs like remind people each month/week to pay someone, visit a site or send papers to an organisme... Could be related to the grouped notes, so they shake with the alarm when is ringing or are shown in the message;</li>
      <li><strong>New table note type</strong>: write down tabular data easily and quickly. Not a full spreadsheat application but an easy to use basic table tool;</li>
      <li><strong>New contact note type</strong>: when dropping an email address, don't create a link note, but a contact one, perhapse integrated with Kontact... Should hold basic information about a person involved in a project: email address, phone number, IM presence...</li>
      <li><strong>New event note type</strong>: the idea is still blur, perhapse integrated with your Kontact calendar, or perhapse it will simply not be there;</li>
      <li><strong>New basket-link note type</strong>: allow to create a special link note that will open a determined basket, and perhapse also point to a determined note in that basket;</li>
      <li><strong>Support mail drops from KMail</strong>: anyone can drag and drop a mail from KMail (or Evolution) to a basket: a new kind of note is then created and it show basic informations (sender, subject, date) and the very first lines of the content (configurable). Clicking the note to edit it would instead open it in a KMail window or the KMail preview pane (configurable).</li>
    </ul>

    <h3>Ubiquitous Baskets</h3>
    <ul>
      <li>Put <strong>baskets on the desktop</strong>;</li>
      <li>Have a <strong>virtual read-only basket on the desktop that aggregate notes</strong> with the Important or Desktop tag, so people can easily and quickly pin some urgent notes on a well visible place, the desktop.</li>
    </ul>

    <h3>Sync Using the BasKet Sharing Server</h3>
    <p class="helpwanted">For this item, I started a whole <a href="http://sourceforge.net/mailarchive/forum.php?forum_id=46865">project on SourceForge.net</a> some months ago. It is currently dead (and only contains a mailing list), but I would want to continue it. If you know PHP, MySQL, HTML, CSS, JavaScript... you can partitipate. To know what roles you can do, here is the <a href="http://sourceforge.net/mailarchive/message.php?msg_id=13915896">message explaining who is needed in every part of the project</a>. Some specifications were written, but are now outdated according to the discussions that happened on the mailing list...</p>
    <ul>
      <li><strong>Synchronize baskets between several computers</strong>: synchronize either some personnal baskets or the entire application for transparent use on several computers; allow to share baskets with other people;</li>
      <li>Make an AJAX-based <strong>Web interface</strong> to view and modify shared baskets, or to use them on a computer where it's not possible to install BasKet Note Pads;</li>
      <li>This will be based on a <strong>rewritten WeBasKet</strong> (renamed to BasKet Note Pads Web and BasKet Note Pads Server).</li>
    </ul>

<?php include('includes/footer.php'); ?>