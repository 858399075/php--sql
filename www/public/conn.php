    <?php
	$conn=mysqli_connect("localhost","root","","stu");
	if ($conn->connect_error) {
		die("Error:(".$conn->connect_errno.")".$conn->connect_error);
		exit;
	}
	mysqli_set_charset($conn, 'utf8');
?>