<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGVAL</title>
</head>
<body>
<?php
if(isset($_GET['error'])){
    if($_GET['error']=='camposvacios'){
        echo "Te has olvidado de introducir un campo ";
    }
}

if(isset($_GET['error'])){
    if($_GET['error']=='erroremail'){
        echo "email no es correcto ";
    }
}

?>

</body>
</html>