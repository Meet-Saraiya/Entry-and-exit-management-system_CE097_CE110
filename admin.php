<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
    </style>
  
</head>
<body>
    <form action="alldata.php" method="post"  autocomplete="off">
        <fieldset>
            <center><h1>Login Page</h1></center>
            <br><br>
            <center><h3>Enter your username:</h3>
            <input type="text" name="name" id="name"></center>
           
            <center><h3>Enter your password:</h3>
            <input type="password" name="pass" id="pass"></center>
            <center><button type="submit" name="submit">Submit</button></center>
        </fieldset>
        <button><a href="index.html">Home</a></button>
    </form>
</body>
</html>