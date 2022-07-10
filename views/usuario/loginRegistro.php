   <!-- inicio de secion o login  -->
   <div class="loginRegistro">
        <form class="login" action="/PROYECTOSENA/backend/login.php" method="post">
            <h3>Iniciar Seccion</h3> 
            <label class="labelLogin" for="correo">Correo</label>
            <input  class="inputLogin" type="email" name="correo">
            <label class="labelLogin" for="pasword">Contraseña</label>
            <input class="inputLogin" type="password" name="password">
            <div class="enviarSesion">
                <input type="submit" value="Iniciar Secion">
            </div>
        </form>
        <form  class="registro"action="/blog_programadores/ControllerUsuario/validarRegistro" method="post">
        <h3>Registro</h3>
        <label class="labelRegistro" for="nombre">nombre</label>
        <input  class="inputRegistro" type="text" name="nombre">
        
        <label class="labelRegistro" for="apellido">apellido</label>
        <input class="inputRegistro" type="text" name="apellido">

        <label class="labelRegistro" for="Correo">correo</label>
        <input class="inputRegistro" type="email" name="correo">

        <label class="labelRegistro" for="pasword">Contraseña</label>
        <input class="inputRegistro" type="password" name="password">
        <div class="enviarRegistro">
            <input  type="submit" value="Registrar">
        </div>
    </form>
    </div> 
    <script src="/blog_programadores/assets/js/loginRegistro.js"></script>