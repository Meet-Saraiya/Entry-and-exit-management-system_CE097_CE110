<div>
<?php

$conn=mysqli_connect("localhost","root","","insert");

if(isset($_POST['submit'])){

    if(!empty($_POST['id'])){
        $id = $_POST['id'];
        
        $query = "insert into exittable(id) values('$id')";

        $run = mysqli_query($conn,$query) or die(mysqli_error($conn));

        if($run)
        {   
            echo "your record is updated succesfully";
        }
        else{
            echo " form not submitted";
        }
      
    }
    else{
        echo " all fields should be filled";
    }
}

?>
<html>
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
    </style><body>
        <br><br><br>
    <center><button> <a href="exit.php">Exit page</a></button></center>
    <button><a href="index.html">Home</a></button>
    </body>
    
</html>
</div>
