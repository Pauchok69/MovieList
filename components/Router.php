<?php 

/**
* Реализация Роутера
*/
class Router {
    
	private $routes;

	// Подключение массива с адресами

	public function __construct() {

		$routesPath = ROOT . '/config/routes.php';
		$this->routes = include($routesPath);

	}

	// Получение строки запроса

	private function getURI() {

		if (!empty($_SERVER['REQUEST_URI'])) {
			
                        return trim($_SERVER['REQUEST_URI'], '/');

		}

	}

	/* Запуск Роутинга.
	* 
	*/

	public function start() {

		$uri = $this->getURI();

		foreach ($this->routes as $uriPattern => $path) {

			// Проверка наличия запроса
						
			if (preg_match("~$uriPattern~", $uri)) {

				// Получение внутреннего пути по правилу

				$internalRoute = preg_replace("~$uriPattern~", 
                                        $path, $uri);

				// Определение контроллера и action для данного запроса
				
				$segments = explode('/', $internalRoute);
				$controllerName = array_shift($segments) . 
                                        '_Controller';
								
				$actionName = 'action_' . array_shift($segments);

				$parameters = $segments;

				$controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

				// Проверка и подключение файла контроллера
				
				if (file_exists($controllerFile))  {
					
					include_once($controllerFile);

				}

				// Создание объекта и вызов метода

				$controllerObj = new $controllerName;
                                
				$result = call_user_func_array(
                                        array($controllerObj, $actionName), $parameters);

				if ($result != null) {
					
					break;

				}

			} 		

		}

	}

}

 ?>