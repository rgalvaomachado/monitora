<?php
    include 'controller/backup.php';

    class Router{
        function checkApi(){
            $uri = $_SERVER["REQUEST_URI"];
            $parametros = explode('/',$uri);
            unset($parametros[0]);
            $parametros = array_values($parametros);
            if ($parametros[0] == 'api'){
                return true;
            }
        }

        function pathApi($data){
            $uri = $_SERVER["REQUEST_URI"];
            $parametros = explode('/',$uri);
            unset($parametros[0]);
            unset($parametros[1]);
            if (isset($parametros[3])){
                $data['id'] = $parametros[3];
                $parametros[3] = '*';
            }
            $path = implode('/',$parametros);
            
            return '/'.$path;
        }

        function runApi($routes){
           $method = $_SERVER["REQUEST_METHOD"];     //GET, POST, PUT, DELETE.

            $contents = file_get_contents('php://input');
            $data = [];
            if (isset($contents)){
                $input = (array) json_decode($contents);
                $data = array_merge($input, $data);
            }

            $header = getallheaders();
            $token = isset($header['token']) ? $header['token'] : null;

            $path = $this->pathApi($data);

            foreach($routes as $route){
                $RouteMethod = $route[0];
                $RoutePath = $route[1];
                $RouteClass = $route[2];
                $RouteFunction = $route[3];
                if ($RouteMethod == $method && $RoutePath == $path){
                    $Class = new $RouteClass();
                    if (method_exists($Class,$RouteFunction)){
                        return $Class->$RouteFunction($data, $token);
                    } else {
                        http_response_code(405);
                    }
                } else {
                    http_response_code(405);
                }
            }
        }

        function pathView($url, $routes){
            $url = explode('?',$url);
            unset($url[1]);
            $url = implode('',$url);

            if(is_file($url)){
                return $url;
            }
    
            $public_url = "public/".$url;

            if(is_file($public_url)){
                return $public_url;
            }
            
            // if (!isset($_SESSION['modo']) || $_SESSION['modo'] == ''){
            //     $url = "login";
            // }

            if ($url == "" && isset($_SESSION['modo']) && $_SESSION['modo'] == 'admin'){
                header('Location: admin/home');
            }

            if ($url == ""){
                $url = "home";
            }

            if ($url == "admin" && isset($_SESSION['modo']) && $_SESSION['modo'] == 'admin'){
                $url = "admin/home";
            } elseif ($url == "" && isset($_SESSION['modo']) && $_SESSION['modo'] == 'usuario' ){
                $url = "home";
            }
    
            include_once('public/head.php');

            foreach($routes as $route){
                $RoutePath = $route[0];
                $RouteView = $route[1];
                if ($url == $RoutePath){
                    return $RouteView;
                }
            }

            return '404.html';
        }

        function runView($routes){
            $uri = $_SERVER["REQUEST_URI"];
            $parametros = explode('/',$uri);
            unset($parametros[0]);
            $parametros = array_values($parametros);
            $url = implode('/',$parametros);

            $path = $this->pathView($url, $routes);
            if(isset($path)){
                $extension = substr($path, -3);
                if ($extension == 'png'){
                    $c = file_get_contents($path,true);
                    $size = filesize($path);
                    header ('Content-Type: image/png');
                    header ("Content-length: $size");
                    echo $c;
                } else if ($extension == 'gif'){
                    $c = file_get_contents($path,true);
                    $size = filesize($path);
                    header ('Content-Type: image/gif');
                    header ("Content-length: $size");
                    echo $c;
                }else{
                    include_once $path;
                }
            }
        }
    }
?>