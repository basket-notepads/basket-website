<?php
  $title   = "Changes of the Version 1.0";
  $icon    = "changelog";
  $related = false;
  include("includes/header.php");
?>
<?php echoH2(); ?>

    <ul>
      <li>New features:
        <ul>
          <li><strong>Export baskets in basket-archive files, and open them on another computer</strong></li>
          <li><strong>Open welcome baskets at first launch</strong> (including tips &amp; tricks), and let people re-open them later in the Help menu.</li>
          <li>Easily <strong>import from text files</strong> and cut notes logicaly.</li>
          <li>You can change the folder where baskets are saved (to ~/Baskets, ~/Notes or /mnt/myserver/baskets for instance).</li>
          <li>You can easily <strong>backup and restore</strong> basket data.</li>
          <li>Added a new background image</li>
        </ul>
      </li>
      <li>Changes in HTML exportation:
        <ul>
          <li>Export all sub-baskets when exporting to HTML</li>
          <li>Show a progress dialog when exporting to HTML, and to not show progress dialogs for every single file copy</li>
          <li>No more annoying dialog with useless options when exporting to HTML</li>
        </ul>
      </li>
      <li>Changed behaviors of the application:
        <ul>
          <li>A behavior I wanted to add for a long time, making BasKet Note Pads acts more naturally. I haven't changed it before because I needed to work arround a lot of bugs to make it seamless. Here is all what's changing, for a better, more natural use:
            <ul>
              <li>Note editors are now exactly the same size as the note.</li>
              <li>Even if notes are bigger than the screen.</li>
              <li>Everytimes (sometimes they were not exactacly the same size, until you waited for 3 seconds).</li>
              <li>No more double-scrollbars bug.</li>
              <li>The basket is scrolled to the cursor position when typing, so you can see what you type.</li>
              <li>No more unwanted auto-scroll to the begin of a big note when starting and ending editing.</li>
            </ul>
          </li>
          <li><strong>Clicking a link is opening it</strong>, and clicking the icon edit it (inverted button and link clicks). It was an important usabilty issue.</li>
          <li><strong>Global keyboard shortcuts changed to not interfer</strong> anymore with other global or application keyboard shortcuts.</li>
          <li>Pressing Escape in a basket unselect all notes.</li>
          <li>Always keep a space tall of 15 pixels at the bottom of columns, so that adding new notes there is quick and easy.</li>
        </ul>
      </li>
      <li>Fixes:
        <ul>
          <li><strong>Fixed five crashs often reported</strong> using the Crash Report Mailer, and <strong>possibly solve four other minor crashes</strong> I can not reproduce. This 1.0 version should be really stable compared to 0.6.0.</li>
          <li>Finally solved a very annoying bug on free-form baskets load with animations: <strong>free notes do not randomly grow in width anymore</strong>!</li>
          <li><strong>Removed the bug that was not always focusing the text-editor</strong> when clicking to edit a note. Was quite annoying!</li>
          <li><strong>Kontact integration is back for KDE 3.5.6</strong>.</li>
          <li>Ensure the current basket name visible in the tree, even when using Alt+Up / Alt+Down...</li>
          <li>Raise the main window when opening a basket archive from the desktop or Konqueror.</li>
          <li>Do not save the notes to disk at every letter typed! Go back to the scheme of saving after 3 seconds of inactivity. Results in <strong>better performance, especially in password-encrypted baskets</strong> where notes were re-encrypted at every letter the user typed.</li>
          <li>Optimisation: Uncache the note pixmap buffers when a basket is closed (another one is made active) to save a lot of memory.</li>
          <li>Compile with GCC 4.2.</li>
        </ul>
      </li>
      <li>Other:
        <ul>
          <li>Accept only English comments in LikeBack (people who read the comments are more and more international and there are too much LikeBack comments).</li>
          <li>Don't spam stderr, even when compiled without debug.</li>
        </ul>
      </li>
    </ul>

    <p><a href="full-changes-1.0<? /*echo $current*/ ?>.php" class="buttonBar" style="width: 31em;"><span>Changes Compared to Development Versions &nbsp;►</span></a></p>

<?php include('includes/footer.php'); ?>