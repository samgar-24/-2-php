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
        <p>1-ден 31-ге дейінгі аралықтағы санды таңдаңыз </p>
        <p><input type=number name=esep1 min=1 max=9999999></p>
        <input type="submit">
</form>
   
<?php
$a=$_POST["esep1"];

if ((1<=$a) and ($a<=10))
 {
    echo "Алғышкы 10 күндік";
 }
 elseif ((11<$a) and ($a<=20))
 {
    echo "2-ші он күндік";
}
elseif ((21<$a) and ($a<=31))
{
    echo "3-ші он күндік";
}


   
    ?>

    
</body>
</html>