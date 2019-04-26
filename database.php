<?php  
	$dsn = 'mysql:host=localhost;dbname=sis';
	$username = 'root';
	$password = '';

	try {
		$conn = new PDO($dsn,$username,$password);
		echo 'Connection Successful';
	}catch(PDOException $e){
		echo 'Connection unSuccessful';
	}
	// $serverName = 'localhost';
	// $userName = 'root';
	// $password = '';
	// $dbName = 'sis';

	// $conn = mysqli_connect($serverName,$userName,$password,$dbName);

	// if(mysqli_connect_errno()){
	// echo 'Connection Not Established';
	// }else{
	// echo 'Connection Established';
	// }

?>