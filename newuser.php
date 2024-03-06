<?php
require_once 'model/database.php';
require_once 'controller/header.controller.php';
session_start();
$_SESSION['iduser'] = 'temp';
$header = new HeaderController;
?>
<section class="sectionlogin">
    <div class="form-login">
        <form method="post" id="frm-newuser">
            <div class="form-group">
                <label for="nombre_us" class="loginlabel">Nombre</label>
                <input type="text" class="form-control" id="nombre_us" name="nombre_us" placeholder="Ingrese Nombre" required>
            </div>
            <div class="form-group">
                <label for="correo_us" class="loginlabel">Correo</label>
                <input type="text" class="form-control" id="correo_us" name="correo_us" placeholder="Ingrese Correo" required>
            </div>
            <div class="form-group">
                <label for="clave_us" class="loginlabel">Contraseña</label>
                <input type="password" class="form-control" id="clave_us" name="clave_us" placeholder="Ingrese Contraseña" required>
            </div>
            <div class="form-group">
                <label for="clave_us2" class="loginlabel">Repetir contraseña</label>
                <input type="password" class="form-control" id="clave_us2" name="clave_us2" placeholder="Repita Contraseña" required>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn-custom">Crear</button>
                <a href="login.php">Ingresar</a>
            </div>
        </form>
    </div>
</section>
<?php
require_once 'controller/footer.controller.php';
$footer = new FooterController;
?>