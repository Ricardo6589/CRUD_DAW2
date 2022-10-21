<?php

$contraseña = 'Yeray12345';
$passwordHash = sha1($contraseña);    

echo $passwordHash;