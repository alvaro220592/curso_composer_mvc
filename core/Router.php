<?php 
namespace core;

class Router{

    private $controller = 'Site',
            $method = 'home',
            $param = [];

    public function __construct()
    {
        $router = $this->url();
        echo "<pre>";
        print_r($router);
    }

    private function url(){
        // dividindo a url(INPUT_GET é pra indicar q ela vai vir por GET):
        $url = filter_input(INPUT_GET, 'router', FILTER_SANITIZE_URL); // router é a variável declarada no .htaccess
        $parse_url = explode('/', $url);
        
        return $parse_url;
    }
}
