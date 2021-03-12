<?php
namespace libs\system;

    class BootStrap
    {
        public function __construct()
        {
            
            if(isset($_GET["url"]))
            {
               $url = explode("/", $_GET["url"]);
               
               $controller_file = "src/controller/".$url[0]."Controller.php"; 
                if(file_exists($controller_file))
                {
                    require_once $controller_file;
                    $file = $url[0]."Controller";
                    $controller_object = new $file();
                    if(isset($url[2]))
                    {
                        $methode = $url[1];
                        if(method_exists($controller_object, $methode))
                        {
                            $controller_object->$methode($url[2]);
                        }else{
                            die ($methode." n'existe pas dans le Controller  ".$file);
                        }
                        
                    }else if(isset($url[1]))
                    {
                        $methode = $url[1];
                        if(method_exists($controller_object, $methode))
                        {
                            $controller_object->$methode();
                        }else{
                            die ($methode." n'existe pas dans le Controller  ".$file);
                        }
                        
                    }
                }else{
                    die($controller_file." n'existe pas ");
                }
            }else{
                echo "MVC";
            }
        }
    }
    
?>