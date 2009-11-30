<?php
  $title   = "How to Translate BasKet Note Pads to Your Language";
  $icon    = "translate";
  $related = false;
  include("includes/header.php");
?>

<?php echoH2(); ?>

    <p>BasKet Note Pads is translated in some languages and you just have to install it to have it translated in yours.<br>
    If BasKet Note Pads is not yet translated into your native language, you can help to make this happens. This page explains how to do.</p>

    <h3>Requirements</h3>
    <p>You should have downloaded and <a href="install.php">installed BasKet Note Pads from sources</a>.<br>
    Go to the <a href="download.php">download</a> page if you have not done it this way, and download the official source archive.<br>
    Then compile and install BasKet Note Pads.<br>
    You are ready to translate it.</p>

    <h3>Create Your Language File</h3>
    <p>Go to <a href="http://i18n.kde.org/teams/">http://i18n.kde.org/teams/</a> and locate your language code.<br>
    For instance, if you want to translate BasKet Note Pads into Afrikaans, your language code is &quot;af&quot;.</p>
    <p>Go to the src/ folder where BasKet Note Pads was unarchived and from where you compiled it.<br>
    You will see a file basket.pot: copy it to your language code with the extension &quot;.po&quot;.<br>
    In our exemple, you have to copy basket.pot to af.po and this is this file that you will translate.</p>

    <h3>How to Translate BasKet Note Pads</h3>
    <p>Just open this .po file with KBabel (should be the default). If KBabel is not installed you can find it in kdesdk package.<br>
    KBabel is pretty simple to use, even if it seems complicated, you will not use every tools it provides.</p>

    <p>The bassis: KBabel provides you the original message on top, you should translate it on bottom (nothing difficult :-) ).<br>
    Use PageUp and PageDown keys to go to the next/previous untranslated message.</p>

    <p>Sometimes there is a %1, %n... in the messages, they will be replaced by BasKet Note Pads at runtime (by other messages or by numbers): just put those %s things in your translations...</p>

    <p>When a message begins with &quot;_n: &quot; it indicates that the message is in two forms: singular and plural.<br>
    Depending on a number (eg. the number of items to delete) BasKet Note Pads will use the singular form or the plural form. The first line is the singular form and the second is the plural one. In those sentences, &quot;%n&quot; will be replaced by the number (...of items to delete, in our example).<br>
    Important: you should translate the message without the &quot;_n: &quot; prefix.</p>

    <p>There are also messages like: &quot;_: e.g. \&quot;18 items, 10 founds, 5 selecteds\&quot;\n%1, %2, %3&quot;.<br>
    The &quot;_: &quot; token indicate that the first line is a clue given to you by the programer because the message in itself is not very meaningful.<br>
    You should not translate the first line.</p>

    <p>In the translations, the '&amp;' symbol is not ampersand but it is for accelerator keys (see below).<br>
    eg. &quot;&amp;Title:&quot; indicate that if the user press Alt+T he will be ready to enter a title (focus will move to the Title field). The accelerator can be any letter in messages. When translating, you can put the ampersand before any letter (see below).<br>
    If you need an ampersand symbol, use a double &amp; symbol when translating (like &quot;Notes &amp;&amp; Clips&quot;): in any case you just have to put the same amount of &amp; than in the sentence to translate.</p>

    <h3>Tip: Avoid Accelerators Clashes</h3>
    <p>Accelerators are underlined lettres in windows, eg. &quot;<u>T</u>itle:&quot;. Pressing Alt and the underlined letter (Alt+T in this exemple) will move the keyboard focus to the corresponding field for immediate input. It helps to really speed up actions for peoples who want to use mouse the least possible and prefers the use of a keyboard (or to guys who have disabilities).</p>

    <p>So, the tip: you can enable a thing called &quot;Dr. Klash&quot;.<br>
    When hitting F12 in an application it will say you what widgets do not have accelerators (also called mnemonics) and which are clashing!<bR>
    That is very interesting to provide seamless keyboard navigation for peoples who are using it.</p>

    <p>To enable this Dr. Klash, edit the file ~/.kde/share/config/kdeglobals in a text editor and add the following lines in order to use the F12 feature:</p>
    <pre>[Development]
CheckAccelerators=F12</pre>

    <p>And voil&agrave;!<br>
    A non-negligeable part of KDE users will like a good translated BasKet Note Pads with accelerators enabled.</p>

    <p>If you want, you can add &quot;AutoCheckAccelerators=true&quot; line to enable the dialog to popup automatically if a conflict exists and &quot;AlwaysShowCheckAccelerators=true&quot; to enforce the dialog to popup always.</p>

    <h3>Get the Translation Integrated in BasKet Note Pads</h3>
    <p>Once the translation is done, you just have to do a &quot;make&quot; and &quot;make install&quot; in a console like the first time you installed BasKet Note Pads by compiling it!<br>
    Restart BasKet Note Pads and it will be translated.<br>
    When the translation is OK, <? emailLink("mail me it"); ?> and I will integrate it in the next downloadable archive.</p>

    <h3>Translating Next Versions</h3>
    <p>It is simple: when a new version of BasKet Note Pads is to be released I will mail you (if you want to be the official translator of BasKet Note Pads into your language, of course) and you will just need to re-edit your .po file.<br>
    Previously translated messages are of course kept translated and will only be asked to translate the new messages.<br>
    However, some english messages can have changed a little (to correct english errors, for example): the system try to match old and new sentences. Those matches result in so called &quot;fuzzy mesages&quot; and are provided for you to avoid to re-translate them from scratch (but sometimes matches are very wrong). If they are OK mark them as translated, if not just correct them to mirror the corrected english message.</p>

<?php include('includes/footer.php'); ?>