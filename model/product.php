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
		///---
	}

	public static function getProductListByCategory($categoryId = false)
	{
		// ////////////////////////
		// ////////////////////////
		// echo "<br>";
		// echo $categoryId;
		// ////////////////////////
		// ////////////////////////
		if ($categoryId)
		{	
		// ////////////////////////
		// ////////////////////////
		// echo "<br>";
		// echo $categoryId;
		// ////////////////////////
		// ////////////////////////
			$con = mysqli_connect("localhost", "root", "1g0VZMoIl3iLkxms", "super_mag");
			mysqli_set_charset($con, "utf8");

			//Чек коннекта

			if(mysqli_connect_error()){
				echo "Faild to connect" . mysqli_connect_error();
			}
			

			$result = "SELECT id, name, price, image, is_new, description FROM product WHERE status = 1 AND category_id = " . $categoryId . " ORDER BY id DESC LIMIT " . self::SHOW_BY_DEFAULT;			
			////////////////////////
			////////////////////////
			// print_r($result);
			////////////////////////
			////////////////////////

			$info = mysqli_query($con, $result);
			$count = mysqli_num_rows($info);
			$i=0;

			////////////////////////
			// ////////////////////////
			// echo "<br>";
			// echo $count;
			// echo "<br>";
			// echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
			////////////////////////
			////////////////////////
			if($count>0){
				if($count)
				{

					while ($rows = mysqli_fetch_array($info)) {
						$product[$i]['id'] = $rows['id'];
						$product[$i]['name'] = $rows['name'];
						$product[$i]['price'] = $rows['price'];
						$product[$i]['image'] = $rows['image'];
						$product[$i]['is_new'] = $rows['is_new'];
						$product[$i]['description'] = $rows['description'];
						$i++;
					}
				////////////////////////
				////////////////////////
				// echo "<pre>";
				// print_r($product);
				////////////////////////
				////////////////////////

				}
				return $product;
			}

		}
		///---
	}

	public static function getProductById($productId)
	{
		////////////////////////
		////////////////////////
		// echo $productId;
		////////////////////////
		////////////////////////
		$con = mysqli_connect("localhost", "root", "1g0VZMoIl3iLkxms", "super_mag");
		mysqli_set_charset($con, "utf8");

			//Чек коннекта

		if(mysqli_connect_error()){
			echo "Faild to connect" . mysqli_connect_error();
		}

		$result = "SELECT * FROM product WHERE id = " . $productId;			
		////////////////////////
		////////////////////////
		// print_r($result);
		////////////////////////
		////////////////////////

		$info = mysqli_query($con, $result);
		$count = mysqli_num_rows($info);
		$i=0;

		if($count)
		{

			while ($rows = mysqli_fetch_array($info)) {
				$product[$i]['id'] = $rows['id'];
				$product[$i]['name'] = $rows['name'];
				$product[$i]['category_id'] = $rows['category_id'];
				$product[$i]['code'] = $rows['code'];
				$product[$i]['price'] = $rows['price'];
				$product[$i]['availability'] = $rows['availability'];
				$product[$i]['brand'] = $rows['brand'];
				$product[$i]['image'] = $rows['image'];
				$product[$i]['description'] = $rows['description'];
				$product[$i]['is_new'] = $rows['is_new'];
				$product[$i]['is_recommended'] = $rows['is_recommended'];
				$product[$i]['status'] = $rows['status'];
				$i++;
			}


		}


		///---
		

				////////////////////////
				////////////////////////
				// echo "<pre>";
				// print_r($product);
				////////////////////////
				////////////////////////
		return $product;
	}

	

}