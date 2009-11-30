<?php
  $title   = "Changes of 1.0 Compared to Development Versions";
  $icon    = "changelog";
  $related = false;
  include("includes/header.php");
?>
<?php echoH2(); ?>
    <h3>1.0.3.1</h3>
    <p>Maintenance release:</p>
    <ul>
      <li>Danish translations added</li>
      <li>Fixed desktop files</li>
    </ul>
    <h3>1.0.3</h3>
    <p>Another maintenance release:</p>
    <ul>
      <li>Fix the rich text notes so disk access doesn't happen on every keypress</li>
      <li>Turkish translations added.</li>
      <li>Reroute emails from Sébastien's email to mine and the mailing list.</li>
      <li>Added fixes to compile on GCC 4.3</li>
    </ul>
    <h3>1.0.2</h3>
    <p>This is a bug-fix release:</p>
    <ul>
      <li>Reduced loading time for first "Filter all Baskets"</li>
      <li>Instantaneous "filter as you type"</li>
      <li>Faster text edition (no disk access at every key press)</li>
      <li>Enhanced link detection in text notes</li>
      <li>Focus baskets when using Alt+Up and Alt+Down</li>
      <li>Reviewed Japanese translation</li>
      <li>Compile on older distributions too (Mandrake 10.0)</li>
    </ul>

    <h3>1.0.1</h3>
    <p>This is a bug-fix release:</p>
    <ul>
      <li>Group is now working, as expected!</li>
      <li>Optimize speed when editing long text notes (do not draw the text content because there is the editor in front of it).</li>
      <li>Avoid freeze on KDE logout, and crashes on application exit.</li>
      <li>Turkish &amp; Simple Chiness translations.</li>
      <li>Enhanced French translation</li>
    </ul>

    <h3>1.0 RC 3</h3>
    <p>This third Release Candidate adds Russian translation (including welcome baskets), solve a bug in welcome basket links when a default search engine is selected in Konqueror, and solve an important usabilty issue: clicking a link is opening it, and clicking the icon edit it (inverted button and link clicks). This should be the last release candidate.</p>

    <h3>1.0 RC 2</h3>
    <p>This second Release Candidate correct Welcome Baskets bugs: the pt_PT one was having the "import" link not working, the translated welcome baskets were not used on some systems (English ones were used) and use the English ones for system not using UTF-8 to not get weired characters.</p>

    <h3>1.0 RC</h3>
    <p>Here we are. BasKet Note Pads is frozen for packagers to work, now. You can download it and compile it now, or wait one or two weeks for the packages to be ready. Here is what changed in this version, compared to Beta 3:</p>
    <ul>
      <li>New features:
        <ul>
          <li><strong>Open welcome baskets at first launch</strong>, and let people re-open them later in the Help menu.</li>
          <li>Made the two links of the welcome basket working.</li>
          <li><strong>Global keyboard shortcuts changed to not interfer</strong> anymore with other global or application keyboard shortcuts.</li>
          <li><strong>Translated</strong> to several languages.</li>
        </ul>
      </li>
      <li>Fixed bugs &amp; crashs:
        <ul>
          <li><strong>Fixed five crashs often reported</strong> using the Crash Report Mailer, and <strong>possibly solve four other minor crashes</strong> I can not reproduce. This 1.0 version should be really stable compared to 0.6.0.</li>
          <li>Finally solved a very annoying bug on free-form baskets load with animations: <strong>free notes do not randomly grow in width anymore</strong>!</li>
          <li><strong>Removed the bug that was not always focusing the text-editor</strong> when clicking to edit a note. Was quite annoying!</li>
          <li><strong>Kontact integration is back for KDE 3.5.6</strong>.</li>
          <li>Ensure the current basket name visible in the tree, even when using Alt+Up / Alt+Down...</li>
          <li>Raise the main window when opening a basket archive from the desktop or Konqueror.</li>
          <li>Do not save the notes to disk at every letter typed! Go back to the scheme of saving after 3 seconds of inactivity. Results in <strong>better performance, especially in password-encrypted baskets</strong> where notes were re-encrypted at every letter the user typed.</li>
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

    <h3>1.0 Beta 3</h3>
    <p>Since a few months, I figured out that 0.6.0 was an excelent release. Feature full and easy enough.<br>
    Tough some features were removed from the 0.6.0 initial plan, I tryed to add them in this 0.6.1 version, as well as most popular requests from you, the users.<br>
    The next release, 0.6.1 will be the last one targeted for KDE 3.<br>
    All in all, I'm proud to anounce the next release will not be numbered 0.6.1, but 1.0, finally!<br>
    The KDE 4 targeted version will be numbered 2.0.</p>

    <p>The version 1.0 Beta 3 continues on providing highly requested features.</p>

    <p>A lot of people contacted me (through email and LikeBack comments) because they worried about where are stored theire baskets. How to do backups, how to share them between computers.<br>
    So, I'm happy to annouce that BasKet Note Pads now lets you know where your basket data are saved, it allows you to change the save location, and it lets you quickly and easily backup and restore your data. That's a step further in being able to fully trust the application (if it wasn't enough yet ;-) ). For me, this is a very important characteristic of BasKet Note Pads.</p>

    <p>A long time ago, I also made a survey to know what note taking applications you were using before BasKet Note Pads. This allowed me to prioritize the programming of the different importers. But one of the most used "note taking system" was not having importer yet. This is now fixed: you can import you text files right into baskets, and automatically cut the file in several notes, all in an easily customizable way!</p>

    <p>Here are the complete list of new features:</p>
    <ul>
      <li>Easily import from text files and cut notes logicaly.</li>
      <li>Better menu organisation: simpler (smaller menus) and clearer (export to HTML and to Basket Archive are more distinct with new icons, and Save as/Open Basket Archive were Export/Import features, anyway, so they are now in the good menu).</li>
      <li>You can change the folder where baskets are saved (to ~/Baskets, ~/Notes or /mnt/myserver/baskets for instance).</li>
      <li>You can easily backup and restore baskets.</li>
      <li>Always keep a space tall of 15 pixels at the bottom of columns, so that adding new notes there is quick and easy.</li>
      <li>Pressing Escape in a basket unselect all notes.</li>
      <li>Changed a behavior of the application, a behavior I wanted to add for a long time, making BasKet Note Pads acts more naturally. I haven't changed it before because I needed to work arround a lot of bugs to make it seamless. Here is all what's changing, for a better, more natural use:
        <ul>
          <li>Note editors are now exactly the same size as the note.</li>
          <li>Even if notes are bigger than the screen.</li>
          <li>Everytimes (sometimes they were not exactacly the same size, until you waited for 3 seconds).</li>
          <li>No more double-scrollbars bug.</li>
          <li>The basket is scrolled to the cursor position when typing, so you can see what you type.</li>
          <li>No more unwanted auto-scroll to the begin of a big note when starting and ending editing.</li>
        </ul>
      </li>
      <li>BUG: Do not show file copy progress dialogs during HTML exportation, since there is already a progress dialog for the whole process.</li>
      <li>BUG: Sometimes, images &amp; files were not exported in HTML.</li>
      <li>BUG: Do not add a HTML tree when exporting only one basket to HTML.</li>
      <li>OPTIMISATION: Uncache the note pixmap buffers when a basket is closed (another one is made active) to save a lot of memory.</li>
    </ul>

    <h3>0.6.1 Beta 2</h3>
    <p>Compared to 0.6.1 Beta 1, this new version now export all sub-baskets when exporting to HTML, and shows a progress dialog during the process.</p>

    <h3>0.6.1 Beta 1</h3>
    <p>This new version includes the following new features:</p>
    <ul>
      <li><strong>Export baskets in basket-archive files, and open them on another computer</strong></li>
      <li>Added a new background image</li>
      <li>Removed the useless export dialog when exporting to HTML. Instead, show a standard file dialog (with folder and file name pre-filled)</li>
      <li>German translation</li>
      <li>Italian translation</li>
      <li>Updated translation for European Portuguese</li>
    </ul>

    <p><a href="changes-1.0.php" class="buttonBar" style="width: 21em;"><span>Changes of the Version 1.0 &nbsp;►</span></a></p>

<?php include('includes/footer.php'); ?>