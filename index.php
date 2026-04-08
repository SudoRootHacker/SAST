
<?php
echo "<h1>SAST Vulnerable Demo</h1>";

echo "<a href='xss.php?name=test'>Reflected XSS</a><br>";
echo "<a href='command.php?cmd=ls'>Command Injection</a><br>";
echo "<a href='file.php?file=test.txt'>File Include</a><br>";
echo "<a href='redirect.php?url=https://example.com'>Open Redirect</a><br>";
?>
