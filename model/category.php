<?php

class Category
{
	public static function getCategoryList()
	{

	$con = mysqli_connect("localhost", "root", "1g0VZMoIl3iLkxms", "super_mag");
	mysqli_set_charset($con, "utf8");

			//Чек коннекта

	if(mysqli_connect_error()){
		echo "Faild to connect" . mysqli_connect_error();
	}

	$categoryList = array();

	$result = "SELECT id, name FROM category ORDER BY sort_order ASC";
	$info = mysqli_query($con, $result);
	$count = mysqli_num_rows($info);
	$i=0;

	if($count)
	{
		while ($rows = mysqli_fetch_array($info)) {
			$categoryList[$i]['id'] = $rows['id'];
			$categoryList[$i]['name'] = $rows['name'];
			$i++;
		}
	}
	// echo "<pre>"; ///////////////////////
	// print_r($categoryList); ///////////////////////

	return $categoryList;
	}

	

}