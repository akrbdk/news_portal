<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.02.2017
 * Time: 15:45
 */

class Router
{
    private $routes;

    public function __construct()
    {
//        Подключаем и присваиваем свойтву класса файл с массивом правил для роутинга

        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

//            Получаем строку запроса

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $uri = $this->getURI();

//        Если имеются совпадения то определяем какой контроллер и экшн обрабатывают запрос

        foreach($this->routes as $uri_pattern => $path){
            if(preg_match("~$uri_pattern~", $uri)){

//                Определяем какой экшн и контроллер должен быть вызван

                $segments = explode('/', $path);

                $controller = array_shift($segments). 'Controller';
                $controller = ucfirst($controller);

                $actionName = 'action' .ucfirst(array_shift($segments));

            }
        }

//        Подключаем файл класса-контроллера



//        Создаем объект, вызываем action
    }
}