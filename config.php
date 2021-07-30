<?php
	session_start();
	// connect to database
  $conn = mysqli_connect("localhost", "root", "", "TheSkywalkerRanch");
  if(!$conn){
    die("Error connecting to database: " . mysqli_connect_error());
  }

  //define global constrants
  define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost:8080/TheSkywalkerRanch/');
?>
