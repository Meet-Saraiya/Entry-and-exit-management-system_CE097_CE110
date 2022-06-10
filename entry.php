<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
   
}
else{
    echo "error" . mysqli_connect_error();
}

$count=0;
if(isset($_POST['submit'])){
    $first=$_POST['firstname'];
    $last=$_POST['lastname'];
    $phone=$_POST['phone'];


$sql="INSERT INTO 'data' ('fname','lname','phone') VALUES ('$first','$last','$phone')";

$result = mysqli_query($conn, $sql);

if($result == TRUE){
    ++$count;
    echo"Your ID number is : $count";
}

else{
    echo"error:".$sql."<br>".$conn->error;
}

$conn->close();

}
?>

