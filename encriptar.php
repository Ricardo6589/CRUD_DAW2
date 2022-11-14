<?php

$contraseña = 'Admin1234';
$passwordHash = sha1($contraseña);     

echo $passwordHash;