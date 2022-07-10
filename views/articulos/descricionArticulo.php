
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url?>/assets/css/descicionArticulos.css">
    <title>Document</title>
</head>
<body>
    <div class="descricion">
        <h2>MENUS y SUBMENUS CON CSS Y HTML</h2>
        <p>Una de las cosas importantes que lleva una página web, son los menús y los submenus, hay varias formas de darle estilo a estos menús. Sin embargo, hoy veremos como poder hacer estos menús y submenus con css y html.</p>
        <P>Esta publicación va dirigida a personas con conocimientos básicos de html y css, ya que deben de enteder la función de cada etiqueta y la función de cada estilo que se le da.</P>
        <h3 >1.Debemos crear los archivos necesarios donde íran los estilos y la estructura del menú. En este caso, seran sencillos crearemos un index.html y un index.css.</h3>
        <img src="<?=base_url?>/img/publicacion/1_5bBFfscrI1fViGAfIjnYww.jpeg"/>
        <h3>2. Importaremos los estilos del archivo index.css en html para poder ver los estilos que aplicamos en la estrutura.</h3>
        <img src="<?=base_url?>/img/publicacion/2">
        <h3>3. Crearemos primero los menús principales y depués los submenus para un mejor entendimiento. En este caso, seran 4 elementos del menú principal.</h3>
        <p>comenzamos creando una etiqueta nav/nav que sera donde ira la barra de navegación, dentro del nav creamos una etiqueta ul/ul para decirle que los elementos íran en lista; y por último creamos los li, que seria los elementos de de la barra de navegación; Adicional esos elementos se ponen dentro de una etiqueta a/a, por que esos menús principales se deben dirigir a alguna página.</p>

        <img src="<?=base_url?>/img/publicacion/3">
        <img src="<?=base_url?>/img/publicacion/4">
        <h3>4.Ahora daremos estilos a los elementos del menú principal y los acomodaremos con css para que se vea de una forma mas adecuada.</h3>
        <img src="<?=base_url?>/img/publicacion/5">
        <img src="<?=base_url?>/img/publicacion/6">
        <h3>5. despues de tener los elementos del menú principal creados y ya con estilos, podemos proceder a crear los submenus que queremos. En este caso le crearemos a categorías y a contacto.</h3>
        <p>lo que se hace, es dentro de los< li>/li principales crear otra lista con los elementos de los submenus</p>
        <img src="<?=base_url?>/img/publicacion/7">
        <p>cómo podemos ver los sub menús se agregan debajo de los menús principales, pero queremos que esos submenus esten de forma vertical y estan de forma horizontal</p>
        <img src="<?=base_url?>/img/publicacion/8">
        <h3>6. Ahora acomodaremos los submenus para que se vean de una mejor forma y esten posicionados verticalmente.</h3>
        <img src="<?=base_url?>/img/publicacion/9">
        <img src="<?=base_url?>/img/publicacion/10">
        <h3>7.Ahora lo que aremos, es esconder el submenu para que no se vea y que aremos es cambiarle a la clase (.submenu) el display= flex a display =none, para que no aparezcan los sub menus.</h3>
        <img src="<?=base_url?>/img/publicacion/11">
        <p>Ahora podemos ver que los submenus no se ven por que cambiamos el display =flex a display=none</p>
        <img src="<?=base_url?>/img/publicacion/12">
        <h3>8.Ahora lo que aremos, es hacer que el sub menu aparezca solo cuando hagamos hover en el menú principal. En este caso, el menú categoria y contacto.</h3>
        <img src="<?=base_url?>/img/publicacion/13">
        <p>finalmente logramos hacer un menú con submenus y que aparezcan los submenus, solo cuando hagamos hover. Espero el artículo le sea de ayuda a muchos.</p>
        <img src="<?=base_url?>/img/publicacion/14">
</body>
</html>
