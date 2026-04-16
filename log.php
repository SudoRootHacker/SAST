<?php

$user = $_GET['user'];

$log = "logs.txt";

file_put_contents($log, "User login: " . $user . "\n", FILE_APPEND);

echo "Logged";

?>
