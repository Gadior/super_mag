<?php

include_once ROOT.'/model/category.php';
include_once ROOT.'/model/product.php';


class CatalogController
{
	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoryList();

		$latestProducts = array();
		$latestProducts = Product::getLatestProducts(12);		

		// echo "<pre>"; //////////////////////
		// print_r($product); //////////////////////


		require_once (ROOT.'/views/news/index1.php');


		return true;

	}
}