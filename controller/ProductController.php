<?php
include_once ROOT.'/model/category.php';
include_once ROOT.'/model/product.php';

class ProductController
{
	public function actionView($productId)
	{	
		$categories = array();
		$categories = Category::getCategoryList();

		$product=Product::getProductById($productId);
		

		require_once (ROOT.'/views/news/view.php');
		return true;

	}
}