<?php 
// include_once 'functions.php';

// if(isset($_POST['submit'])){

// 	$a = $_POST['a'];
// 	$b = $_POST['b'];
// 	$c = $_POST['c'];

// 	if(!empty($a) and !empty($b) and !empty($c)){

// 		$result = quadratic($a, $b, $c);

// 		if($result != false){
// 			print_r($result);
// 		}else
// 		{
// 			echo "Корней нет <bt>";
// 		}
// 	}

// 	echo "<bt> Форма отправлена a = $a, b = $b, c = $c";
// }


?>
<?php

if((isset($_POST['name'])) && !empty($_POST['name'])){
	$name = $_POST['name'];

	setcookie('name', $name, time() + 3600);


}elseif (isset($_COOKIE['name'])) {
		$name = $_COOKIE['name'];
}
else
{
	$name='Гость';
}

?>


<html>

<head>
	<meta charset="utf-8">
	<title>Тест2</title>
</head>
<body>
	<p> Привет, <?php echo $name; ?></p>
	<div>
		<h1>Страница index.php</h1>
		<a href="page.php"> Страница page.php</a>
		<form action="index.php" method="post">
			<input type="text" name="name">
			<input type="submit">

		</form>
		
	</div>





</body>
</html>


<?php 






// ----------------
/*
$arr = array(1,2,3,4,5,6,7);

$arr2 = array_reverse($arr);

print_r($arr2);
*/
// ----------------
// $arr = array(1,2,3,4,5,6,7);
// $r='';

// isset  проверяет равна ли чему то переменная и не равна нулю
/*$res = isset($arr);
var_dump($res);
$res = isset($r);
var_dump($res);*/
/*
echo "Проверяем фурнкцию empty";
var_dump(empty($arr));
echo "<br>";
var_dump(empty($r));
echo "<br>";*/

/*
echo "Проверяем фурнкцию gettype";
var_dump(gettype($arr));
echo "<br>";
var_dump(gettype($r));
echo "<br>";*/
/*
echo "Проверяем фурнкцию is_array";
var_dump(is_array($arr));
echo "<br>";
var_dump(is_array($r));
echo "<br>";*/
/*
echo "Проверяем фурнкцию get_define_vars";
echo "<pre>";
print_r(get_defined_vars());
echo "<pre>";*/

// ----------------
/*$city = 'London';
$percent = 22/41*100;
$total = 1000;


$format = 'По данным статистики %2$.2f из %1$d из  опрошенных %3$s %1$d';
printf($format, $percent, $total, $city);
$res = sprintf($format, $percent, $total, $city);

print_r($res);*/

// ----------------

// $ar = 'some string';
// echo "<br>";
// echo strlen($ar) . '<hr/>' ;
// echo substr($ar , 0 , 6) . '<hr/>' ;
// echo str_replace('s' , '' , $ar) . '<hr/>' ;

// $arr = array(
// 	'key1' => 3,
// 	'key2' => 5,
// 	'key3' => 13,
// 	);
// echo "<pre>";
// $result = array_keys($arr);
// print_r($result);
// echo "<pre>";
// echo "<br>";
// $result = array_values($arr);
// print_r($result);

// $group1 = ['4152' => 'Victor', '2635' => 'alex'];
// $group2 = ['352' => 'Andrey', '326' => 'Den'];
// echo "<pre>";
// $summ = $group1 + $group2;
// print_r($summ);
// echo "<pre>";

// $keys1 = array_keys($group1);
// $keys2 = array_keys($group2);

// $mean1 = array_values($group1);
// $mean2 = array_values($group2);


// $now = getdate();

// echo "<pre>";
// print_r($now);

// $times = time();
// echo $times;

// echo date("Y-m-d M:i;s");
// echo "<hr>";
// echo date ("F j, Y");







// ----------------
// ----------------
// ----------------
// ----------------

// echo "<pre>";
// print_r($_SERVER);
// echo "<pre>";




// ----------------
// ----------------
// ----------------
// ----------------
// ----------------
// ----------------
// ----------------







// ----------------
/*
function myFunc( $array = 'Пользователь' ){

		echo "Hellow " . $array . "<br>" ;
	
}

$student = array('Oleg', 'Andrey', 'Dima');

myFunc();
*/
/*
$a =1;
function test(){
	$a=2;
}
test();

echo $a;*/

 // ----------------

/*
$name1 = 'Victor';
$name2 = 'Gleb';

function test(){
	$name3 = 'Vladimir';
	echo 'Hellow' . $name3 . '<br>'  ;

	global $name1;
	echo 'Hellow' . $name1 .  '<br>' ;

	echo 'Hellow' . $GLOBALS['name2'] . '<br>' ;

	$GLOBALS['name2'] = 'Usder';


}
test();
echo $name2;*/

// ----------------
//& передача переменной по ссылки
// те копия не создается для функции
/*
function test(&$beta){
	$beta=5;
}
$beta = 10;

test($beta);

echo $beta;*/

// ----------------

//Для сохранения результат у переменных в рамках функции 
// используй значение static перед переменной
/*
function howManyTimes(){

	static $a = 0;
	echo ++$a;
	echo "<br>";
}


howManyTimes();
howManyTimes();
howManyTimes();
howManyTimes();
*/
// ----------------
/*
function per($a, $b){
	$r=(2*$a) + (2*$b);
	return $r;
}

$a = 10;
$b = 20;

$p = per($a,$b);
echo $p;
*/

// ----------------
//Рекурсивная функция
/*
$array = array(
	'Автотехника' => array( // 1
		'Вело' => array( // 2
			'Велосипеды' => array( // 3
				'(товар) Экстрим' => 15, // 4
				'(товар) Автор' =>4), // 4
			'Самокаты' => 12, // 3
			),
		),
	);

function sum($array, $level = 0){

	static $count;
	static $items;

	if (is_array($array)){
		$level++;
		foreach($array as $der){
			sum($der, $level);

		}
	} else
	{
		$count++;
		$items += $array;
	}

	return array('count' => $count, 'items' => $items);
}

$result = sum($array);
print_r($result);

*/
/*
$s=0;


foreach ($array as $level1) {
	if(is_array($level1)){
		foreach ($level1 as $level2){
			if(is_array($level2)){
				foreach ($level2 as $level3){
					if(is_array($level3)){
						foreach ($level3 as $level4){
							if(is_array($level4)){
								echo "<pre>";
								print_r($level4);
								echo "<pre>";
							}
							else{
								$s += $level4;
							}
						}
					}else{
						$s += $level3;
					}
				}
			}else
			{
				$s += $level2;
			}
		}

	} else
	{
		$s += $level1;
	}
}
echo '<hr>' . $s;
*/







// ----------------
/*while ($i <= 10) {
	echo $i;
	echo "<br>";
	$i ++;
}*/
/*
do {
	echo $i;
	echo "<br>";
	$i ++;
} while ($i <= 10);
*/
/*
for ( $i=1; $i <= 10 ; $i++){
	echo $i;

}*/

/*

$student = array(
	array('name'=> 'Victor', 'app' => 75), // 0
	array('name'=> 'Bad', 'app' => 5), // 1
	array('name'=> 'Locky', 'app' => 175), // 2
	array('name'=> 'Lusk', 'app' => 68), // 3
	array('name'=> 'dasha', 'app' => 13), // 4
	array('name'=> 'Sasha', 'app' => 9), // 5
	);


for($i = 0; $i < count($student); $i++ ){
	echo "Сутдент - " . $student[$i]['name'] . "<br>" . "  Проживает в квартире  - " . $student[$i]['app'] . "<br>" . "<br>" ;
}*/
/*
$student = array(
	array('name'=> 'Victor', 'app' => 75), // 0
	array('name'=> 'Bad', 'app' => 5), // 1
	array('name'=> 'Locky', 'app' => 175), // 2
	array('name'=> 'Lusk', 'app' => 68), // 3
	array('name'=> 'dasha', 'app' => 13), // 4
	array('name'=> 'Sasha', 'app' => 9), // 5
	);

	foreach ($student as $key => $value) {
		echo $value['name'] . "<br>"  ;
		echo $value['app'] . "<br>"  ;

	}
*/
/*

for($i=0; $i<50; $i++){
	if($i == 30 ){
		break;
	}
	echo $i . "<br>" ;

}


*/








/* Операторы
$a = 5;
$b = 2;

if(($a>0) and ($b>0)){
	echo "Оба оператора больше нуля";
}
*/
/*
все типы логических операторов
and  = И
or = Или
xor = исключающее или
!$a = Отрицание
&& = И
|| = ИЛИ
*/







/*
$status = true;


$res =  ($status) ? "Включен" : "Отключен"; // тернарный оператор
// первое событие подтверждение, второе не согласие

echo $res;
*/

/*
switch ($day) {

	case 1: echo "Понедельник"; break;
	case 2: echo "Вторник"; break;
	case 3: echo "Среда"; break;
	case 4: echo "Четверг"; break;
	case 5: echo "Пятница"; break;
	case 6: echo "Суббота"; break;
	case 7: echo "Воскресенье"; break;
	default: echo "ошибка";
}*/


/*
if ($day==1){
	echo "Понедельник";
}
elseif ($day==2){
	echo "Вторник";
}
elseif ($day==3){
	echo "Среда";
}
elseif ($day==4){
	echo "Четверг";
}
elseif ($day==5){
	echo "Пятница";
}
elseif ($day==6){
	echo "Суббота";
}
elseif ($day==7){
	echo "Воскресенье";
}
else{
	echo "Такого дня не бывает";
}
*/

?>