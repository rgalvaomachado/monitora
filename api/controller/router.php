<?php
    include 'controller/backup.php';
    class Router {

        private $data = [];
        private $method;
        private $path;
        private $token;

        function __construct(){
            $this->method();
            $this->path();
            $this->data();
            $this->token();
        }

        function method(){
            $this->method = $_SERVER["REQUEST_METHOD"];     //GET, POST, PUT, DELETE.
        }

        function path(){
            $uri = $_SERVER["REQUEST_URI"];
            $parametros = explode('/',$uri);
            unset($parametros[0]);
            if ($parametros[1] == 'dashbackup'){
                unset($parametros[1]);
                unset($parametros[2]);
                if (isset($parametros[4])){
                    $this->data['id'] = $parametros[4];
                    $parametros[4] = '*';
                }
            } else {
                unset($parametros[1]);
                if (isset($parametros[3])){
                    $this->data['id'] = $parametros[3];
                    $parametros[3] = '*';
                }
            }
            $path = implode('/',$parametros);

            $this->path = '/'.$path;
        }

        function data(){
            $contents = file_get_contents('php://input');
            if (isset($contents)){
                $input = (array) json_decode($contents);
                $data = array_merge($input, $this->data);
                $this->data = $data;
            }
        }

        function run($routes){
            foreach($routes as $route){
                $RouteMethod = $route[0];
                $RoutePath = $route[1];
                $RouteClass = $route[2];
                $RouteFunction = $route[3];
                if ($RouteMethod == $this->method && $RoutePath == $this->path){
                    $Class = new $RouteClass();
                    if (method_exists($Class,$RouteFunction)){
                        return $Class->$RouteFunction($this->data, $this->token);
                    } else {
                        http_response_code(405);
                    }
                } else {
                    http_response_code(405);
                }
            }
        }

        function token(){
            $header = getallheaders();
            $this->token = isset($header['token']) ? $header['token'] : null;
        }
    }