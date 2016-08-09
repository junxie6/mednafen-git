<?php require("docgen.inc"); ?>

<?php BeginPage('', 'Netplay'); ?>

<?php BeginSection('Introduction'); ?>
 (To be written; topics: standalone-server based, potential for losing saved games, save state usage, latency issues, bandwidth usage)
<?php EndSection(); ?>


<?php BeginSection('Setting up the Server'); ?>
  <p>
  Download the latest "Mednafen-Server" <a href="http://mednafen.fobby.net/releases/#mednafen-server">release</a>.
  Untarballize it, and read the included "README" files for further instructions and caveats.
  </p>

<?php EndSection(); ?>

<?php BeginSection('Using Mednafen\'s netplay console'); ?>
  <p>
  Pressing the 'T' key will bring up the network play console, or give it input focus if focus is lost.  From this console, 
  you may issue commands and chat.  Input focus to the console will be lost whenever the Enter/Return key is pressed.  The 'Escape' key(by default, shares assignment with the exit key) will exit the console entirely.
  Whenever text or important information is received, the console will appear, but without input focus.
  </p>
  <p>
  <table cellspacing="4" border="1">
  <tr><th colspan="2">Keys Relevant to the Text Box:</th></tr>
  <tr><th>Key:</th><th>Action:</th></tr>
  <tr><td>Up</td><td>Scroll up.</td></tr>
  <tr><td>Down</td><td>Scroll down.</td></tr>
  <tr><td>Page Up</td><td>Scroll up a page.</td></tr>
  <tr><td>Page Down</td><td>Scroll down a page.</td></tr>
  <tr><td>Shift + Home</td><td>Scroll to the beginning.</td></tr>
  <tr><td>Shift + End</td><td>Scroll to the end.</td></tr>
  </table>
  </p>
  <p>
  <table cellspacing=4" border="1">
  <tr><th colspan="2">Keys Relevant to the Prompt:</th></tr>
  <tr><th>Key:</th><th>Action:</th></tr>
  <tr><td>Left</td><td>Move cursor left.</td></tr>
  <tr><td>Right</td><td>Move cursor right.</td></tr>
  <tr><td>Home</td><td>Move cursor to the beginning.</td></tr>
  <tr><td>End</td><td>Move cursor to the end.</td></tr>
  <tr><td>Backspace</td><td>Remove character to the left of cursor position, and move cursor left.</td></tr>
  <tr><td>Delete</td><td>Remove character at cursor position.</td></tr>
  <tr><td>Enter</td><td>Process text entered into prompt.</td></tr>
  </table>
  </p>

  <table cellspacing="4" border="1">
   <tr><th>Command:</th><th>Description:</th><th>Relevant Settings:</th><th>Examples:</th></tr>
   <tr><td>/nick <i>nickname</i></td><td>Sets nickname.</td><td><a href="mednafen.html#netplay.nick">netplay.nick</a></td><td nowrap>/nick Deadly Pie<br />/nick 運命子猫</td></tr>
   <tr><td>/server <i>[hostname]</i> <i>[port]</i></td><td>Connects to specified netplay server.</td><td><a href="mednafen.html#netplay.host">netplay.host</a><br /><a href="mednafen.html#netplay.port">netplay.port</a></td><td nowrap>/server<br />/server netplay.fobby.net<br />/server helheim.net 4046<br />/server ::1</td></tr>
   <tr><td>/ping</td><td>Pings the server.</td><td>-</td><td>/ping</td></tr>
   <tr><td>/swap <i>A</i> <i>B</i></td><td>Swap/Exchange all instances of controllers A and B(numbered from 1).</td><td>-</td><td>/swap 1 2</td></tr>
   <tr><td>/dupe <i>[A]</i> <i>[...]</i></td><td>Duplicate and take instances of specified controller(s)(numbered from 1).<p>Note: Multiple clients controlling the same controller currently does not work correctly with emulated analog-type gamepads, emulated mice, emulated lightguns, and any other emulated controller type that contains "analog" axis or button data.</p></td><td>-</td><td>/dupe 1</td></tr>
   <tr><td>/drop <i>[A]</i> <i>[...]</i></td><td>Drop all instances of specified controller(s).</td><td>-</td><td>/drop 1 2</td></tr>
   <tr><td>/take <i>[A]</i> <i>[...]</i></td><td>Take all instances of specified controller(s).</td><td>-</td><td>/take 1</td></tr>
   <tr><td>/quit</td><td>Disconnects from the netplay server.</td><td>-</td><td>/quit</td></tr>
  </table>
  </p>

<?php EndSection(); ?>

<?php EndPage(); ?>
