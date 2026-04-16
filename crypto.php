<?php

$password = $_POST['password'];

$hash = md5($password);

echo "Password Hash: " . $hash;

?>
