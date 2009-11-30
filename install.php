<?php
  $title   = "Installation How-To";
  $icon    = "install";
  $related = true;
  include("includes/header.php");
?>

<?php echoRelatedTop("Quick Download"); ?>
      <ul class="more">
        <li><a href="downloads/?file=basket-<? echo $current ?>">Sources archive...</a></li>
        <li><a href="download.php">Distribution-specific packages...</a></li>
      </ul>
<?php echoRelatedBottom(); ?>

<?php echoH2(); ?>

    <p>Here, there are full instructions and tips to install BasKet Note Pads.<!--<br>
    If you have installed BasKet Note Pads and just want help to use it, see <a href="handbook.php">BasKet Note Pads Handbook</a>.--></p>

    <h3>Installation From Source With the Assistant</h3>
    <p>BasKet Note Pads includes a small script that will guide you trough the process of building and installing BasKet Note Pads.</p>
    <p>Simply extract the basket archive.<br>
    Right click the file in Konqueror and choose &quot;Extract Here&quot; in the &quot;Actions&quot; or &quot;Extract&quot; submenu.<br>
    Open the newly created folder and press <kbd>F4</kbd> to open a new Konsole window for this folder.</p>
    <p>Then, type <kbd>./installer</kbd>: the assistant will do everything and will even (re)start BasKet Note Pads for you.<br>
    It usually takes several minutes. At the end, it will beek and ask for the root password to install it (if you choose the system wide installation).</p>
    <p>If the process does not succeed or some libraries are missing or cannot be found, try to install the *-dev or *-devel packages of your distribution: they contain library (X, QT, KDE...) sources needed to compile from sources.</p>

    <h3>Installation From Distribution Package</h3>
    <p>If you've got BasKet Note Pads in the form of a package for your distribution, just open it, give the root password and voil� BasKet Note Pads is now available in your KMenu under the &quot;Utilities&quot; category, waiting for you to launch it.</p>

<!--    <p>The following instructions should only be followed if you don't want to use the assistant or if it doesn't work.</p>

    <h3>Short Instructions</h3>
    <p>In a terminal (run konsole), type the following instructions:</p>
    <ul>
      <li>tar xvfz basket-<? echo $current ?>.tar.gz</li> <!- - tar xvjf basket-<? echo $current ?>.tar.bz2 - ->
      <li>cd basket-<? echo $current ?></li>
      <li>./configure - -prefix=`kde-config - -prefix`</li>
      <li>make</li>
      <li>su -c &quot;make install&quot;</li>
    </ul>

    <h3>Extract</h3>
    <p>You can extract the source archive by using Ark.<br>
    For this, right click of the archive file and choose &quot;Extract here&quot; (in &quot;Actions&quot; submenu for recent versions of Konqueror): a new folder will appear near the compressed file.<br>
    A new folder is created: open it and in Konqueror press <kbd>Ctrl+T</kbd> to open a new Konsole window.</p>

    <h3>Configure, Compile and Install</h3>
    <ul>
      <li>First, configure BasKet Note Pads with <kbd>./configure</kbd> command.<br>
      For certain distributions you must provide the prefix when configuring (for example, <kbd>./configure - -prefix=/usr</kbd> in my Mandrake box). Else, the program willn't be installed at the right place.</li>
      <li>Then, compile it with <kbd>make</kbd>.<br>
      If configure or make doesn't success or some library are missing or cannot be found, think to install *-dev or *-devel packages of your distribution: they contain library (X, QT, KDE...) sources needed to compil from sources.<br></li>
      <li>Now, BasKet Note Pads is compiled. If you haven't root right, you can launch it for you with the command <kbd>./basket</kbd>.</li>
      <li>If you have root right, you can install BasKet Note Pads for all users: run <kbd>su</kbd> to have root privileges (give it your root password) and so <kbd>make install</kbd>.</li>
    </ul>

    <h3>Execute BasKet Note Pads</h3>
    <p>Start BasKet Note Pads with the <kbd>basket</kbd> command (in Run command for example (<kbd>Alt+F2</kbd>), or in a console) or <kbd>./basket</kbd> if you haven't installed it (in this case it willn't be restarted when you restart KDE).</p>-->

<?php include('includes/footer.php'); ?>