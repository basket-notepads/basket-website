<?php
  $title   = "LikeBack - Quick Feedback from Beta-Testers";
  $icon    = "likeback";
  $related = true;
  include("includes/header.php");
?>

<?php echoRelatedTop("Other Reusable Technologies"); ?>
      <ul class="more">
        <li><a href="systemtray-on-close-info.php">System Tray on Close Info Dialog...</a></li>
      </ul>
<?php echoRelatedBottom(); ?>

<?php echoH2(); ?>

<!--    <style>
      .image { text-align: center; }
      .cropped { border: 1px solid black; }

      h3 { color: white; padding: 3px 8px; margin: 2em 0 0 0;
           background: black url('likeback-data/h3.png') 0% 50%; border: 1px solid black; letter-spacing: 2px;
           font-style: normal;
           text-shadow: blue 0 0 4px, blue 0 0 3px, yellow 0 0 2px, blue 0 0 1px; }
      h4 { color: navy; letter-spacing: 1px; }
    </style>-->

    <ul class="toc">
      <li><a href="#what"><? loadIcon16("down") ?>What is the LikeBack System?</a></li>
      <li><a href="#ui"><? loadIcon16("down") ?>The User Interface</a></li>
      <li><a href="#server"><? loadIcon16("down") ?>The Server-Side Interface</a></li>
      <li><a href="#data"><? loadIcon16("down") ?>What's Sent by the Client?</a></li>
      <li><a href="#experience"><? loadIcon16("down") ?>Return of Experience</a></li>
      <li><a href="#embed"><? loadIcon16("down") ?>Embed it into your Application</a></li>
      <li><a href="#feedback"><? loadIcon16("down") ?>Feedback Needed</a></li>
      <li><a href="#future"><? loadIcon16("down") ?>Future Ideas</a></li>
      <li><a href="#history"><? loadIcon16("down") ?>Version History</a></li>
    </ul>

    <h3><a name="what"></a>What is the LikeBack System?</h3>
    <p>The system comes from the need to allow users to communicate theire liking of the applications to its developers. Thus, developers know what theire users prefer on theire applications, what should be enhanced, etc.</p>
    <p>Basically, how does it work? Whenever the user notice something good he appreciate or something he do not like, do not understand, do not find polished... he can send a few short words to the developers to tell them what he like or do not like. It's only two or three clicks away. It's fast, efficient.</p>
    <p>This greatly lowers the communication barrier between the application developers and the application users.<br>
    It makes the developers understand and satisfy better the needs of the users.</p>
    <p>As an addition, this technology can be used as a bug reporter and feature wish reporter by small programs that do not possess a bugzilla account.</p>

    <h3><a name="ui"></a>The User Interface</h3>
    <p>The user access the LikeBack comment dialog throught the application Help menu:</p>
    <p class="screenshotImage"><img src="likeback-data/help-menu.png" width="348" height="160" class="cropped"></p>

    <p>A window is then displayed for the user to choose a comment type and write his toughts:</p>
    <p class="screenshotImage"><img src="likeback-data/comment-window.png" width="648" height="508"></p>

    <p>Whenever the user clicks "Send Comment" the first time, or clicks the "Email Address..." button, the following dialog is shown in order for the user to set up his email address, for feedback purpose:</p>
    <p class="screenshotImage"><img src="likeback-data/email-window.png" width="358" height="247"></p>

    <p>Then, a dialog informs the user his comment has been successfuly sent to the developers:</p>
    <p class="screenshotImage"><img src="likeback-data/success.png" width="534" height="163"></p>

    <p>For small applications, the number of users who discover the Help menu entry may be too small for the feedback to be useful. In this case, developers can enable the button-bar (see below). The first time the application startups with button-bar enabled, the following introduction dialog is shown:</p>
    <p class="screenshotImage"><img src="likeback-data/introduction.png" width="536" height="428"></p>

    <p>And here is the button-bar. The bar sits bellow the titlebar of every active windows, making it one-click away for the user to post comment about a sentiment she get at the instant, without the barrier of the user searching the developer(s) email address, firering up a new email window, choosing a title for the email, etc. Clicking one of those icons pops up the comment dialog seen above, with the right option checked, and the text area focused. The current window name is also sent with the comment, letting developers to know what part of the interface the comment refers to. At the bottom of the comment dialog, there is a checkbox for the user to explicitely enable or disable the bar.</p>
    <p class="screenshotImage"><img src="likeback-data/icon-bar.png" width="182" height="77" class="cropped"></p>

    <h3><a name="server"></a>The Server-Side Interface</h3>
    <p>Here is the main screen of the LikeBack developer interface:</p>
    <p class="screenshotImage"><img src="likeback-data/server-main.png" width="847" height="523" class="cropped"></p>
    <p>Developers can filter data. They can show only bugs, only comments in the language they understand, only comments still to be threated, search a text in comments, etc.</p>
    <p>When hovering over the date, the time is shown in a tooltip. On the window name, it shows the whole window hierarchy. And over the email icon, it shows the email address... That email address is clickable, to directly contact the author.</p>
    <p>The developer can click the status icon of a comment to change its status. It's to mark comments as solved (to not see them anymore in the interface), as confirmed by one developer (meaning this need to be fixed), or in progress, to tell other developers that someone is currently working on fixing it:</p>
    <p class="screenshotImage"><img src="likeback-data/server-status.png" width="121" height="175" class="cropped"></p>
    <p>When clicking a comment remarks icon (the yellow sticky notes) or comment id number, a new page let developers to add remarks to the comments. This allows developers to discuss points between themselves:</p>
    <p class="screenshotImage"><img src="likeback-data/server-remarks.png" width="568" height="623" class="cropped"></p>
    <p>The server is capable of sending emails to some developers whenever a new comment has been sent. So, comments can be managed with a simple email client. Each developer can configure what comments are sent to him within the E-Mail Options window:</p>
    <p class="screenshotImage"><img src="likeback-data/server-emails.png" width="544" height="386" class="cropped"></p>

    <h3><a name="data"></a>What's Sent by the Client?</h3>
    <p>When a user posts a comment, here is what is sent to the server with that comment:</p>
    <ul>
      <li><strong>Application version</strong>: in order to know if the bug is still valid or not.</li>
      <li><strong>Locale</strong>: the KDE language of the user. To try to guess the language of the comment, or to incriminate typo errors to the good translation.</li>
      <li><strong>Window hierarchy</strong>: the hierarchy of the window names opened when the user clicked a comment icon. Some comments can be related to what the user has seen or done, so it helps understand the contect of the comment. Note: window hierarchy is not sent if the comment dialog was trigered by the Help menu entry. This is because the user can refer to anything in teh aplication.</li>
      <li><strong>Context</strong>: reserved for future use. In the future, developers could call something like LikeBack::setContext("editing a note"), to complement the window name. So we know the user was in the main window, but also roughly what he was doing.</li>
      <li><strong>Comment</strong>: the message the user typed.</li>
      <li><strong>Email address</strong>: if the user provided an email address, it is sent for the developers to be able to contact him later to get more information about his comments.</li>
    </ul>

    <h3><a name="experience"></a>Return of Experience</h3>
    <p>This is the third iteration of LikeBack.<br>
    Before publishing it here, I waited to get some feedbacks about that feedback system ;-)</p>

    <p>The first LikeBack iteration was published with BasKet Note Pads 0.6.0 Beta 1. So here is what I modified in the second iteraction of LikeBack in BasKet Note Pads 0.6.0 Beta 2, and the experience I got from this system:</p>
    <ul>
      <li><strong>People like to report bugs and dislike</strong> comments more than positive comments. So, I do not advise LikeBack for developers subject to depressing. LOL</li>
      <li>It's an <strong>easy way to get lot of bug-reports</strong>.</li>
      <li>As it's quick to report, you <strong>get more reports for small bugs</strong>. That <strong>helps you polish your application</strong>. For instance, little layout errors, english typos... all the small things that would be too heavy to report with traditionnal bugzilla, or even by e-mail, but make your application more professional.</li>
      <li>Even if it's well written to the user that wishes are ignored, <strong>some people included feature wishes</strong> in theire comments. It's to the developers to do what they want of those wishes: yet another source for the To Do list, delete them...</li>
      <li>I got feedback from people explicitlely telling this is the first software they commented on. Especially non-techy people. Emails, mailing-lists, bug reports... are mostly filled by geek people. This LikeBack system allow to <strong>broaden the groups of people who comment</strong>.</li>
      <li>Initialy totaly anonymous, some bugs reports were not understandable or needed more precisions. It was needed for the bug reporters to test if the bug was still there after a patch was procuded... Like/Dislike/Feature comments need more precisions in order to understand how the person is using the application to take a good decision concerning usability... So, <strong>now, the email is always asked</strong> the first time a person send a comment, while she is always offered to post anonymously. Most users attach theire email address to theire comments.</li>
      <li>I've got one report about a typo error. <strong>But I was not knowing what was the erroneous translation! So now, the comments also send the locale of the user.</strong> Typos errors can be incriminated to the good translation. It also gives us a free bonus: in a team of internationnal developers, they will let the users send comments in whatever language they want. Comments could be automatically sorted and assigned to the person who understands the language the comments are written in.</li>
      <li>The client send the current window name so we have a context for the user message. But <strong>some windows can be triggered from a lot of places</strong>. It's the case of error windows and the like: KMessageBox dialog names are "information"/"error"... If a user encounter an error he is likely to send feedback while watching that dialog, so <strong>we loose the context of the error</strong> (from what parent window was it triggered?). <strong>Now, a window name hierarchy is sent</strong> with the user comments.</li>
      <li>Some users complain about not finding the basket encryption feature. This feature needs gpgme compiled in. <strong>We should be able to include the KDE/Qt/gpgme version</strong> with the comments, so we know if it is a bug, we could reply to the user on how to compile gpgme support... Of course, this need to be <strong>extensible</strong>: every developers could include whatever information they need. This is <strong>not done by now</strong>.</li>
      <li>When developing in a team, the <strong>server-side viewing module should allow developers to add comments for every reports</strong>. And they can have discussion about a few sent comments. Developers could add "Can't reproduce" or "I found it. Will solve it tomorrow"...</li>
      <li>Add a <strong>unique ID for every comments</strong> (like in bugzilla) so developers can refer to them quickly instead of using the long timestamp of the comments ;-)</li>
    </ul>

    <p>As a user, you can test the interface of the improved version of LikeBack in <a href="download.php">BasKet Note Pads</a>.

    <h3><a name="embed"></a>Embed it into your Application</h3>
    <p>It's <strong>currently a KDE 3 technology</strong>, for testing and proof-of-concept purpose. But <strong>my aim is to integrate it into KDE 4</strong>. So in a few months it will be ported to KDE 4.</p>

    <p>Since it's not integrated to KDE yet, you have to download it and import it into your project. You then need to instanciate it into your application. Then, you should install it on your server.</p>

    <p><a href="downloads/?file=likeback-0.4.tar.gz"><? loadIcon32("download") ?> Download LikeBack 0.4</a></p>

    <p>Add the files in src/ of the downloaded archive to the source folder of your application. You need to modify the Makefile.am file of your src/ directory to include the new icons. I provided a Makefile.am.section file for you to copy the needed lines in yours. Basically, replace the line starting by "kde_icon_KDEICON" with the one I provided, by taking care of replacing "YOURAPP" with the UNIX short-name of your application.</p>

    <p>To setup the client-side object, follow <a href="likeback-data/apidocs.html">the API documentation</a>. It explains lot of things, and is featured with a ready-to-copy-and-paste code example in the description. If you do not want to fine-tune LikeBack or understand it, just copy this code to your application.</p>

<!--
    <p>In main.cpp or the like, initialize and configure the LikeBack system like that:</p>

    <pre><span style="color: #000000;">LikeBack::init(LikeBack::isDevelopmentVersion(VERSION));</span>
<span style="color: #000000;">LikeBack::setServer(</span><span style="color: #ff0000;">"basket.linux62.org"</span><span style="color: #000000;">, </span><span style="color: #ff0000;">"/likeback/send.php"</span><span style="color: #000000;">);</span>
<span style="color: #000000;">LikeBack::setCustomLanguageMessage(i18n(</span><span style="color: #ff0000;">"Only english and french languages are accepted."</span><span style="color: #000000;">));</span>
<span style="color: #000000;">LikeBack::setAllowFeatureWishes(</span><span style="font-weight: bold;color: #000000;">true</span><span style="color: #000000;">);</span>
<span style="color: #000000;">LikeBack::setWindowNamesListing(LikeBack:: </span><span style="font-style: italic;color: #808080;">/*NoListing*/</span><span style="color: #000000;"> </span><span style="font-style: italic;color: #808080;">/*WarnUnnamedWindows*/</span><span style="color: #000000;"> AllWindows);</span></pre>

    <p>The first line <strong>creates the LikeBack icons window</strong>, and <strong>display it only if the current version is a development version</strong>. Ie, if the version string contains the words "alpha", "beta", "rc", "svn" or "cvs". You can omit the parameter. In this case, LikeBack will use the version provided to KAboutData. Here, the first parameter is used because when BasKet Note Pads runs inside Kontact, KAboutData returns the Kontact version, and not the BasKet Note Pads one. You also can use "true" as the init() parameter to always show LikeBack, even if it's a final version. Of course, <strong>if the user disabled LikeBack, it will not show up</strong>.</p>

    <p>The second line is to configure <strong>the server and the path to the PHP script</strong> that will receive user comments.</p>

    <p><strong>By default, only english comments are accepted</strong>. If you have people talking other languages in your team, customize the message to inform the user you also accept other languages. This call is optionnal. Note this call will only affect the displayed message: no verification is done. Passing an empty string to the method will make LikeBack display the default message telling the user only english is accepted.</p>

    <p><strong>By default, a message informs the user he cannot ask for features</strong>. The fourth line of code allows to disable that restriction, by not showing the message to the user. Again: no automatic verification, it would be impossible. ;-)</p>

    <p>The last line is interesting while putting the system for the first time. LikeBack send the current window name (and hierarchy) with the comment. This allows you to put the comments in theire context. So, of course, <strong>you're encouraged to give a name to your windows</strong>. It's done in the constructor of the widgets. The setWindowNamesListing() method allows to output the name of the current window to the standard output. NoListing means... nothing is printed. For release time. <strong>WarnUnnamedWindows will output messages to standard output only when the active window has no name</strong>. So you can use the application, open all the windows, and when you see a warning, you know which window you should assign a name. AllWindows displays the name of the current window. Useful to check every windows have an understandable name. Note: if you do not name your windows, the name of the classes will be sent. So it's not that grave.</p>
-->
    <p>Now, you need to install the server-side. Copy the server/likeback folder from the archive to your web server. You need to edit db.conf.php. Keep $dbType to "mysql": nothing else is supported at the moment (if people want more, they can code it ;-) ). Put your server host, your database, your user and password.</p>
    <p>Everybody can post new comments but, of course, only authorized developers can view them. Edit the file admin/.htaccess and make sure AuthUserFile points to the .htpasswd file in the same folder. Then, edit the file admin/.htpasswd to include all the user names and encrypted passwords. To crypt a password, use the command htpasswd2 or use a website that offers such services.</p>
<!--
    <p>Now, edit the file send.php. At line 6, you have this:</p>
    <pre><span style="color: #000000;">  </span><span style="font-style: italic;color: #808080;">###################</span>
<span style="color: #000000;">  </span><span style="font-style: italic;color: #808080;">## CONFIGURATION ##</span>
<span style="color: #000000;">  </span><span style="color: #5555ff;">$sendMail</span><span style="color: #000000;"> = </span><span style="font-weight: bold;color: #000000;">true</span><span style="color: #008000;">;</span>
<span style="color: #000000;">  </span><span style="color: #5555ff;">$sendMailTo</span><span style="color: #000000;"> = </span><span style="color: #ff0000;">"slaout@linux62.org"</span><span style="color: #008000;">;</span>
<span style="color: #000000;">  </span><span style="color: #5555ff;">$likeBackViewAddress</span><span style="color: #000000;"> = </span><span style="color: #ff0000;">"http://basket.kde.org/likeback/admin/view.php"</span><span style="color: #008000;">;</span>
<span style="color: #000000;">  </span><span style="font-style: italic;color: #808080;">###################</span></pre>
    <p>Set $sendMail to false if you do not want to receive emails each time a new comment is sent. If you keep it to true, set your email address in $sendMailTo. And then configure $likeBackViewAddress to the address of the LikeBack view interface. It will be included in the emails sent to you, so the interface is one click away. In the future, those configurations will be graphicals, inside the administration interface, and every developers could receive notifications...</p>
-->
    <p>Finally, open a webbrowser to the address admin/install.php to create the database. Remove the file admin/install.php to avoid any wrong manipulation in the future :-)</p>
    <p>You're ready: try to post a comment to see if you can view it in the admin page. The source code of your application must be configured to join the script send.php in order to send comments.</p>
<!--
    <p>Notes:</p>
    <ul>
      <li>In your application code, you can call LikeBack::disable() and LikeBack::enabled() to temporarily hide the mini-toolbar. Calls are ref-counted, so you can safely call LikeBack::disable() as many time as you need, you will need to call LikeBack::enable() as much times to effectively show the toolbar again.</li>
       <li>LikeBack::init() can take a second parameter. It's a combination of flags representing what icons to put. By default, it's ILike | IDoNotLike | IFoundABug | Configure. If you want to disable eg. the bug report feature, copy those flags and omit the value IFoundABug.</li>
    </ul>
-->
    <h3><a name="feedback"></a>Feedback Needed</h3>
    <p>After having used LikeBack in BasKet Note Pads, got experience and returns from it, and modified it to fit better the needs, I'm releasing the system for other developers to be able to use it, but also in order to get feedback from other developers. So it will be in good shapes for KDE 4. I need feedback from the following three groups:</p>
    <ul>
      <li><strong>kde-core-devel</strong>: is it possible to integrate it into KDE 4? What do you think of it?</li>
      <li><strong>kde-usability</strong>: have a review of the user interface.</li>
      <li><strong>Application developers</strong>: integrate it into your application, and tell me if it is sufficient, what are your needs, what extension need to be done, is it re-usable enought...</li>
    </ul>

    <p>I think KDE as a whole would benefit from LikeBack being enabled in beta-releases of applications. It helps people report more bugs, more small glitches they had experienced, in order to improve the whole quality of our desktop...</p>

    <h3><a name="future"></a>Future Ideas</h3>
    <p>Here are possible or planned enhancements to the system, from the biggest priority to the lowest:
    <ul>
      <li>Client side:
        <ul>
          <li>One first-time message PER DESKTOP, and not per application (kdeglobals instead of to the app's config). Little reminder passive popup the next times (&amp; show examples). Remember what examples were shown and then show the message again if it should show the functionnality of a new icon...</li>
          <li>Integrate "Report a Bug" with "Send a Comment"</li>
          <li>Reparent icons on window change</li>
          <li>Tell the user on contact failure</li>
          <li>When no internet connection, place in drafts folder</li>
        </ul>
      </li>
      <li>Server:
        <ul>
          <li>Use AJAX in showing and sending remarks, so it's quicker because no list reloading have to be done</li>
          <li>Manage duplicates (two clicks maximum, no reloading)</li>
          <li>Assign priority</li>
          <li>A button to validate and send the comment to bugs.kde.org</li>
          <li>RSS feed?</li>
        </ul>
      </li>
      <li>Other ideas:
        <ul>
          <li>A way to <strong>include extraneous information, like the KDE, Qt, libraries versions</strong>, in an extensible way.</li>
          <li>Let users <strong>attach a screenshot</strong> to describe better bugs... A picture is worth thousand words.</li>
          <li>Provide a button for user to <strong>explicitely send usage statistics</strong>: the maximum number of documents opened at once, the state of the configuration options...</li>
          <li>Let developers to <strong>add application contexts</strong> to know what the user was doing before commenting.</li>
          <li><strong>Include usability surveys</strong>. A new button to display a form to fill a user survey. Check on internet if it is still active, of course. Or simply open the browser to that survey. It will be a more easy way to adversive usability surveys that news in RSS feeds, and better to touch a broader number and diversity of people.</li>
          <li>Perhapse <strong>send the application name</strong> as well. So, a central KDE LikeBack server could be used by developers of small applications. Those developers can do not have the necessary hosting, PHP extension enabled, or database access. That central KDE server could aggregate comments from many applications, and redirect the comments by email to the developers, even if it does not store the comments in database.</li>
        </ul>
      </li>
    </ul>

    <h3><a name="history"></a>Version History</h3>
    <ul>
      <li><strong>0.1</strong>: First release as a proof of concept. Released in BasKet Note Pads 0.6.0 Beta 1.</li>
      <li><strong>0.2</strong>: Enhanced version, taking into account the feedback and experience got from the first jot. Released in BasKet Note Pads 0.6.0 Beta 2.</li>
      <li><strong>0.3</strong>: The server interface has been worked out, no more a simple table listing comments. Done in order to release LikeBack to other developers.</li>
      <li><strong>0.4</strong>: changes made after the feedback received of both kde-core-devel and kde-usability:
        <ul>
          <li>User Interface:
            <ul>
              <li>The dialog is now available in "Help -> Send a Comment to Developers". Also make LikeBack includable in applications without windows</li>
              <li>Reworked the layout of the commenting dialog according to usability advises (including a Cancel button ;-) )</li>
              <li>LikeBack dialog have a checkbox "Show comment buttons below window titlebars" to show the button bar (hidden by default)</li>
              <li>Added a button [Email Address...] in the dialog</li>
              <li>Added the Ctrl+Return keyboard shortcut to send the message (Return create a new line in the text area)</li>
              <li>Sentences like "Please write in English or French." and not shown anymore if the user locale is one of the mentioned ones</li>
              <li>No more configure menu: user can turn off button bars in the comment dialog, and change email. And "What's This" is quite useless</li>
              <li>Only like/dislike buttons by default</li>
              <li>Added a feature wish icon, removed setAllowFeatureWishes(), initial message shows a wish example too</li>
              <li>Include the bug icon in the likeback icons to install, and modified it for non-technical users to understand it</li>
              <li>Use smileys for like/dislike icons, as advised by usability people</li>
              <li>The Tab key in the text editor switch focus to the Send button</li>
            </ul>
          </li>
          <li>API:
            <ul>
              <li>Developers can hide each buttons (patch from Aaon J. Seigo)</li>
              <li>A much better API (no more static functions and separated the button-bar into its own private class)</li>
              <li>D-ptr-ified the class LikeBack, and moved private classes in a private file</li>
              <li>Complete API docs</li>
              <li>Relicensed as LGPL</li>
            </ul>
          </li>
          <li>Developer Interface:
            <ul>
              <li>AJAX-enabled status change (no more reloading of a big comment list for so little changes, more efficient)</li>
              <li>The server can send emails to several developers at once on new comments. It was buggy in 0.3.</li>
              <li>Background color of admin header to dark blue, to match the background image (was black)</li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>

<?php include('includes/footer.php'); ?>