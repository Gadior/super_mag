<?php 

class Router
{
	private $routes;

	public function __construct()
	{
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
	}


	// Возвращает строку запроса в URL
	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])){
			$uri = trim($_SERVER['REQUEST_URI'],'/');
			return $uri;
		}
	}


	public function run()
	{
		// Получить строку запроса

		$uri = $this->getURI();


		// Проверить наличие такого запроса в routes.php

		foreach ($this->routes as $uriPattern => $path) {
			if(preg_match("~$uriPattern~", $uri))
			{	

				$internalRoat = preg_replace("~$uriPattern~", $path, $uri);
				// Определяем котролер, экшн, путь
				$segments = explode('/', $internalRoat);
				

				//////////////////////////////
				//////////////////////////////
				// echo "<pre>"; 
				// print_r($segments); 
				//////////////////////////////
				//////////////////////////////
				
				$controllerName = array_shift($segments) . 'Controller';
				$controllerName = ucfirst($controllerName);

				$actionName = 'action' . ucfirst(array_shift($segments));

				$parameters = $segments;

				//////////////////////////////
				//////////////////////////////
				// echo $controllerName; 
				// echo "<br>"; 
				// echo $actionName; 
				//////////////////////////////
				//////////////////////////////


				// Подключить файл класса - контроллера
				// $pathToController = realpath('../controllers/');
				$controllerFile = ROOT . '/controller/' . $controllerName . '.php';


				if(file_exists($controllerFile)){
					include_once($controllerFile);
				}

				// Создать объект, вызвать метод (т.е. action)

				$controllerObject = new $controllerName;
				
				//$result = $controllerObject->$actionName($parameters);
				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);



				if($result != null)
				{
					break;
				}



			}
		}



		

		
	}

}