<?php
include 'conn.php';

if(isset($_POST['changestatus'])){

	$id=$_POST['updateid'];
	$status=$_POST['status'];

	$query="UPDATE articles SET status='$status' WHERE articleid='$id' ";
	$query_run=mysqli_query($conn,$query);

	if($query_run){
		echo '<script>alert("Status updated")</script>';
		header("location:admin.php");
	}else{
		echo '<script>alert("Unable...try again Please.")</script>';
	}
}


?>