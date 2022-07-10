<?php include_once("/wamp64/www/blog_programadores/views/layout/menu.php") ?>
<?php include_once("/wamp64/www/blog_programadores/views/layout/header.php") ?>
<?php include_once("/wamp64/www/blog_programadores/views/usuario/loginRegistro.php") ?> 
<?php include_once("/wamp64/www/blog_programadores/views/layout/aside.php") ?>


<div class="container">
    <?php include_once("/wamp64/www/blog_programadores/config/parameters.php") ?>
    <?php include_once("/wamp64/www/blog_programadores/controllers/autoload.php")?>
    
    <?php 
        
// secompruebano existe un controlador y si no hay le asinamos uno por defectpo
    if(!isset($_GET["controller"]) ) {
        $nombreController=controller_defaul;
        $controller=new $nombreController();
    //    si si hay controlador por la url  guardamos el controlador que busca
    }elseif(isset($_GET["controller"] )&& class_exists($_GET["controller"])){
        $nombreController=$_GET["controller"];
        $controller=new $nombreController();
    
    }else{
        echo "error la pagina que busca no se encuentra disponible";
    }

    // secompruebano existe una action  y si no hay le asinamos uno por defectpo
    if(!isset($_GET["action"]) ){
        $nombreAction=action_defaul;
        $controller->$nombreAction();
        //    si si hay action por la url  guardamos la action que busca
    }elseif (isset($_GET["action"]) && method_exists($controller,$_GET["action"])){
        $nombreAction=$_GET["action"];
        $controller->$nombreAction();

    } else{
        echo "error la pagina que busca no se encuentra disponible";
    }


    ?>

<?php include_once("/wamp64/www/blog_programadores/views/layout/footer.php") ?>
</div>