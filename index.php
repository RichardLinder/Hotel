<?php spl_autoload_register(function ($class_name) 
{
    include "class/".$class_name . '.php';
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Exercisse  PHP POO Hôtel</title>
</head>
<body>
    <h1>Exercisse  PHP POO Hôtel</h1> 

<?php
$mehnir = new Hotel("hotel le menhir", "5 rue du mehnir" );
echo $mehnir ;




?>








</body>
</html>