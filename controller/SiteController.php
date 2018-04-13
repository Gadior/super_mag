<?php


class SiteController
{
	public function actionIndex()
	{
		require_once (ROOT.'/views/news/index.php');
		return true;

	}
}