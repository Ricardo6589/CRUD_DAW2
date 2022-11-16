<?php

$contraseña = 'Profesor1';
$passwordHash = sha1($contraseña);     

echo $passwordHash;