<?php
    namespace MF\Init;

    abstract class Bootstrap {
        abstract protected function initRoutes();

        private $routes;
        
      //Cria a rota baseado na que o usuario requisitar e executa o metodo run
        public function __construct() {
            $this->initRoutes();
            $this->run($this->getUrl());
        }

        public function getRoutes() {
            return $this->routes;
        }

        public function setRoutes(array $routes) {
            $this->routes = $routes;
        }
        //Executa a rota q o usuario requisitar ex: localhost/App/about -> Executa a pagina about
        protected function run($url){
                 
            foreach ($this->getRoutes() as $key => $route) {
                
                if($url == $route['route']){
                    $class = "App\\Controllers\\".ucfirst($route['controller']);
                    $controller = new $class;
                    $action = $route['action'];
                    $controller->$action();
                }
            }
        }
    
        protected function getUrl() {
            return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        }
    }
?>