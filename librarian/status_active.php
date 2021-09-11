<?php include('database.php'); ?>
 <?php 
    
    $user = $_SESSION['fname'];
    if($user == true){

    }else{
      header('location:login.php');
    }
?>
<?php 
	$id=base64_decode($_GET['id']);
	
	$sql = "UPDATE students SET status='1' WHERE id='$id'";
	$query=mysqli_query ($con, $sql);
	header('location:student.php');
 ?>