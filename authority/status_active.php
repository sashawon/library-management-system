<?php include('database.php'); ?>
<?php 
	$id=base64_decode($_GET['id']);
	
	$sql = "UPDATE librarian SET status='1' WHERE id='$id'";
	$query=mysqli_query ($con, $sql);
	header('location:admin.php');
 ?>