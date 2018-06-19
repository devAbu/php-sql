<?php

$hostname = "localhost";
$username = "root";
$pass = "";
$dataBaseName = "test2";

$connection = mysqli_connect($hostname, $username, $pass);
$selection = mysqli_select_db($connection, $dataBaseName);

$success = true;

if(!$connection){
	die("connection failed ".mysql_error());
	$success = false;
}else{
	echo "connection is good!";
	echo"<br>";
}

if(!$selection){
	die("selection failed ".mysql_error());
	$success = false;
}else{
	echo "selection is good!";
}

if($success){
	$tableName = "juhu";
	$sql = "CREATE TABLE $tableName (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			firstname VARCHAR(30) NOT NULL,
			lastname VARCHAR(30) NOT NULL,
			email VARCHAR(50),
			reg_date TIMESTAMP
			)";


//if ($conn->query($sql) === TRUE)
if (mysqli_query($connection,$sql)) {
	echo "<br>";
    echo "Table $tableName created successfully";
} else {
	echo "<br>";
    echo "Error creating table $tableName : " . $connection->error; //mysql_error();
}

}

?>