<?php
  $title   = "Changes of 0.6.0 Compared to Development Versions";
  $icon    = "changelog";
  $related = false;
  include("includes/header.php");
?>
<?php echoH2(); ?>

    <h3>BasKet Note Pads 0.6.0 RC</h3>
    <p>This is the final release. It is now declared stable. You can download it. We only have to wait for packagers to work and me to do a new website, and 0.6.0 will be officialy released. Thanks to all people who commented using LikeBack, or who sent crash reports. They helped making this release rock. Because yes, this release ROCK!</p>
    <ul>
      <li>Bugs:
        <ul>
          <li>Finally remember toolbar positions and shown state accross executions.You can hide the format toolbar, and it will always be hidden during all your life :-) Cool !</li>
          <li>Edited notes are always matching the filter, so they do no disappear if the note is saved in the middle of an edition.</li>
          <li>While filtering, show a newly created note for edition. The editor does not fly in the void anymore.</li>
          <li>Grouping notes in free-form baskets now works!</li>
          <li>Let Shift+Maj+Up and Shift+Maj+Down to move notes up and down in a free group. Not perfect yet, but now possible.</li>
          <li>Group and Ungroup actions are enabled when needed, and only when needed.</li>
          <li>Updating a basket icon or background color in the basket tree whenever the icon is changed (the pixmap cache was not taking in account the icon).</li>
          <li>Free-form groups extends theire width to stick to big note widths. At last!</li>
          <li>Avoid keyboard-shortcut clashes after having opened the "Customize Tags" window.</li>
          <li>Avoid clashes of keyboard-shortcuts for deleted baskets.</li>
          <li>Solved the bug when copying an image or a file from the FS to a basket: a "Would you want to override?" dialog was shown!</li>
          <li>When creating a new tag and assigning it to a note, hovering over the tags-arrow of that note revealed the tooltip "Assigned Tags: " instead of "Assigned Tags: Name of my new tag".</li>
          <li>Disable "Move Up", "Move Down" and "Delete" in the tag editor dialog when there is no tag to move/delete. This avoids crashes.</li>
          <li>Disable the "Tag" and "State"/"Appearance" box when there is no tag in the tag editor dialog.</li>
          <li>Disable "Note -> Move on Top" and "Note -> Move on Bottom". It was not working, and it has no meaning, anyway.</li>
          <li>Fixed the layouting problem when one of the line of a text note was bigger or exactly as big as the note or group width (for instance, when that line was a big URL). No flickering anymore.</li>
          <li>When filtering all baskets, changing the filter text, and switching between baskets, the blue matching counts on the right of the basket names where changing randomly.This was because the found counts were not used for the cached image key of the basket name in the tree.</li>
          <li>The very first time a "filter all baskets" is done, the counts are way wrong for basket not already loaded.This was because I forgot to filter a basket just after loading it! :-/Now, the filter counts can be trusted at any time.</li>
          <li>"Insert -> Load from File" was not working when loading animations (animated GIF or MNG): the animation was not shown before an application restart.</li>
          <li>When dragging and dropping a note being edited, do not close the editor. It allows users to click somewhere, realise it's not where they wanted to create the new note, move it and start typing. Before that, the note would have been deleted during the move!</li>
          <li>Now, the old "Addictive Features" and "Note Looks" are not displayed anymore in the Settings dialog.</li>
        </ul>
      </li>
      <li>Crashes:
        <ul>
          <li>Do not crash when opening the "Notes Appearance" configuration page!I wonder how it could have worked all this time in KDevelop without crashing... Because it was meant to crash!</li>
          <li>Fix a crash often reported with the Crash Handler. Also fixed a crash when dropping trought the system to a basket not loaded yet.</li>
        </ul>
      </li>
      <li>Polishements:
        <ul>
          <li>Added all note types to the "Shift+middle-click to insert a note" setting. Webdesigners now can insert colors easily, people can load files or take screenshots directly, etc.</li>
          <li>The slogan was not updated everywhere.</li>
          <li>Enahnced the icon, thanks to Danil Dotsenko.</li>
          <li>Updated Norwegian Nynorsk translation.</li>
          <li>Updated Polish translation.</li>
          <li>Updated Japanese translation.</li>
          <li>Updating Spanish translation.</li>
        </ul>
      </li>
    </ul>

    <p>Note: On 16 Octoctober at 20H30 I uploaded an enhanced version of 0.6.0 RC: it contains full Russian translations and compile fixes for SuSE Linux.</p>

    <h3>BasKet Note Pads 0.6.0 Beta 2.2</h3>
    <p>The last beta version for 0.6.0. It focus on getting every translatable messages done so that translators can now work once and for all. Every new features are now done. From now on, we will fix bugs and crashes. Nothing more! This last beta also solve the most annoying bugs introduced in the Beta 2 and Beta 2.1, as well as others introduced earlier. If you do not dig too deep, this version is stable enough. Devil will be in the details for the final versions.</p>

    <ul>
      <li>Features:
        <ul>
          <li>Option to disable automatic bullet transformation.</li>
          <li>Automatic locking of closed password-protected baskets after a determined timeout.</li>
          <li>Added buttons for undo/redo within a note editor.</li>
          <li>Long basket names have a tooltip in the basket tree to show truncated names.</li>
          <li>A feedback icon in the statusbar informs you when a basket is not saved. Be very careful: you will never see it longer than 3 seconds ;-)</li>
          <li>Use standard Show/Hide Toolbars action and always show the formatting toolbar to not make the interface flicker all the times.</li>
          <li>Enhanced LikeBack in order to release 0.4: redesigned the GUI and the API according to kde-core-devel and kde-usability mailing lists feedback.</li>
          <li>Settings dialog revamped.</li>
        </ul>
      </li>
      <li>Solved bugs (thanks to people who reported those bugs through LikeBack comments):
        <ul>
          <li>When KDE session is restored, the main window is not shown.</li>
          <li>Remember window size accross executions.</li>
          <li>The Disk Error dialog is not shown anymore when deleting a basket!</li>
          <li>Changing the value of a combobox in the settings was not enabling the Apply button.</li>
          <li>Make Ctrl+Shift+W global keyboard shortcut configurable again.</li>
          <li>Show Configure Global Shortcuts in Kontact too.</li>
          <li>Copy/paste and drag/drop from Konqueror HTML page now keeps formating.</li>
          <li>Make the installer compatible with Ubuntu/KUbuntu.</li>
        </ul>
      </li>
      <li>Small details:
        <ul>
          <li>Ctrl+L to easily lock baskets again.</li>
          <li>Greatly improved Norwegian Nynorsk translation.</li>
          <li>Changed some global keyboard shortcuts to not conflict with Konsole.</li>
          <li>Basket tree redrawing is now instantaneous.</li>
          <li>Updated translations.</li>
          <li>Added an Help Link for "Show balloons to report result of global actions", and corrected other small messages.</li>
          <li>Enhancements to the layout of the password dialog.</li>
        </ul>
      </li>
    </ul>

    <h3>BasKet Note Pads 0.6.0 Beta 2.1</h3>
    <p>Beta 2 was quite crashy when used in Kontact, and got some regressions while doing the integration with Kontact. This interim version fixe the most annoying crashes and bugs:</p>
    <ul>
      <li>Do not crash anymore when running in Kontact</li>
      <li>Make it compile on Mandriva</li>
      <li>Kontact statusbar first field used when integrated in Kontact, instead of adding another statusbar field</li>
      <li>Clicking the systray when the window is minimized restores the window again instead of hiding it</li>
      <li>The parameter "--start-hidden" work again by hidding the main window on application startup</li>
      <li>Added Japanese and Norwegian Nynorsk translations</li>
      <li>Fixed various typo errors</li>
      <li>Removed useless "Format for impression" option in HTML export dialog. Also hidden the features that are now cutted from 0.6.0 (now concentring on fixing bugs and crashes for the final release). The features are basket custom templates, basket custom background image. Will be added in later versions.</li>
    </ul>

    <h3>BasKet Note Pads 0.6.0 Beta 2</h3>
    <p>Impressing new features have been added. This is potentially the last "big new features" release before the stable finale 0.6.0 version. On the following months, we will concentrate on fixing bugs and crashes, and polishing the user experience.</p>

    <ul>
      <li>New features:
        <ul>
          <li><strong>Integrated into Kontact</strong></li>
          <li><strong>Tags Customization</strong> dialog</li>
          <li><strong>Tags menu</strong> added. Will brind tags to more people (those who haven't seen the little arrow and for keyboard users to trigger the menu)</li>
          <li><strong>Completly removed plain text notes</strong>, and automatically/obligatory convert them to rich text ones</li>
          <li>Updated Portugues and Russian translations. Added Czech and Turkish translations</li>
        </ul>
      </li>
      <li>Enhacements asked by people posting Like/Dislike/Bug comments:
        <ul>
          <li>You can <strong>set the font size in text notes</strong>!</li>
          <li>Added an option to <strong>disable confirmation before deleting notes</strong></li>
          <li>Do not crash when pasting "-" or "*" on begin of a paragraph in rich text editor</li>
          <li>LikeBack lets you ask for features (feature requested by some user ;-) Let's see how it will turn in order to have an experience to tell about to kde-core-devel people)</li>
        </ul>
      </li>
      <li>Enhanced the Like/Dislike/Bug system:
        <ul>
          <li>Allow to define your email address for us to contact you to ask more information about your comments</li>
          <li>Gray the Send button if no message is typed</li>
          <li>Do not show the LikeBack icons next to the systray icon when a kicker applet has focus.</li>
          <li>Small other enhancements</li>
        </ul>
      </li>
      <li>Fixes:
        <ul>
          <li>Make <strong>drag &amp; drop to system tray work</strong></li>
          <li>Do not crash when appying settings if GPG is not compiled in.</li>
          <li>Do not crash or bug when loading an unexisting Text, Html or Image file.</li>
          <li>Ask a new password if protection type is 'Password' and OK is pressed in the Password dialog.</li>
          <li>Disable "Properties", "Export to HTML", "Remove" and filter actions when a basket is locked.</li>
          <li>When filtering all baskets, don't try to load basket if it is encrypted. Show encrypted icon instead.</li>
          <li>Only use gpg-agent in private/public key encryption.</li>
          <li>Focus on Unlock button if basket locked.</li>
          <li>Clear password cache when a wrong password is entered or on error.</li>
          <li>./configure now checks for kpinterfaces and warnings if gpgme ot kpinterfaces is not found.</li>
          <li>When selecting a font (or a size), the text editor gets focus back (but not while typing a font name or size by hand, as expected)</li>
          <li>Added a blank separator between font and color selectors in the rich text toolbar</li>
        </ul>
      </li>
    </ul>

    <h3>BasKet Note Pads 0.6.0 Beta 1</h3>

    <p>With this first beta, every 0.5.0 features are back, important changes in the application behaviour are introduced (like the rich text notes by default), and a lot of bugs have been solved!<br>
    Future development versions will be fit and finish: add tag edition, polish export to HTML, correct free-form basket bugs...</p>

    <ul>
      <li>Features added back from 0.5.0:
        <ul>
          <li><strong>Notes are refreshed when the associated files are modified</strong>! At last bug-free, without hack, compiling and working on every computer! Was longly awaited...</li>
          <li>Re-added <strong>baloon popup feedback for global actions</strong>, with some enhancements: it works while adding several notes at once, it shows note content in the same nice way that when dragging notes, and the popup is not shown if the main window is active, because it's redundant.</li>
          <li>Scroll the system tray icon switch to previous / next basket</li>
          <li>The addictive option &quot;Shift+middle-click to paste, insert...&quot; is now back</li>
          <li>Implemented <strong>Note -&gt; Move on Top / Up / Down / Bottom</strong>. This completes the keyboard navigation</li>
        </ul>
      </li>
      <li>New interesting features:
        <ul>
          <li>Baskets can be <strong>password-protected</strong>. Two methods: simple password or GPG private key encryption! Thanks to Petri Damsten.</li>
          <li>A begin of <strong>KnowIt importer</strong>! (thanks to Petri Damsten)</li>
          <li>A begin of <strong>TuxCards importer</strong>! (crypted notes are not imported yet)</li>
          <li>&quot;<strong>Note / Ungroup</strong>&quot; now works</li>
          <li>Now use KIconDialog++, a new dialog-box to select icons, with better usability (both cleaner/simplier view and more efficient to use). This will be the icon selector dialog of KDE 4!</li>
          <li>Removed the 3 options &quot;Validate text editors with Enter key&quot;, &quot;type in the basket to filter, insert...&quot; and &quot;type begining with a comma to filter, insert...&quot; because they are now irrelevant with the concept of not closing the editors</li>
        </ul>
      </li>
      <li>Fixes toward Rich Text notes to become first-class citizen:
        <ul>
          <li><strong><u>Rich Text notes are now the default type of note!</u> You should never have to deal with plain text notes anymore. If that change is concluding, plain text notes will be removed from the final version.</strong> Every drawbacks of rich text notes have been fixed:</li>
          <li>Rich text toolbar started with the style of the first character in the note and not the style of the current character. If you had a rich text note with a bold first line, editing anywhere would edit bold. You had to move your cursor at least once to make the format normal</li>
          <li>Paste plain text to a rich text note: new lines were wrongly interpreted as new paragraphs</li>
          <li>Copying notes also copy them as QTextEdit MIME type, so that formatting is not lost when pasting to a rich text editor</li>
          <li>In rich text editors, create a new paragraph both with Shift+Enter and Ctrl+Enter. User do not have to remember which key allows that!</li>
          <li>Go back to &quot;Icon Only&quot; main toolbar and move the rich text toolbar on top, now that it's small enough to have the two toolbars on one line</li>
          <li>Copying a rich text note to pain text was not converting back HTML entities</li>
        </ul>
      </li>
      <li>Bug fixes and Behavioural changes: it work as you tought it would work:
        <ul>
          <li><strong><u>No data loss when no disk space left!!!</u> A modal dialog tells you to remove files and the application will automatically continue when it's OK</strong></li>
          <li>Fix crash on exit</li>
          <li>Press Escape anywhere in the basket to cancel editing</li>
          <li>Press Escape in the text and tag filter boxes to reset filter and come back to the basket... Press Enter on text and tag filter boxes to focus the basket by keeping the filter set</li>
          <li>Three options to create a basket: &quot;New Basket...&quot;, &quot;New Sub-Basket...&quot; and &quot;New Sibling Basket...&quot; + New toolbar icon with dropdown to choose amongst all of them</li>
          <li>Creating new sub-basket and sibling basket: now initialy have the same icon, the same appearrance and the same layout by default. This is more what people want when they create such baskets.</li>
          <li>New Basket window now have an empty basket name by default to force people to choose a name and not have 20 baskets named... &quot;Basket&quot; :-)</li>
          <li>If you pasted an URL, edited the created link note, selected a part of the title and deleting that selection (or pressing exactly one key that modified the text), then the &quot;Auto title&quot; was not unpressed and validating the edition was not taking your custom title into account</li>
          <li>Insert a note, click a note below to edit it (in the same group): it is edited but not selected... and when clicking another note to edit it, editor is closed, and that's all: the clicked note was not edited</li>
          <li>Typing an URL with only letters and digits was very slow when &quot;Auto Title&quot; or &quot;Auto Icon&quot; was pressed. It is the case when you start typing a URL from scratch. This slowness is now fixed</li>
          <li>If you assigned, removed or changed a tag to a note during edition, the editor background and text color was not changed accordingly</li>
          <li>Empty Free-Form Basket: transofrm to column layout: bug: no column, no way to use the basket!!!!!!!</li>
          <li>Resizing a note while editing doesn't steal editor focus</li>
          <li>Shift+click a note handle select from last clicked note</li>
          <li>Shift+click a group now select range as you would expect, and not select until the end of the basket!</li>
          <li>Ctrl+Shift+click a note now is a combined &quot;select range&quot; and &quot;keep selected notes selected&quot;</li>
          <li>Removing note at end of column: focus the last note in the column instead of the first in the next column</li>
          <li>Click on top of the second column to add a note and then cancel: should select the first note of the 2nd column instead of the last note of the first column</li>
          <li>Click Tags arrow: focus was not in the menu</li>
          <li>When the basket tree was scrolled, dragging one note to another basket was opening the wront basket</li>
          <li>Mouse scroll in editors when nothing to scroll now scroll the basket</li>
          <li>Drag to move a note from one location to the oposite: don't center view on old position</li>
          <li>Inserting notes with global action (grabing screen zone...) while the current basket is not loaded yet (like after a KDE session restore) then the added image/color/note... is lost. Now, the basket is first loaded (with baloon feedback) and the data is then added.</li>
          <li>Move mouse inside an editor: do hover effect on note content</li>
          <li>Edit a note, type text and immediatly scroll down to not see the editor anymore, after 3 seconds, when auto-save triggered, the view were scrolled to the editor. The bug also occured when resizing a note while editing another one.</li>
          <li>Text editor scrollbar now have the good mouse cursor form</li>
          <li>Pressing Escape or Enter in the rich text font selector or the color selector go back to the rich text editor</li>
          <li>When a basket was having two scrollbars and we resized the window up, the corner space was not painted: it was uggly</li>
          <li>Pressing Up, Down, PageUp or PageDown when there is no other note to focus now scroll the basket in that direction</li>
          <li>PageUp and PageDown are working OK in free-form baskets</li>
          <li>Menu entry for &quot;Filter&quot; and &quot;Reset Filter&quot; now display a good feedback (toggled and enabled when it should)</li>
          <li>The &quot;Important&quot; and &quot;Very Important&quot; tags were having the same keyboard shortcut with AZERTY keyboards. Now fixed on first application launch. If you want to fix that bug in your application, delete the file ~/.kde/share/apps/basket/tags.xml and restart the new version... Assuming you have not added any custom tag (in this case, you are knowledgable enough to change it).</li>
          <li>Selecting several notes spread over several columns, and acting on those notes... was sometimes not acting on all of those notes</li>
          <li>Select a folded group, click &quot;Group&quot;: it is unfolded because a new group contains it</li>
          <li>Clicking an handle of a note in a selected group now select that note only.</li>
          <li>Added Paste to the systray icon context menu</li>
          <li>Clicking handle of an edited note now cancel editing</li>
          <li>Close the editor when right-clicking the note handle, so the Delete, Copy and Cut will work for that note</li>
          <li>When loading, statusbar now show &quot;Loading...&quot; instead of &quot;No note.&quot;</li>
          <li>When importing KDE launcher, KDE icon, a note from file... close previous editor and select only the new note</li>
          <li>Grabbing screen zone with global shortcut and canceling was showing the main window even if it was first hidden</li>
          <li>Right-clicking a basket and choosing Paste while you were editing a note was resulting in pasting the clipboard to that note, and not creating a new note</li>
          <li>Editing an empty note and quitting: the note was not deleted</li>
          <li>Was crashing if you choosen &quot;Grab Screen Zone&quot; while you were already grabbing a screen zone (such as assigning a keyboard shortcut to the action and pressing it twice)</li>
          <li>&quot;&amp;Grab Screen Zone&quot; and &quot;Configure &amp;Globa Shortcuts&quot; was having the same accelerator key in the systray icon</li>
          <li>Do not wait half a second before grabbing a screen zone with the global shortcut if the main window was not shown!</li>
          <li>Show the main window just after having created a new basket with global shortcut, or system tray icon popup menu, or after having created a new note.</li>
          <li>Global shortcuts to insert empty notes were not working!</li>
          <li>Redone the &quot;click on the right of the inserter line to group a new note&quot; image to be more obvious, and added an explaining image for &quot;export tags in texts&quot;</li>
          <li>The toolbar Group icon is disabled when needed</li>
          <li>Basket tooltip when editing was still &quot;Confirm note changes&quot; even if now, clicking the basket to close the editor is not needed anymore. Same goes for statusbar message: was still showing &quot;Editing. Press Escape...&quot; when editing.</li>
          <li>In the XML saved files, typo mistakes were made: &quot;backroundColor&quot; instead of &quot;backgroundColor&quot;, &quot;backroundImage&quot; instead of &quot;backgroundImage&quot;, and &quot;lastOpenned&quot; instead of &quot;lastOpened&quot;!</li>
        </ul>
      </li>
      <li>Helping prevent new bugs and enhance the application:
        <ul>
          <li><strong>Introducing the LikeBack concept</strong>. It still is rought, but it's to test how well that concept can work</li>
          <li><strong>When crashing, the user mail client is set up to send a mail with full backtrace</strong> (like with Amarok)</li>
          <li><strong>The quick installer compiles with debug symboles enabled</strong> for the alpha and beta versions!</li>
        </ul>
      </li>
    </ul>

    <h3>BasKet Note Pads 0.6.0 Alpha 2b</h3>

    <p>This alpha 2 corrects the data loss that were present in every Alpha 1 versions.<br>
    But I discovered the data loss while I've already developed lot of new features targetted for Beta 1.<br>
    Since those new features are stable (in fact they are globally more stable than alphas 1), I give them to you with the correction, as a bonus and a present to excuse the possible data loss!<br>
    Some behavioural changes may appear to be strange but I will talk about them when it's time to release Beta 1...</p>
    <p>Changes in 0.6.0 Alpha 2 compared to 0.6.0 Alpha 1 D:</p>
    <ul>
      <li>Little changes that make the difference:
        <ul>
          <li><strong>Text editors don't close themselves anymore</strong>. Who has never wanted to edit a text note by refering to something in another window? A quick double Alt+Tab and the editor is closed, you have to re-open it, place the cursor where it was... before being able to take note again. Now, the editors are only closed when you go to another basket or, of course, press Escape/Enter or click in the basket. Additionnaly, if you add lines to your text, <strong>the note grow/reduce with the editor</strong> (and you see the animation), AND your basket is saved after 3 seconds of inactivity, offering you more safety (no need to close the editor to be sure the long text you typed is safely saved).</li>
          <li>The <strong>inserter right-part to group new note is now disabled</strong>: clicking anywhere on the insertion-line will now insert everytimes. To group notes, choose "Group" in the "Note" menu (or press Ctrl+G). The old behaviour is still activable by an "addictive feature" in the configuration dialog.</li>
          <li>When filtering, <strong>show every matching notes</strong>, even if they were hidden in a closed group</li>
          <li><strong>Free layout baskets have a blank space at the end</strong>, so it's easier to append new notes there</li>
          <li>Changed some other little behaviours to make the application respond more naturally. For instance: when drawing a selection rectangle, don't select the notes that are not VISIBLE in that rectangle; don't select a note when clicking to launch.</li>
        </ul>
      </li>
      <li>New features:
        <ul>
          <li><strong>Keyboard navigation</strong> is near to be finished: insert new notes (with the Insert key, the Insert menu or when pasting) under the current focused note.
            <ul>
              <li>Home/End keys first do that in theire group/column before doing it in the entire basket, Ctrl+A also have the same smart behaviour: press it repeatedly to increase its action scope</li>
              <li>You can assign/remove/change tag of note(s) with keyboard shortcuts (Ctrl+1, Ctrl+2...)</li>
              <li>Notes are always inserted below the focused note (it's no more possible to configure to add them on top or on bottom)</li>
            </ul>
          </li>
          <li>Data can be <strong>imported from Tomboy</strong>!</li>
          <li>Data can be <strong>imported from KJots 0.7</strong>, the version included in KDE 3.5 that is using a new XML format.</li>
        </ul>
      </li>
      <li>Little additions and fixes:
        <ul>
          <li><strong>More seamless group folding animation</strong>: when the top note was smaller than the others, the animation seemed unnatural and sub-notes disapeared sudently at the end of the animation</li>
          <li>Added "Color from Screen" and "Grab Screen Zone" in the system tray icon context menu</li>
          <li>Fixed a crash relative to keyboard navigation (introduced in Alpha 1 D), and another rare crash with rich text editor (introduced in Alpha 1), plus some other small ones</li>
          <li>Fixed display refresh bugs when using the arrow keys</li>
        </ul>
      </li>
    </ul>

    <h3>BasKet Note Pads 0.6.0 Alpha 1 D</h3>

    <p>My new year present: Alpha 1 is finally downloadable and usable.<br>
    The new drag and drop system is featured on this screenshot: you can drag several notes at once (all ten notes are selected on the screenshot), there is a useful preview of what you are dragging (the gray rectangle under the mouse) and when copying and pasting the notes in a text editor (the KWrite window in the screenshot), the tags are replaced by a textual equivalent (you can disable this behaviour)...</p>

    <p><strong style="text-decoration: underline">Here is what's new in Alpha 1 D, compared to Alpha 1 C</strong>:</p>
    <ul>
      <li>Compiles again with KDE 3.3.</li>
      <li>You now can <strong>grab a zone of the screen to an image note</strong> (screen capture). It's a little addition but a VERY IMPORTANT ONE. I wonder how I lived without it for so long time. Imagine you can capture everything on scren : backup your train reservation, a part of an interesting website, a PDF part you want to copy exactly, your displayed highscores on a game, a website design you like and would want to use as an inspiration... It's very simple to use and is so indispensable. I urgently needed it, and I'm sure you too.</li>
      <li><strong>Auto-spellCheck of text notes</strong> was not remembered and was always disabled!</li>
      <li>Solved the bug when a text note was very big and you clicked  on the top of it to edit it: the cursor was well placed on top but not visible because the bottom of the note was visible.</li>
      <li><strong>The &quot;item&quot; generic concept is renamed to &quot;note&quot;</strong>, more in phase with the application principle (and I profited of that to sanatize the code by renaming lot of stuff).</li>
      <li>New <strong>russian translation</strong>.</li>
      <li>There is a <strong>begining of keyboard navigation</strong>. It's <strong>highly un-polished</strong> but I had to release a version to correct the bug above and make public the screen capture tool.</li>
    </ul>
    <p><strong style="text-decoration: underline">Here is what's new in Alpha 1 C, compared to Alpha 1 B</strong>:</p>
    <ul>
      <li>Export to HTML is back (it is not complete (all groups are exported expanded, item tooltips are not present, and Internet Explorer gets some display bugs) but it is usable daily). <a href="developement/Research.html">Here is an exemple of basket exported to HTML</a>.</li>
    </ul>
    <p><strong style="text-decoration: underline">Here is a list of all changes in Alpha 1 B, compared to Alpha 1</strong> (crash, bugs, compilation and usability errors fixes; as well as the come back of import):</p>
    <ul>
      <li>The only new feature: <strong>import from KNotes, KJots and GNOME Sticky Notes is back</strong> (notes are grouped with theire title and the title gets assigned the Title tag, and for KJots, notebooks are imported in different baskets, all grouped in one basket in the basket tree)!</li>
      <li><strong>Do not crash if a popup menu is not found</strong> because of old installed basketui.rc file, but inform the user how to solve that problem</li>
      <li>REALLY solved the compilation problem when <strong>compiling without aRts</strong></li>
      <li><strong>Bug fix</strong>: Move an item to a moved group is now forbidden (produced strange results and was unwanted)</li>
      <li><strong>Bug fix</strong>: when changing properties, column sizes were equalized even if you haven't changed the number of column</li>
      <li><strong>Bug fix</strong>: Solved colored-rounded-rectangle display bug in the basket tree when font size is big</li>
      <li><strong>Bug fix</strong>: when clicking a text item to edit it, sometimes the cursor appeared both were you clicked and at the end of the item</li>
      <li><strong>Bug fix</strong>: Sometimes, pressing Alt+Left to go to the previous basket was doing nothing (but repeating the press would make it work). You now can trust this shortcut to work in all circumstances</li>
      <li><strong>Bug fix</strong>: The tip "Ctrl+drop: copy, Shift+drop: move, Shift+Ctrl+drop: link." when dragging item was not always shown in the statusbar</li>
      <li><strong>Usability enhancement</strong>: Added tooltips on icon/name/backgroundColor widgets in the new basket and basket properties dialogs to make the role of them more obvious</li>
      <li><strong>Usability enhancement</strong>: Added "Click on the right to group instead of insert", etc. on the insertion-line tooltip. The insertion-line color is also slightly modified when you're going to group</li>
      <li><strong>Usability enhancement</strong>: Added help in Configure -> File Look: "You disabled preview but still see images?"</li>
      <li>Now <strong>allow insertion shortcuts</strong> (Ctrl+T, Ctrl+H and Ctrl+Y by default) <strong>to work even when you are in edition mode</strong> (by eding the editing first and inserting just after). <strong>Replaced Ctrl+T by the Insert key</strong> (Insert Text Item). Also <strong>inherit tags of the last item in a column when adding an item on the bottom of a column</strong> (it was a bug). ALL IN ALL, if you eg. have a list of To Do items, you press Insert to add another line, type text, do NOT close the editor (with the Escape key) and directly press Insert to add another line: it's way faster than before... And it's just a start: with the come back of keyboard navigation in Beta 1, 0.6.0 will rock</li>
      <li>Modified the basket.spec file to make it errorless for packagers</li>
    </ul>


    </ul>
    <p><strong style="text-decoration: underline">Here is a list of all changes in Alpha 1, compared to 0.5.0 and Make-it-Cool 3</strong>:</p>
    <ul>
     <li><strong>Baskets are now in a tree</strong> (instead of tabs) and can contain sub-baskets. This also allow you to have a big number of baskets and show basket background and text colors in the name to distinguish them quicker.</li>
     <li>Improved Basket Properties dialog: easier and more elegant to the eyes, it concentrate on essential basket perperties.</li>
     <li>Reworked New Basket dialog: more easy too, and it's not a wizard anymore... Baskets are created based on a template, chosen in a list.</li>
     <li>Background images in baskets are now loaded on demand, cached and shared in all the application (ie. setting the same background image for every baskets will lead to only one copy of the image in memory: more efficient and fast).</li>
     <li>You can <strong>search in tags</strong> (show only items that have at least one tag, that don't have any tag, that have a tag or its sub-states, or that have a special state like "Checked"...).</li>
     <li>You can <strong>filter all baskets in one click</strong> (to search for a word or a tag in all baskets at the same time).</li>
     <li><strong>Import Icon show the chosen icon in every icon sizes for you to preview</strong> your choice, and the size choice is kept as the default choice for later import.</li>
     <li>Inserter lines show a little mark at theire middle to show the limit between Insert and Group actions.</li>
     <li><strong>Fixed the crash that occured when removing all content of a text item editor containing multiple lines</strong>.</li>
     <li>Added the <strong>command-line option --start-hidden</strong> (or -h) to hide the main window in the system-tray icon on startup. People starting BasKet with KDE Autostart will be happy :-)</li>
     <li>Added help in the Settings dialog, on page Applications, to <strong>explain how to change the web browser and the apps that open files/links</strong>.</li>
     <li>Now <strong>compile if you do "./configure --without-arts"</strong>.</li>
     <li>You now can <strong>copy/cut/paste/drag/drop/move/open/open_with... several items AT ONCE</strong>. A revolution, isn't it? ;-)</li>
     <li>Dragged/Copied several items can be pasted as text, rich text as one block. Tags are also presented with text equivalents.</li>
     <li><strong>When dragging items, you see a preview of theire content</strong> (text or rich text content, links with icon and title, files with file preview...)</li>
     <li>If you are editing a text, a rich text, a file or a sound item, <strong>cut/copy/paste/delete/select_all/unselect_all now act on the current selected text in the inline editor</strong>, and not on the current basket.</li>
     <li>Items Enhancements:
      <ul>
       <li><em style="color: darkgreen">General</em>: when <strong>adding an item and immediatly canceling, the item is deleted</strong>. Item is also deleted if you clear it (set an empty text or link...).</li>
       <li><em style="color: darkgreen">Sound, File, Link and Launcher</em>: clicking it now edit (like every other items) but clicking the icon launch it (the icon is transformed to a "open" button when mouse is over the item)</li>
       <li><em style="color: darkgreen">File, Link</em>: a <strong>file preview</strong> is shown instead of the icon, when available (can be turned off);</li>
       <li><em style="color: darkgreen">File, Sound</em>: The <strong>edition of filename is now inline</strong> as other text items.</li>
       <li><em style="color: darkgreen">Text and Rich Text</em>: <strong>Edit cursor starts where clicked</strong>; <strong>URLs are automatically linkyfied</strong> and are clickable (target displayed in the status bar); the text in the editor is exaclty aligned with the displayed text of the item: when you click to edit textual item, the text is still at the exact same place.</li>
       <li><em style="color: darkgreen">Text</em>: <strong>spell-checking</strong> in the editor (can be disabled with the editor popup menu: and this will be remembered).</li>
       <li><em style="color: darkgreen">Rich Text</em>: The edit <strong>toolbar now remember its position</strong> (is on bottom by default, to not disturb you), state (docked or not) and you can configure custom shortcuts for the actions (align left, center...) and remove buttons from it; When filtering, it <strong>does not search in HTML tags anymore</strong> :-)</li>
       <li><em style="color: darkgreen">Image</em>: tooltip show the image size.</li>
       <li><em style="color: darkgreen">Animation</em>: No flicker anymore.</li>
       <li><em style="color: darkgreen">Sound, File</em>: tooltip show the file size.</li>
       <li><em style="color: darkgreen">Link</em>: tooltip and statusBar show the target; auto-icon is found even if you set an URL that do not start with "http://" or "http://www.": "http://" will be added for you; "https://" URLs are now transformed to links (when pasting/dropping such texts).</li>
       <li><em style="color: darkgreen">Launcher</em>: tooltip show the command and optionnaly the comment.</li>
       <li><em style="color: darkgreen">Color</em>: <strong>shown in a small rectangle with the hexadecimal text alongside</strong> (better visibility); Tooltip show the RVB and HSV representation and the CSS color name or extended color name (when available).</li>
       <li><em style="color: darkgreen">Unknow</em>: <strong>A new distinguishable look</strong>: the list of MIME types is inside a box, making it clear it is not a text item.</li>
      </ul>
     </li>
    </ul>
    <p>Some features and options have been removed or changed for a better experience.</p>

    <p><a href="changes-0.6.0.php" class="buttonBar" style="width: 21em;"><span>Changes of the Version 0.6.0 &nbsp;►</span></a></p>

<?php include('includes/footer.php'); ?>