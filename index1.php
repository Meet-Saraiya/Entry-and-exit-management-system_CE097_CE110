<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        form{
            text-align: center;
            margin: 5%;
            padding: 5%;
        }
        input{
          
            padding: 10px;
        }
    </style>
    <title>entry form</title>
</head>
<body>
<center><h1>Entry Form</h1>   </center> 
<h2>
    <center>Enter your Details:</center>
</h2>
  <fieldset>  <form action="insert.php" method="POST" autocomplete="off">
        <label>Firstname:</label>
        <input type="text" name="firstname" ><br>
        <label>Middlename:</label>
        <input type="text" name="middlename" ><br>
        <label>Lastname:</label>
        <input type="text" name="lastname" ><br>
        <label>phone:</label>
        <input type="text" name="phone" ><br>
        <button name="submit" type="submit">Submit</button>
    </form></fieldset>
    <button><a href="index.html">Home</a></button>
</body>
</html>
