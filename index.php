<?php include_once("<?=base_url?>/views/layout/header.php") ?>
<?php include_once("<?=base_url?>/views/layout/menu.php") ?>
<?php include_once("<?=base_url?>/views/layout/aside.php") ?>
<?php include_once("<?=base_url?>/views/layout/usuario/loginRegistro.php") ?> 


<div class="container">
    <h1>entrree</h1>
    <?php include_once("./config/parameters.php") ?>
    <?php include_once("./controllers/autoload.php")?>
    
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

<?php include_once("/views/layout/footer.php") ?>
</div>
