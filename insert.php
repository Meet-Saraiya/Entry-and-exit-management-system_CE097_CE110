
<html>
    <head>
        <style>
             button{

position: relative;
text-align: center;
background-color: darksalmon;
padding: 3px;
margin: 3px;
font-size: 18px;
border-radius: 5px;
text-decoration: none;
}
.phpinfo{
    align-content: center;
}
        </style>
    </head>
    <body>
    <br>
<div class="phpinfo">
<?php

$conn=mysqli_connect("localhost","root","","insert");

if(isset($_POST['submit'])){

    if(!empty($_POST['firstname']) && !empty($_POST['middlename']) && !empty($_POST['lastname']) && !empty($_POST['phone'])){
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];

        $query = "insert into form(firstname,middlename,lastname,phone) values('$firstname','$middlename','$lastname','$phone')";

        $run = mysqli_query($conn,$query) or die(mysqli_error($conn));

        if($run)
        {   
            $last_id=mysqli_insert_id($conn);
            echo "form submitted succesfully and your id is" . $last_id;
        }
        else{
            echo " form not submitted";
        }
      
    }
    else{
        echo " all fields should be filled";
    }
}

?></div>
    <br>
    <br>
    <button > <a href="index1.php">Home page</a></button>
    </body>
</html>
