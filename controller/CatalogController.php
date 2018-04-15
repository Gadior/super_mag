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
		// print_r($latestProducts); //////////////////////


		require_once (ROOT.'/views/catalog/index.php');


		return true;

	}

	public function actionCategory($categoryId)
	{
		$categories = array();
		$categories = Category::getCategoryList();

		$categoryProduct = array();
		$categoryProduct = Product::getProductListByCategory($categoryId);

		require_once (ROOT . '/views/catalog/category.php');
		return true;
	}

}