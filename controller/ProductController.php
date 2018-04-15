<?php


class ProductController
{
	public function actionView($id)
	{	
		require_once (ROOT.'/views/news/view.php');
		return true;

	}
}