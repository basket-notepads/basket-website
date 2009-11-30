<?php
  $title   = "Changes of the Version 0.6.0";
  $icon    = "changelog";
  $related = false;
  include("includes/header.php");
?>
<?php echoH2(); ?>

      <ul>
        <li>Completely re-tought for a more beautiful look, easier and more efficient to use:
          <ul>
            <li>Single click for all actions, edit is the central action, easily add at cursor position, moving notes is easy</li>
            <li>More sensible basket properties, and application settings</li>
            <li>Easier and more efficient "New Basket" dialog</li>
            <li>More seamless edition of notes: text editors don't close themselves anymore, and text edition starts where clicked</li>
            <li>animations, background images, no more alternative background color</li>
          </ul>
        </li>
        <li>Optimized:
          <ul>
            <li>Loading time is gratly reduced, even with a lot of baskets, no flicker, all is fluent</li>
          </ul>
        </li>
        <li>Baskets are organized as a hierarchy, not as flat tabs</li>
        <li>You can filter all baskets at once</li>
        <li>Notes can be grouped together, groups can be collapsed to hide unimportant data</li>
        <li>Individual notes can be tagged, checkable, define a priority, you can search notes by tag. The tags are completely customizable to fit your needs and organization</li>
        <li>Multi-columns baskets, and free positionnable notes</li>
        <li>Select and manipulate several notes at once
          <ul>
            <li>Preview a drag of several notes</li>
          </ul>
        </li>
        <li>Enhancement of every note types, including clickable links for text notes, file previews</li>
        <li>All texts can be formated (bold, italic, color, font size...). Yes, it was possible previously, but too constraining. Now, text formating is a first-class citizen feature of the application</li>
        <li>Importers from Tomboy, TuxCards, KnowIt and the new 0.7 version of KJots (included in KDE 3.5)</li>
        <li>Grab a zone of the screen to an image note (screen capture)</li>
        <li>Baskets can be password-protected. Two methods: simple password or GPG private key encryption! For even more security, baskets can be locked again as soon as you do not use them anymore</li>
        <li>Integration to Kontact</li>
        <li>You can assign (global or not) keyboard shortcuts to every baskets to switch to them quickly</li>
        <li>More security: No data loss when no disk space left! Crashes are reported to the developers for us to fix them quickly</li>
      </ul>

    <p><a href="full-changes-0.6.0.php" class="buttonBar" style="width: 31em;"><span>Changes Compared to Development Versions &nbsp;►</span></a></p>

<?php include('includes/footer.php'); ?>