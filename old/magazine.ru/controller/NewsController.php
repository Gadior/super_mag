<?php

include_once ROOT.'/models/News.php';

class NewsController
{
	public function actionIndex()
	{
		$newsList = array();
		$newsList = News::getNewsItemId();


		require_once (ROOT.'/views/news/index.php');
		return true;

	}

	public function actionView($id)
	{
		if($id !=0)
		{
			$newsItem = News::getNewsList($id);

		}
		return true;
	}
}