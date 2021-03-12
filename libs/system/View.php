<?php
namespace libs\system;

    class View
    {
        public function __construct()
        {
            
        }
        public function load()
        {
            $num = func_num_args(); // Fonction retournant le nmbre d'args
            $args = func_get_args();// recuperer les valeurs des parametres
       // load("index",$data);
         //l'appel de la fonction avec deux parametres => surcharges de methodes
            switch ($num) {
                case 1:
                    $file = "src/view/".$args[0].".php";
                    //echo $file ;
                    //charger un ficher .php dans view
                    if(file_exists($file))
                    {
                        //echo 12;
                        require_once $file;
                    }else{
                        //afficher et arreter completement l'exe du script
                        die($file." n'existe pas dans View");
                    }
                    break;
                case 2:
                    $file = "src/view/".$args[0].".php";
                    //charger un ficher .php dans view
                    if(file_exists($file))
                    {
                        $data = $args[1];
                        require_once $file;
                    }else{
                        //afficher et arreter completement l'exe du script
                        die($file."n'existe pas dans View");
                    }
                     break;
                            
            }
        }
    }
    
?>