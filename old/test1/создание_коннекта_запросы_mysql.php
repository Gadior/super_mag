<?php 

//`news`(`id`, `h1`, `short_content`, `content`, `category_id`, `author_id`, `date`, `preview`, `status`)
//`comment`(`id`, `text`, `author_id`, `date`, `news_id`)
//`news_category`(`id`, `name`, `description`, `sort_odrder`, `status`)
//`user`(`id`, `name`, `surname`, `email`, `password`, `country`, `city`, `gender`, `birthday`, `register_date`, `last_visit`)

// SELECT id, name, surname FROM user;
// INSERT INTO название таблицы VALUES (знач1, знач2, знач3); - так можно добавлять, если заполняем все поля
// INSERT INTO table_name(col1, col2, col3) VALUES (val1, val2, val3); - так можно вводить и указывать конкретные колонки в добавляемой табличке
// INSERT INTO table_name(col1, col2, col3) VALUES (val1, val2, val3),(val1, val2, val3),(val1, val2, val3); - Позволяет вставлять несколько записей в одном запросе.
//DELETE FROM название_таблицы [WHERE условие] [ORDER BY поле] [LIMIT кол-во]
//UPDATE таблица SET пол1=выражение1, поле2 = выражение2, WHERE [ORDER BY] [LIMIT ASK (DESC)]
// SELECT что выбирать [FROM таблица] [AS] [WHERE условие] [GROUP BY поле] [ORDER BY поле] [LIMIT кол-во]
// AS - меняет значение ключевого поля, на удобное. К примеру, SELECT `id` AS `number` FROM `news`; - вернеться НЕ id, а number;


// echo mysqli_affected_rows($con); - отображает кол-во строк подверженных изменению


//Агрегатные функции COUTN SUM AVR MIN/MAX. Форма записи SELECT COUNT (*) FROM `news` WHERE `id`=2; - Веренет колво новостей с данным айди

$con = mysqli_connect("localhost", "root", "1g0VZMoIl3iLkxms", "testsite");
mysqli_set_charset($con, "utf8");

//Чек коннекта

if(mysqli_connect_error()){
echo "Faild to connect" . mysqli_connect_error();
}

// $query = "INSERT INTO `news`(`id`, `h1`, `short_content`, `content`, `category_id`, `author_id`, `date`, `preview`, `status`) VALUES (NULL,'Проба ПХП', 'Добавление1', 'длинное добавление','1', '1', CURRENT_TIMESTAMP, '1111', '1')";

//$query = "DELETE FROM `news` WHERE `id` = '4'";

// $query = "DELETE FROM `news` WHERE `date` < DATE_SUB(CURRENT_DATE(), INTERVAL 0.5 DAY)";

// $query = "UPDATE news SET status='0';";

echo date("M:i;s");
$query = "SELECT * FROM news";
$info = mysqli_query($con, $query);

$count = mysqli_num_rows($info); // так как тут передаются данные, то сначала можно получить кол-во строк в передаваемых данных. Можно посмотреть в echo;

echo "<br>";
echo "$count";
echo "<br>";
//$row1 = mysqli_fetch_array($info); // запись строк в массив. Вернет ИМЕННО первую запись
//$row1 = mysqli_fetch_array($info); // что бы вернуть следующую запись - можно вызвать фетчь еще раз. Но есть циклы 

if($count){
	while ($row1 = mysqli_fetch_array($info)) {
		echo "<pre>";
		echo $row1['h1'];
	}
}







?>