<?php

include_once ROOT.'/model/category.php';
include_once ROOT.'/model/product.php';


class SiteController
{
	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoryList();

		$products = array();
		$products = Product::getLatestProducts(10);		

		// echo "<pre>"; //////////////////////
		// print_r($product); //////////////////////


		require_once (ROOT.'/views/news/index.php');


		return true;

	}
}