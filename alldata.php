<style>
*{
    background-color:bisque; 
}
.tab1{
    background-color: blue;

}
*th{
    background-color: cadetblue;
}
</style>

<div></div>
<h1>Persons who have entered and have exited</h1>
<table border="1" class="tab1">
<tr>
    <th>ID</th>
    <th>First name</th>
    <th>Middle Name</th>
    <th>Last name</th>
    <th>Phone</th>
    <th>Entry Time</th>
    <th>Exit Time</th>
</tr>


<?php
$conn=mysqli_connect("localhost","root","","insert");
if(isset($_POST['submit']) && $_POST['name']=="admin" && $_POST['pass']=="admin123"){


$query="SELECT str.*,sr.exittime FROM form str,exittable sr WHERE str.id=sr.id";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
    ?>
    <tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['firstname']?></td>
    <td><?php echo $row['middlename']?></td>
    <td><?php echo $row['lastname']?></td>
    <td><?php echo $row['phone']?></td>
    <td><?php echo $row['time']?></td>
    <td><?php echo $row['exittime']?></td>
    </tr>
    <?php
}

?>
</table class="tab2">
<table border="1">
    <tr aria-colspan="7" ><h1>Persons who have enterd</h1></tr>
<tr>
    <th>ID</th>
    <th>First name</th>
    <th>Middle Name</th>
    <th>Last name</th>
    <th>Phone</th>
    <th>Entry Time</th>
    
</tr>


<?php
$conn=mysqli_connect("localhost","root","","insert");
$query="SELECT str.* FROM form str";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
    ?>
    <tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['firstname']?></td>
    <td><?php echo $row['middlename']?></td>
    <td><?php echo $row['lastname']?></td>
    <td><?php echo $row['phone']?></td>
    <td><?php echo $row['time']?></td>
    </tr>
    <?php
}
}
?>
</table>
<button><a href="index.html">Home</a></button>