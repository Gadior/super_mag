<?php 

abstract class Publication{

	public $id;
	public $title;
	public $date;
	public $short_content;
	public $content;
	public $preview;
	public $author_name;
	public $type;

	abstract public function printItem();

	function __construct($row){
		$this->id = $row['id'];
		$this->title = $row['title'];
		$this->date = $row['date'];
		$this->short_content = $row['short_content'];
		$this->content = $row['content'];
		$this->preview = $row['preview'];
		$this->author_name = $row['author_name'];
		$this->type = $row['type'];

	}

}

class NewsPublication extends Publication{

	public function printItem(){
		// echo '<br> This is news';
		echo '<br> Новость: ' . $this->title;
		echo '<br> Дата: ' . $this->date;
		echo '<hr>';
	}
}


class ArticalePublication extends Publication{

	public function printItem(){
		// echo '<br> This is Articles';
		echo '<br> Статья: ' . $this->title;
		echo '<br> Автор: ' . $this->author_name;
		echo '<hr>';
	}
}

class PhotoReportPublication extends Publication{

	public function printItem(){
		// echo '<br> Был вызван метод ' . __Method__;
		// echo '<br> This is Photos';
		echo '<br> Фотоотчет: ' . $this->title;
		echo '<br> <img src="http://localhost/test.ru' . $this->preview . '">';
		echo '<hr>';
	}
}


?>