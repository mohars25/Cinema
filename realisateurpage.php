<?php

require "traitement.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
     *{
        width: 100%;
        padding: 0;
        margin: 0;
        background-color: wheat;
    }
body{
    color: black;
    
    font-size: 25px;
    text-align: center;
    width: 90%;
    margin: auto auto ;
    border-radius: 8%;
    
    
}
h1{
    color: red;
    margin-bottom: 55px;
    font-size: 100px;
}

</style>
<body>



<h1>Réalisateur</h1>



    <?php



foreach ($realisateurs as $value){
    echo "".$value."";
}




    
   
    ?>
</body>
</html>






