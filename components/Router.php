<?php

class Router
{
	private $routes;
	
	public function __construct()
	{
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
	}
	
	//Функція виводить рядок запиту
	private function getURI()
	{
		if(!empty($_SERVER['REQUEST_URI']))
		{
			return trim($_SERVER['REQUEST_URI'], '/');
		}	
	}

	
	public function run()
	{
		//получаємо рядок заапиту
		$uri = $this->getURI();
		
		//перевіряємо наявність такого запиту регулярним виразом
		foreach($this->routes as $uriPattern => $path)
		{
			//перевіряємо uriPattern i uri
			if(preg_match("~$uriPattern~", $uri))
			{
				//Оприділяємо який контролер і action обробляэ запит
				$segments = explode('/', $path);
				$controllerName = array_shift($segments).'Controller';
				$controllerName = ucfirst($controllerName);
				
				$actionName = 'action'.ucfirst(array_shift($segments));
				//Підключаємо файл класу контроллера
				$controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
				
				if(file_exists($controllerFile))
				{
					include_once($controllerFile);
				}
				
				//Створюэмо об"экт класу контролера, викликаэмо метод
				$controllerObject = new $controllerName;
				$result = $controllerObject->$actionName();
				if($result != null)
				{
					break;
				}
				
			}
		}
		
	}
}