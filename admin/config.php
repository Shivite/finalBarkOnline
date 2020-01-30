<?php
  
  session_start();
  define('DB_NAME', 'grouppnbmain');
  define('DB_USER', 'grouppnbmainuser');
  define('DB_PASSWORD', 'grouppnbmainuser');
  define('DB_HOST', 'localhost');

  $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  if ($conn->connect_error) { 
	die("Connection failed: " . $conn->connect_error);
  }

?>