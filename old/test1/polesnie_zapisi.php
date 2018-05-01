<?php 

// ---- Основные функции mysql -----------------

// SELECT id, name, surname FROM user;
// INSERT INTO название таблицы VALUES (знач1, знач2, знач3); - так можно добавлять, если заполняем все поля
// INSERT INTO table_name(col1, col2, col3) VALUES (val1, val2, val3); - так можно вводить и указывать конкретные колонки в добавляемой табличке
// INSERT INTO table_name(col1, col2, col3) VALUES (val1, val2, val3),(val1, val2, val3),(val1, val2, val3); - Позволяет вставлять несколько записей в одном запросе.
//DELETE FROM название_таблицы [WHERE условие] [ORDER BY поле] [LIMIT кол-во]
//UPDATE таблица SET пол1=выражение1, поле2 = выражение2, WHERE [ORDER BY] [LIMIT ASK (DESC)]
// SELECT что выбирать [FROM таблица] [WHERE условие] [GROUP BY поле] [ORDER BY поле] [LIMIT кол-во]
// AS - меняет значение ключевого поля, на удобное. К примеру, SELECT `id` AS `number` FROM `news`; - вернеться НЕ id, а number;


// echo mysqli_affected_rows($con); - отображает кол-во строк подверженных изменению


//Агрегатные функции COUTN SUM AVR MIN/MAX. Форма записи SELECT COUNT (*) FROM `news` WHERE `id`=2; - Веренет колво новостей с данным айди

// ---- Конец -----------------



// ---- Создание конекта к базе -----------------

$con = mysqli_connect("localhost", "root", "1g0VZMoIl3iLkxms", "testsite");
mysqli_set_charset($con, "utf8");

//Чек коннекта

if(mysqli_connect_error()){
	echo "Faild to connect" . mysqli_connect_error();
}

// ---- Конец -----------------



// ---- Отображение кол-ва изм-ых строк в базе -----------------

// echo mysqli_affected_rows($con); - отображает кол-во строк подверженных изменению

// ---- Конец -----------------



// ---- Работа с функцией SELECT -----------------
//отличие в том, что все иное - меняет саму базу, а  SELECT отдает данные.

$query = "SELECT * FROM news";
$info = mysqli_query($con, $query);
$count = mysqli_num_rows($info); // так как тут передаются данные, то сначала можно получить кол-во строк в передаваемых данных. Можно посмотреть в echo , если требуется. Показатель того - отдалось ли что то вообще
//$row1 = mysqli_fetch_array($info); // запись строк в массив. Вернет ИМЕННО первую запись. При повторном вызове - вернет вторую. Отдает ровно одну запись за тик
//что бы записать все доступные строки надо использовать цикл

if($count){ // есть ли вообще строки в выдаче?
	while ($row1 = mysqli_fetch_array($info)) { // пока есть запись и равна true
		echo "<pre>"; 
		echo $row1['h1']; // вот тут выводим по id от полей БД
	}
}

// ---- Конец -----------------



// ---- Пример CLASS -----------------

class car{ // класс стоит воспринимать как чертеж. Объект же - это деталь, созданная по чертежу
	public $color = 'white'; // свойства класса
	public $speed;
	public $fuel;
	public $brand;

	public function __construct($color, $speed, $fuel, $brand){
		$this ->color = $color;
		$this ->speed = $speed;
		$this ->fuel = $fuel;
		$this ->brand = $brand;
		
	}

	// public function __destruct(){ // деструктор класса автоматически уничтожает объект по завершению скрипта или при помощи unset(object)
	// 	echo '<br> New object of class '. __CLASS__ . ' called';
	// 	echo '<br> Method ' . __Method__ .' called';
	// }

	public static $engine = 1; //создается для оперирования внутри класса

	public static function whtaIsIt(){ // аналогично - функция создана для ОПИСАНИЯ именно КЛАССА, а не объекта
		ehco 'Автомобиль - моторное средство';
	}



	public function test(){ // методы класса
		echo "<br> test function";

		echo self::$engine; // обращение к статической переменной
		self::whtaIsIt();
	}

	public function tripTime($distance){
		$time = $distance / $this->speed; // переменная this работает как ссылка на вызываемый объект. Для car 1  и для car 2 персонально
		return $time;
	}



}


$car1 = new car('Yellow', 110, 12, 'Audi'); //объявляем объект для класса. задаем персональные свойства для объектов
$car2 = new car('Blue', 150, 14, 'Skoda');


echo car::$engine; // обращение к статичным переменным класса
car::whtaIsIt();



//------
class work{

	const WHEEL = 4; // задаем константное значение внутри класса

	public function test(){
		echo work::WHEEL;
		echo self::WHEEL; // так мы говорим, что переменная находиться в этом классе
	}

}

class buse{

	const WHEEL = 2;

	public function test(){
		echo work::WHEEL; // обрати внимание, что обратились к переменной другого класса
		echo self::WHEEL;
	}
}

// echo work::WHEEL; //обращение к константам посредствам класса
// echo buse::WHEEL;


$work3 = new buse;
$work3 -> test();



// ---- Конец -----------------


// ---- Наследование классов -----------------

/*
Можно создать базовый, родительский класс. И дочерний класс - полностью перенимет его свойства и методы.

class Vehical {
	public $speed = 110;
	const const_PEREMEN = 50;
	public function tripTime($distance){
		$time = $distance / $this->speed;
		return $time;
	}
}

Наследие определяется функцие extends (расширение)

class Car extends Vehical{
	public $fuel; // здесь можно добавлять новые методы и свойства для уже дочернего класса

	public function fuelConsumption($distance){
		$result = ($this->fuel * $distance) / 100;
		return $result;
	}

	public function tripTime($distance){
		$time = parent::tripTime($distance) * 1.2;  // так мы обратились к методу родительского класа и переопределили его
		// $time = ($distance / $this->speed) * 1.2; // а так мы просто переопределили метод 
		// $const = parent::$const_PEREMEN; // а так можно обратиться к константе из родительского класса
		return $time;
	}
}

$car1 = new Car;
$car1->speed = 100;
$car1->fuel = 12;

echo '<br> Car1 fuelCons ' . $car1 -> fuelConsumption($distance);

Общая структура наследования

РОДИТЕЛЬ

class Main1{
	свойство 1
	свойство 2

	метод 1
	метод 2
};

ДОЧЕРНИЙ

class car extends Main1{
	новое свойство 1
	Новое свойство 2

	Новый метод
	Новый метод
}

следующий дочерний от дочернего

class detal extends car{
	более новое свойство 1
	более новое свойство 2

	более новый метод 1
	более новый метод 2
}

Надо понимать, что чем выше лежит родитель - тем более глобальные функции он решает
Это значит, что в дочернем написать функцию, она будет подтягивать результат функции из дочернего класа, а та в своб очередь будет тянуть какие то данные из родителя
и т.д



// ---- FINAL как запрет на изменения внутри класса и самого класса -----------------
class Venical{
	final function test1(){ // Таковой метод - нельзя будет переопределить
	}
}

final class car extends Venical{ // от такого класа нельзя будет создать класс
}
class Audi extends Car{	
}



// ---- Конец -----------------


// ---- Виды доступов к методам Private public Protected -----------------

public - Общедоступный. Позволяет получать доступ к методам и свойствам класса из любого места

pretected - Защищенный. Позволяет получать доступ к текущему классу и наследуюемым объектам

private - Закрытый. Видим только в пределах данного класса.


// ---- Конец -----------------


// ---- Catchable error -----------------

Можно прерывать показ ошибки и показывать нужное тебе сообщение

function onErrorFunction(){
	echo 'Enter correct value';
}

set_error_handler('onErrorFunction');

// ---- Конец -----------------


// ---- Указать использование обязательного свойства или метода в родительском классе.  -----------------

Если не использовать обозначенное свойство или метод ( маркерованное abstract ) в дочернем классе - то вызовиться ошибка. Это нужно, что бы не забывать создавать архитектурные вещи, задуманные с начала

abstract class Publication{
	abstract public function printItem();
}

class NewsPublication extends Publication{ Ошибки не будет
 
	public function printItem(){

	}
}

class News extends Publication{ Ошибка будет

}

// ---- Конец -----------------

// ---- Interface  -----------------

Особенность в интерфейсах, что класс МОЖЕТ наследовать более одного интерфейса.
Интерфейсы НЕ описывают функционал методов, однако указывают на них
Если в интерфейсе обохначен метод, то в дочернем классе - он ОБЯЗАН быть использован

interface Vehicle{
	public function Info();
}

interface Car extends Vehicle{
	public function drive();
}

interface Boat extends Vehicle{
	public function swim();
}

class Audi implements Car,Boat{
	public function Info(){
		echo '<br> Audi is a German car';
	}

	public function drive(){
		echo '<br> Audi drives';
	}
	public function swim(){
		echo 'car swim';
	}
}

}

// ---- Конец -----------------



// ---- Короткий вид цикла в HTML  -----------------

<?php if(условие);?> // foreach

какой то хтмл код

<?php endif;?> // endforeach

// ---- Конец -----------------


// ---- Короткий вид цикла в HTML  -----------------

Общая модель MVC

1. Инициализатор запуска (определение Routa - и как вызов его функции)

2. В Route необходимо обработать путь который строить в URL строки браузера.
	- Модель путей, т.е маски лежат в routes - они же и есть пути
	- Вторая зада Route - в зависимости от строки бразуера определить Метод и Контроль для обработки

3. Получи в Route метод и контроль - запускается данный метод и контролер. Это некий собирательный  источник, который агрегирует разную инфоормацию из разных моделей. После получения корректной инфы из моделей - вызывает страницу (в методе) в которую это все передает

4. Модель является объектом - сбора данных ( имеет статические функции как правило). здесь происходят запросы к БД, помещение их в массив и т.п.
	- Модель возвращает эти данные посредствам return


3.1.
	После обработки данных в Методе Контролера посредствам Моделей - происходит вызов страницы отображения (в MVC - V). 


Архитектура 

index.php
Controllers - > Агрегаторы информации в зависимости от задачи странички
Config -> хранит маски путей и всякие подключения к БД
Models -> хранит обработчики информации
views ( в будущем используй pages) - хранит внешний вид страниц.
template (или site) -> хранит скрипты/верстку/картинки и т.п.


Течение информации

Пользователь ->
index.php ->
require_once - Router ->
	-> чек routes ->
	-> Проверка контролера в зависимости от строки браузера ->
Controller ->
Model ->
BD ->
Controller->
pages->
Пользователь

// ---- Конец -----------------


// ---- Пагинация страниц.  -----------------

Класс для пагинации */

<?php

/*
 * Класс для генерации постраничной навигации
 */

class Pagination
{

    /**
     * 
     * @var Ссылок навигации на страницу
     * 
     */
    private $max = 10;

    /**
     * 
     * @var Ключ для GET, в который пишется номер страницы
     * 
     */
    private $index = 'page';

    /**
     * 
     * @var Текущая страница
     * 
     */
    private $current_page;

    /**
     * 
     * @var Общее количество записей
     * 
     */
    private $total;

    /**
     * 
     * @var Записей на страницу
     * 
     */
    private $limit;

    /**
     * Запуск необходимых данных для навигации
     * @param integer $total - общее количество записей
     * @param integer $limit - количество записей на страницу
     * 
     * @return
     */
    public function __construct($total, $currentPage, $limit, $index)
    {
        # Устанавливаем общее количество записей
        $this->total = $total;

        # Устанавливаем количество записей на страницу
        $this->limit = $limit;

        # Устанавливаем ключ в url
        $this->index = $index;

        # Устанавливаем количество страниц
        $this->amount = $this->amount();

        # Устанавливаем номер текущей страницы
        $this->setCurrentPage($currentPage);
    }

    /**
     *  Для вывода ссылок
     * 
     * @return HTML-код со ссылками навигации
     */
    public function get()
    {
        # Для записи ссылок
        $links = null;

        # Получаем ограничения для цикла
        $limits = $this->limits();

        $html = '<ul class="pagination">';
        # Генерируем ссылки
        for ($page = $limits[0]; $page <= $limits[1]; $page++) {
            # Если текущая это текущая страница, ссылки нет и добавляется класс active
            if ($page == $this->current_page) {
                $links .= '<li class="active"><a href="#">' . $page . '</a></li>';
            } else {
                # Иначе генерируем ссылку
                $links .= $this->generateHtml($page);
            }
        }

        # Если ссылки создались
        if (!is_null($links)) {
            # Если текущая страница не первая
            if ($this->current_page > 1)
            # Создаём ссылку "На первую"
                $links = $this->generateHtml(1, '&lt;') . $links;

            # Если текущая страница не первая
            if ($this->current_page < $this->amount)
            # Создаём ссылку "На последнюю"
                $links .= $this->generateHtml($this->amount, '&gt;');
        }

        $html .= $links . '</ul>';

        # Возвращаем html
        return $html;
    }

    /**
     * Для генерации HTML-кода ссылки
     * @param integer $page - номер страницы
     * 
     * @return
     */
    private function generateHtml($page, $text = null)
    {
        # Если текст ссылки не указан
        if (!$text)
        # Указываем, что текст - цифра страницы
            $text = $page;

        $currentURI = rtrim($_SERVER['REQUEST_URI'], '/') . '/';
        $currentURI = preg_replace('~/page-[0-9]+~', '', $currentURI);
        # Формируем HTML код ссылки и возвращаем
        return
                '<li><a href="' . $currentURI . $this->index . $page . '">' . $text . '</a></li>';
    }

    /**
     *  Для получения, откуда стартовать
     * 
     * @return массив с началом и концом отсчёта
     */
    private function limits()
    {
        # Вычисляем ссылки слева (чтобы активная ссылка была посередине)
        $left = $this->current_page - round($this->max / 2);

        # Вычисляем начало отсчёта
        $start = $left > 0 ? $left : 1;

        # Если впереди есть как минимум $this->max страниц
        if ($start + $this->max <= $this->amount)
        # Назначаем конец цикла вперёд на $this->max страниц или просто на минимум
            $end = $start > 1 ? $start + $this->max : $this->max;
        else {
            # Конец - общее количество страниц
            $end = $this->amount;

            # Начало - минус $this->max от конца
            $start = $this->amount - $this->max > 0 ? $this->amount - $this->max : 1;
        }

        # Возвращаем
        return
                array($start, $end);
    }

    /**
     * Для установки текущей страницы
     * 
     * @return
     */
    private function setCurrentPage($currentPage)
    {
        # Получаем номер страницы
        $this->current_page = $currentPage;

        # Если текущая страница боле нуля
        if ($this->current_page > 0) {
            # Если текунщая страница меньше общего количества страниц
            if ($this->current_page > $this->amount)
            # Устанавливаем страницу на последнюю
                $this->current_page = $this->amount;
        } else
        # Устанавливаем страницу на первую
            $this->current_page = 1;
    }

    /**
     * Для получеия общего числа страниц
     * 
     * @return число страниц
     */
    private function amount()
    {
        # Делим и возвращаем
        return round($this->total / $this->limit);
    }

}


/*
В РОУТЕ

'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',


ЗАТЕМ В КОНТРОЛЕРЕ

		$total = Product::getTotalProductsInCategory($categoryId);

		$pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

В Модели Продукта

public static function getTotalProductsInCategory($categoryId)
	{

		$con = mysqli_connect("localhost", "root", "1g0VZMoIl3iLkxms", "super_mag");
		mysqli_set_charset($con, "utf8");

			//Чек коннекта

		if(mysqli_connect_error()){
			echo "Faild to connect" . mysqli_connect_error();
		}

		$result = "SELECT count(id) AS count FROM product WHERE status = 1 AND category_id =  " . $categoryId;	

		$info = mysqli_query($con, $result);
		$rows = mysqli_fetch_array($info);

		return $rows['count'];



		///----
	}


В модели продукт
Вывод максимального числа записией и проверка сдвига 
Функиця offset  в mysql реализует сдвиг на указанное число

	$page = intval($page);
	$offset = ($page - 1) * self::SHOW_BY_DEFAULT;



// ---- Конец -----------------




*/

?>