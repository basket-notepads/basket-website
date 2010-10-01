<?php
  $title   = "";
  $icon    = "";
  $related = false;
  include('includes/header.php');
?>
   <p class="screenshot" style="width: 491px"><a href="screenshots.php"><img src="screenshots/basket-note-pads-3d.png" width="491" height="383" alt=""></a><br>
   <a href="screenshots.php" class="buttonBar" style="width: 15em;"><span>More Screenshots &nbsp;►</span></a></p>
   <div id="summary">
    <p><strong>This multi-purpose note-taking application helps you to:</strong></p>
    <ul>
     <li>Easily take all sort of notes</li>
     <li>Collect research results and share them</li>
     <li>Centralize your project data and reuse it</li>
     <li>Quickly organize your thoughts in idea boxes</li>
     <li>Keep track of your information in a smart way</li>
     <li>Make intelligent To Do lists</li>
     <li>And a lot more...</li>
    </ul>
   </div>

   <div id="downloadButton" style="margin-right: 511px;"> <!-- The margin is the width of the image + margin of 20 pixels -->
    <a href="downloads/?file=basket-<? echo $current ?>" id="theButton"><strong>Download Now<br></strong>
    Version <em>2.0 Beta 2 (<?php echo $current; ?>)</em><br>
    Sources for KDE (4.0 MB)</a>
    <div><a href="download.php" class="buttonBar" style="width: 28em;"><span>Download Distribution-Specific Packages &nbsp;<!--▼-->►</span></a></div>
<?php
  if (isset($devel))
    echo "    <div><br><a href=\"development.php\" class=\"buttonBar\" style=\"width: 30em;\"><span>Unstable Development Version ($devel) &nbsp;<!--▼-->►</span></a></div>";
?>
   </div>

   <div class="hr">&nbsp;</div>

   <div class="column2">
    <h3>What's New in Basket 2.0 Beta 2</h3>
    <ul>
     <li>Bug fixes from 2.0 Beta 1</li>
     <li>Added the ability to create cross references between baskets</li>
    </ul>
    <h3>What's New in Basket 2.0 Beta 1</h3>
    <ul>
     <li>Ported to Qt 4 and KDE 4</li>
     <li>Source code now resides on Gitorious</li>
    </ul>
    <p><a href="changes-1.0.php" class="buttonBar" style="width: 16em;"><span>Changes in 1.0.x&nbsp;►</span></a></p>
   </div>
   <div class="column1">
    <h3>What is It?</h3>

    <div class="miniScreenshots" id="miniScreenshots"> <!-- TODO: Only an ID -->
     <p><img src="screenshots/mini/take-notes.png" width="200" height="60" alt="">
     <strong>Take Notes</strong><br>
     It is easy to write down your ideas as you think: click and type. But there is more than styled text...</p>

     <p class="even"><img src="screenshots/mini/collect-any-data.png" width="200" height="60" alt="">
     <strong>Collect any Data</strong><br>
     ... you are free to paste images, links, email addresses, files, application launchers, colors, grab a screen zone, pick a color from screen.</p>

     <p><img src="screenshots/mini/easy-organization.png" width="200" height="60" alt="">
     <strong>Easy Organization</strong><br>
     Organize your notes in a hierarchy of baskets, by topic or project. Group notes together, collapse non-important groups... You can also let the application automatically layout your notes in columns or you can manually place them precisely.</p>

     <p class="even"><img src="screenshots/mini/tag-your-notes.png" width="200" height="60" alt="">
     <strong>Tag your Notes</strong><br>
     Attach tags to any note you take: "Important", "Information", "Idea", "Work", "Personnal"... Tags change the appearance of notes, and multi-state tags let you create checkboxes for To Do lists, progress-bars, priority-meters, etc.</p>

     <p><img src="screenshots/mini/quickly-find-back-your-toughts.png" width="200" height="60" alt="">
     <strong>Quickly Retrieve Your Thoughts</strong><br>
     Instantly find your notes by word or by tag, as you type, no matter where you placed the important information you're searching for.</p>

     <p class="even"><img src="screenshots/mini/always-at-hand.png" width="200" height="60" alt="">
     <strong>Always at Hand</strong><br>
     The application is always running in the background, minimized to a system-tray icon. Writting down new ideas is one click away. Or one keyboard shortcut away, if you prefer. You can also drop things onto that icon, or use the numerous keyboard shortcuts to quickly append data to your baskets.</p>

     <p><img src="screenshots/mini/automatic-saves.png" width="200" height="60" alt="">
     <strong>Safe Data</strong><br>
     Your notes are automatically saved as soon as you modify them. No need to manually save them: you will have to break your habit of pressing Ctrl+S every five seconds! To make your data ultimately safe, you can easily backup and restore your entire basket collection.</p>

     <p class="even"><img src="screenshots/mini/password-protection.png" width="200" height="60" alt="">
     <strong>Password Protection</strong><br>
     You can protect some or all of your data with a password so that you are the only person who can access them. Data can also be encrypted with public/private keys, if you want.</p>

     <p><img src="screenshots/mini/embeddable-into-kontact.png" width="200" height="60" alt="">
     <strong>Embeddable into Kontact</strong><br>
     You can use the application standalone, or as part of Kontact. You choose what is more practical to you.</p>

     <p class="even"><img src="screenshots/mini/quickly-share-your-data.png" width="200" height="60" alt="">
     <strong>Quickly Share your Data</strong><br>
     You can save a set of baskets to a file for your co-workers to modify them and send you back the result. If they have not installed BasKet Note Pads, do not worry: you can export the baskets to HTML web pages. You can even publish your research results online. And, of course, you can copy or drag your notes to other applications.</p>

     <p><img src="screenshots/mini/import-from-other-applications.png" width="200" height="60" alt="">
     <strong>Import from Other Applications</strong><br>
     If you already use KNotes, KJots, KnowIt, TuxCards, Sticky Notes, Tomboy or simple text files, then it will be lightning fast to start using BasKet Note Pads with your previous notes. A few clicks and you can enjoy the power of BasKet Note Pads over your previous note taking application. Your original data is not changed, so you can come back to your old application if BasKet Note Pads does not satisfy you.</p>
    </div>
    <a href="tour.php" class="buttonBar" style="width: 11em;"><span>Take a Tour &nbsp;►</span></a>
    <!--<p>( Reviews &amp; User Quotes -> )</p>-->
   </div>
   <script type="text/javascript">
    // Cross-browser implementation of element.addEventListener()
    function addEventListener(element, type, expression, bubbling) {
     bubbling = bubbling || false;
     if (window.addEventListener) { // Standard
      element.addEventListener(type, expression, bubbling);
      return true;
     } else if (window.attachEvent) { // IE
      element.attachEvent('on' + type, expression);
      return true;
     } else return false;
    }
    // Add the big-image tag:
    var miniScreenshots = document.getElementById("miniScreenshots");
    var bigImage = document.createElement("img");
    bigImage.style.position = "absolute";
    bigImage.style.display = "none";
    bigImage.style.border = "solid 1px #808080";
    bigImage.style.width = "400px";
    bigImage.style.height = "120px";
    miniScreenshots.appendChild(bigImage);
    addEventListener(bigImage, "mouseout", function() {
     bigImage.style.display = "none";
    });
    var preloads = [];
    // Register the events:
    var imgs = miniScreenshots.getElementsByTagName("img");
    for (var i = 0; i < imgs.length - 1; i++) {
     var img = imgs[i];
     // Preload the big image:
     preloads[preloads.length] = new Image();
     var index = img.src.lastIndexOf("/");
     preloads[preloads.length - 1].src = img.src.substr(0, index + 1) + "normal/" + img.src.substr(index + 1, img.src.length - index);
//     console.debug(preload.src);
     // Register the mouse hover event:
     addEventListener(img, "mouseover", function(event) {
      var img = (window.event ? window.event.srcElement : event.target);
      // Compute the big image name:
      var index = img.src.lastIndexOf("/");
      bigImage.src = "";
      bigImage.src = img.src.substr(0, index + 1) + "normal/" + img.src.substr(index + 1, img.src.length - index);
      // Place the big image where it should be:
      var even = img.parentNode.className == "even";
      bigImage.style.left = (img.x - (even ? parseInt(bigImage.style.width, 10) - img.width : 0)) + "px";
      bigImage.style.top = img.y + "px";
      bigImage.style.display = "block";
     });
    }
   </script>

   <div class="hr">&nbsp;</div>

   <h3>Latest News</h3>

   <!-- Stay Tuned
   <p class="screenshot"><a href="basket.rss"><img src="icos/rss.png" width="28" height="16" alt=""> Subscribe the RSS Feed</a><br>
   <a href="rss.php"><?php loadIcon16("help"); ?> What is RSS and How to Use It?</a></p>-->


<?php echoRelatedTopWithMargin("Stay Tuned", true); ?>
      <p style="padding-top: 10px;"><a href="basket.rss"><img src="icos/rss.png" width="28" height="16" alt=""> Subscribe the RSS Feed</a><br>
      <a href="rss.php"><?php loadIcon16("help"); ?> What is RSS and How to Use It?</a></p>
<?php echoRelatedBottom(); ?>


<?
  $onlyFirstOne = true;
  include("news_main.php");
?>
   <p><a href="news.php" class="buttonBar" style="width: 13em;"><span>All Other News &nbsp;►</span></a></p>

<?php include('includes/footer.php'); ?>
