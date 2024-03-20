<?php
require_once 'model/database.php';
require_once 'controller/header.controller.php';
$header = new HeaderController;
?>
<section class="sectionlogin">
  <div class="form-login">
    <form action="checklogin.php" method="post" id="frm-guardar">
      <div class="form-group">
        <label for="correo_us" class="loginlabel">Correo</label>
        <input type="text" class="form-control" id="correo_us" name="correo_us" placeholder="Ingrese Correo">
      </div>
      <div class="form-group">
        <label for="clave_us" class="loginlabel">Contraseña</label>
        <input type="password" class="form-control" id="clave_us" name="clave_us" placeholder="Ingrese Contraseña">
      </div>
      <div class="form-group text-center">
        <button type="submit" class="btn-custom">Ingresar</button>
        <a href="newuser.php">Crear usuario</a>
      </div>
    </form>
  </div>
</section>
<?php
require_once 'controller/footer.controller.php';
$footer = new FooterController;
?>