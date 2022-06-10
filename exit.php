<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exit form</title>
    <style>
        *{
            padding: 5px;
            margin: 5px;
            font-size: 15px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color:lightgoldenrodyellow;
        }
        button{
            background-color:aquamarine;
        }
        h1{
            font-size: 25px;
        }
    </style>
  
</head>
<body><center><h1>Exit Page</h1></center>
    <fieldset><form action="exittable.php" method="POST"  autocomplete="off">
        <center><h2>Enter Your id : </h2></center>

       <center> <input type="text" name="id" ><br></center>
       <center> <button name="submit" value="submit">submit</button></center>

    </form></fieldset>
    <button><a href="index.html">Home</a></button>
</body>
</html>
<?php

?>