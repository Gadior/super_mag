<?php

class Product
{
	const SHOW_BY_DEFAULT=10;

	public static function getLatestProducts($count=self::SHOW_BY_DEFAULT)
	{

		$count = intval($count);

		$con = mysqli_connect("localhost", "root", "1g0VZMoIl3iLkxms", "super_mag");
		mysqli_set_charset($con, "utf8");

			//Чек коннекта

		if(mysqli_connect_error()){
		echo "Faild to connect" . mysqli_connect_error();
		}


	$productList = array();

	$result = "SELECT id, name, price, image, is_new, description FROM product WHERE status=1 ORDER BY id DESC LIMIT " . $count;

	$info = mysqli_query($con, $result);
	$count = mysqli_num_rows($info);
	$i=0;

	if($count)
	{
		while ($rows = mysqli_fetch_array($info)) {
			$productList[$i]['id'] = $rows['id'];
			$productList[$i]['name'] = $rows['name'];
			$productList[$i]['price'] = $rows['price'];
			$productList[$i]['image'] = $rows['image'];
			$productList[$i]['is_new'] = $rows['is_new'];
			$productList[$i]['description'] = $rows['description'];
			
			$i++;
		}
	}
	// echo "<pre>"; ///////////////////////
	// print_r($productList); ///////////////////////

	return $productList;
	}

	

}