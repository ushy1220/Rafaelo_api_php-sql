<?php
	header('Access-Control-Allow-Origin: *');

	define('DB_HOST', 'localhost');
	define('DB_USER', 'michal');
	define('DB_PASS', 'michal');
	define('DB_NAME', 'messages');

	$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if(mysqli_connect_error()){
		echo mysqli_connect_error();
		exit();
	} else {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$content = $_POST['content'];

		$sql = "INSERT INTO messages(name, email, content) VALUES('$name', '$email', '$content');";
		$res = mysqli_query($conn, $sql);

		if($res) {
			echo "Success!";
		} else {
			echo "Error!";
		}
		$conn->close();
	}
?>