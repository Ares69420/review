<?php 
$con=mysqli_connect("localhost","root","","pidb") or die ("error 1 ".mysqli_error());
// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write delete query
	$sql = "DELETE FROM `review_table` WHERE `review_id`='$user_id'";

	// Execute the query

	$result = $con->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
		header("location:reviews.php") ;
		
	}else{
		echo "Error:" . $sql . "<br>" . $con->error;
	}
}

