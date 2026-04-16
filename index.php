<?php
echo "<h1>SAST Vulnerable Demo</h1>";

echo "<ul>";
echo "<li><a href='xss.php?name=test'>Reflected XSS</a></li>";
echo "<li><a href='command.php?ip=127.0.0.1'>Command Injection</a></li>";
echo "<li><a href='file.php?page=index.php'>Local File Inclusion</a></li>";
echo "<li><a href='redirect.php?url=https://google.com'>Open Redirect</a></li>";
echo "</ul>";
?>
