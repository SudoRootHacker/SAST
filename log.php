
<?php
$user = $_GET['user'];
file_put_contents("app.log", $user . "\n", FILE_APPEND);
echo "Logged";
?>
