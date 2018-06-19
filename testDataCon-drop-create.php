<?php

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "test2";

//mysql_connect("hostname", "username", "password");
$connection = mysqli_connect($hostname, $username, $password);

/*
if(!$connection){
	//die("database connection failed".mysqli_error());
	echo "Fail";
}
else {
	echo "Connection is good!!!";
}
*/

//mysql_select_db("databaseName", "connection");
$selection = mysqli_select_db( $connection , $databaseName);

/*
if(!$selection){
	//die("database connection failed".mysql_error());
	echo "Fail";
}
else {
	echo "Selection is good!!!";
}
*/
$success = true;

if(!$connection){
	if($selection){
		echo "connection failed";
		$success = false;
	}else{
		echo "connection and Selection failed";
		$success = false;
	}
} else {
	if(!$selection){
		echo "selection failed";
		$success = false;
	}else {
		echo "connection and Selection work good";
	}
}


/*
*
*
*
*
*/

//brisanje i pravljenje baze u bazi podataka (phpmyadmin)
//brisanje baze

//$dropDatabase = "DROP DATABSE test";

if($success){
	$dropDatabase = "DROP DATABASE juhu";
	$drop = mysqli_query($connection,$dropDatabase);

	if($drop) {
		echo " DROP DATABSE ".$databaseName." - Successful.";
	}else {
		echo  " DROP DATABSE ".$databaseName." - Failed. ".mysqli_error()." ";
	}
}


//pravljenje nove baze

if($success){
	$newDataBase = "";
	$create_SQL = "CREATE DATABASE ".$newDataBase;

	if(mysqli_query($connection,$create_SQL)) {
		echo "database created successfully";
	}else{
		echo "FAILED";
	}

}





?>