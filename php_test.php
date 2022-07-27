<?php
    $header="Bienvenidos Malparidos!";
    $space=" ";
    $myString1="Hola".$space."Perros";
    $myString2="Hola$spacePerros";
    $mystring3="Hola{$space}Perros";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>

    <h1><?php echo $header; ?></h1>
    <h4><? echo $mystring1 ?></h4>
    <h4><? echo $mystring2 ?></h4>
    <h4><? echo $mystring3 ?></h4>
    
</body>
</html>