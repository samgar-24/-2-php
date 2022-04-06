<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <p>1-ге тең немесе кем санды енгізіңіз </p>
        <p><input type='number' name='esep1' min=-100 max=9999999></p>
        <p>3-тен Үлкен немесе тең санды енгізіңіз</p>
        <p><input type='number' name='esep2' min=1 max=9999999></p>
        <input type="submit">
        
</form>

<?php
$a=$_POST["esep1"];
$b=$_POST["esep2"];

if(($a <= 1) and ($b >= 3))
      {
          $c = $a + $b;
          echo "Otvet: ", $c; 
      }
        ?>
</body>
</html>