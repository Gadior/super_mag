


<?php 


/*
Можно создавать свои константы
Функциоя define("PI", 3.141592);
$r=10;
$s=PI*$r*$r;
echo $s;
*/




/*
Что бы экранировать переменную, надо заключить ее в {}.
К примеру
$a=80;
$b=90;

echo "Было это в {$a}x  и {$b}x годах";

*/

$a=80;
$b=90;



////////////////////////////





// ----------------------------------------------
//Напишем функцию добавления в многомерный массиви данных
$array3 = array();

function massive1($ar,$name,$age){	
	$massive1Sum=count($ar); // Считает кол-во эллемнтов в массиве
	$ar[$massive1Sum]['name'] = $name; // Добавляет Имя передаваемое в функцию
	$ar[$massive1Sum]['age'] = $age; // Добавляет Возраст передаваемое в функцию
	return $ar;

};

// добвляем значения в массив, обращаясь к функции
$array3 = massive1($array3, 'Victor', '11');
$array3 = massive1($array3, 'Dark', '12');
$array3 = massive1($array3, 'Jack', '13');
$array3 = massive1($array3, 'Jack', '13');



// ----------------------------------------------

/*
Научимся добавлять значения в массив с ключами.
Вид массива с ключами:
Ключ самого массива - программисты
Имя = Виктор,  Возраст = 32, пол = мужской
Вывод по ключу

*/
$array4 = array();


function massive2($ar,$name,$age,$male){
	
	$massive1Sum=count($ar); // Считает кол-во эллемнтов в массиве
	$ar[$massive1Sum] = ['name' => $name, 'age' => $age, 'male' => $male];
	return $ar;

};

$array4 = massive2($array4, 'Виктор', '32', 'male');
$array4 = massive2($array4, 'Gasha', '18', 'female');
$array4 = massive2($array4, 'Dasha', '28', 'female');
$array4 = massive2($array4, 'Gucha', '38', 'male');
$array4 = massive2($array4, 'Rita', '54', 'female');


// ----------------------------------------------

$arr = array('name' => 'Victor','age' => '32','gender' => 'male');


$arrmn= array(
	'Программисты' => $array1 = array('Желтый', 'Синий', 'Зеленый' ),
	'Finance' => $array2 = array('F' => 'Совсем плохо','E' => 'Очень плохо','D' => 'Плохо','C' => 'Нормально','B' => 'Хорошо','A' => 'Очень хорошо','A+' => 'Отлично'),
);




// ----------------------------------------------

$bd1 = array(
	'Programmers' =>$array1 = array(),
	'Finance' => $array1 = array(),
	);


function bdAdd($ar,$type,$name,$age,$male){
	$massive1Sum = count($ar[$type]);
	$ar[$type][$massive1Sum] = ['name' => $name, 'age' => $age, 'male' => $male];
	return $ar;
};

$bd1 = bdAdd($bd1,'Programmers','Valera','32','male');
$bd1 = bdAdd($bd1,'Programmers','Dima','32','male');
$bd1 = bdAdd($bd1,'Finance','Dasha','32','female');


// быстрый поиск ВСЕХ значений по функции. Смотри ниже print_r
function search($array, $key, $value)
{
    $results = array();

    if (is_array($array))
    {
        if (isset($array[$key]) && $array[$key] == $value) 
        	/*
			isset проверякт - является ли нейм частью массива, а конкатинирует
			с проверкой "есть ли указанное имя" в массиве
        	*/
            $results[] = $array;

        foreach ($array as $subarray)
            $results = array_merge($results, search($subarray, $key, $value));
    }

    return $results;
}

echo "<pre>";
print_r(search($bd1, 'name', 'Dima'));
echo "<pre>";
// ----------------------------------------------



?>