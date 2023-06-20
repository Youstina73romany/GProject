<?php 
   include ('connection.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
       
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<style>
	body{background-image: URL(pic/r.jpg);
		background-size: cover;
		background-repeat: no-repeat;}
	label{font-size: large;color: blue;font-family:Sofia, sans-serif;}
	table{
		color:black;
		font-size: large;
	}
	th{color:red;font-family:Sofia, sans-serif;}
	td{color:blue;}
	#g{width: 40%}
	input[type=submit] {width:15%; height: 30px; font-family:Sofia, sans-serif;font-weight:bold;}
	input[type=text] {
  border: 2px solid red;
  border-radius: 4px;
  width:40% ;
height: 30px;}
  h2{font-family:Sofia, sans-serif;}
</style>
    </head>
	
    <body>
    	<center>
        <header><h2 style="color:red">Admin Interface</h2></header>
        </center>
        <form method="post">
        
		<label>Looking For Somthing!</label>
        <input type="text" name="search" placeholder="Search By Name" autocomplete="off" required>
    </div>
        <input type="submit" name="submit" value="Search Me!" style="color:green">
        </form>
            <br>
		<form method="post" action="aadmin.php">
			<label> Wanna Get all Data!! </label>
	    <input type="submit" name="btn" id="g" value="Get All Records from Database" style="color:red">
		<br> <br>
		</form>
<br>

<?php
// Get all records from database
if (isset($_POST['btn'])) {

	?>
	<center>
		<table border="2">
			<tr>
				<th>id</th>
				<th>name</th>
				<th>Description</th>
				<th>image</th>
				<th>Update data</th>
				<th>Remove data</th>
			</tr>
<?php

$q="SELECT * FROM `recipes`";
$r= mysqli_query($con,$q);
while ($row=mysqli_fetch_array($r)) {
	
?>
<tr>
	<td> <?php  echo $row['id'];  ?> </td>
	<td> <?php  echo $row['name'];  ?> </td>
	<td> <?php  echo $row['description'];  ?> </td>
	<td> <img src="recipesimg/<?php  echo $row['image']; ?>" square height="300px" width="300px"> </td>


	<td> <a href="">Edit Data</a> </td>
	<td> <a href="">Delete Data</a> </td>
</tr>
<?php
} 
?>

		</table>
	</center>
<?php
}

?>


<?php
// get specific records

if (isset($_POST['submit'])) {

$d=mysqli_real_escape_string($con,$_POST['search']);  //pho
?>
<center>
	<table border="2">
		<tr>
		<th>ID</th>
		<th>name</th>
		<th>Description</th>
		<th>Image</th>	
		</tr>

<?php

  $uy="SELECT * FROM `recipes` WHERE `name` LIKE '%$d%'";
  $res=mysqli_query($con,$uy);
while ($data=mysqli_fetch_array($res)) {
	
	?>

	<tr>
	<td> <?php  echo $data['id'];  ?> </td>
	<td> <?php  echo $data['name'];  ?> </td>
	<td> <?php  echo $data['description'];  ?> </td>
	<td> <img src="recipesimg/<?php  echo $data['image'];  ?>" square height="300px" width="300px" > </td>
</tr>
<?php
}
?>

	</table>
</center>

<?php	
}

?>
 </body>

</html>
