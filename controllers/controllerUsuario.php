<?php 
 include_once("/wamp64/www/blog_programadores/models/modelsUsuario.php");
 

class ControllerUsuario{

    public function validarRegistro(){
        if(isset($_POST)){
            var_dump($_POST);
        }
    }

    public function validarlogin(){
        if(isset($_POST)){
            var_dump($_POST);
        }
    }
    
    

}
// $usuariosmodelo=new ControllerUsuario;
// $ver=$usuariosmodelo->usuarios();
// var_dump($ver) ;





?>