<?php

$password = "Monsupermotdepasse";
$heshed_password = password_hash($password,
 PASSWORD_DEFAULT);

echo $password . '<br>' ;
echo $hashed_password;

echo password_verify()

?>