<?php

class News 
{

	// Return single item with specified id
	public static function getNewsList($id)
	{	
		include_once ROOT.'/config/connect.php';

		
		$result = "SELECT * FROM news WHERE id = ". $id;

		$info = mysqli_query($con, $result);
		$count = mysqli_num_rows($info);

		$newsList = array();

		if($count){ // есть ли вообще строки в выдаче?
		while ($row1 = mysqli_fetch_array($info)) { // пока есть запись и равна true
			$newsList[$id]['id'] = $row1['id'];
			$newsList[$id]['title'] = $row1['title'];
			$newsList[$id]['date'] = $row1['date'];
			$newsList[$id]['short_content'] = $row1['short_content'];
			$newsList[$id]['content'] = $row1['content'];
			$newsList[$id]['author_name'] = $row1['author_name'];
			$newsList[$id]['preview'] = $row1['preview'];
			$newsList[$id]['type'] = $row1['type'];

		}
	}

	return $newsList;


}

	// Returns an array of news items
public static function getNewsItemId()
{

	include_once ROOT.'/config/connect.php';

	$result = "SELECT id, title, date, short_content, author_name, type FROM news ORDER BY date DESC  LIMIT 10";

	$info = mysqli_query($con, $result);
	$count = mysqli_num_rows($info);


	$i=0;

		if($count){ // есть ли вообще строки в выдаче?
		while ($row1 = mysqli_fetch_array($info)) { // пока есть запись и равна true
			$newsList[$i]['id'] = $row1['id'];
			$newsList[$i]['title'] = $row1['title'];
			$newsList[$i]['date'] = $row1['date'];
			$newsList[$i]['short_content'] = $row1['short_content'];
			$newsList[$i]['author_name'] = $row1['author_name'];
			$newsList[$i]['type'] = $row1['type'];
			$i++;
		}
	}

	return $newsList;


}


}