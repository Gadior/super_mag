<?php 

// GET ALL DATA -> array ($publications);

require_once 'classes.php'; // !!!!!!!!!!!!!!!!!!!!!!

$publications = array();



// echo "<pre>";
// print_r($publications);

//connect to data base

$con = mysqli_connect("localhost", "root", "1g0VZMoIl3iLkxms", "testsite");
mysqli_set_charset($con, "utf8");

//Чек коннекта

if(mysqli_connect_error()){
	echo "Faild to connect" . mysqli_connect_error();
}


//make query

$result = mysqli_query ($con, "SELECT * FROM publication");

while ($row = mysqli_fetch_array($result)) {
	// echo '<br>' . $row['type'];
	$publications[] = new $row['type']($row);
}