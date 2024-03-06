<?php
date_default_timezone_set("America/Lima");
require_once 'model/config.php';
session_start();
if (!$_SESSION['iduser']) {
  header("Location: login.php");
  exit();
}
//CALL CONFIG DB
$config = new Config;
//CALL CONTROLLER
$controller = isset($_REQUEST['c']) ? $_REQUEST['c'] : '';
$accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
if ($controller != "ajax" && $controller != '') {
  //CALL HEADER
  require_once 'controller/header.controller.php';
  $header = new HeaderController;
?>
  <section class="sectioninterna">
    <?php
    require_once 'controller/navbar.controller.php';
    $navbar = new NavbarController;
    require_once 'controller/aside.controller.php';
    $aside = new AsideController;
    ?>
    <div class="container-fluid">
      <div class="row divinterna">
        <?php if (!isset($_REQUEST['c'])) {
        ?>
          <div class="col-md-12">
            <div class="formlogin">
              <h5 class="titleController">Hola, <?php echo $_SESSION['nombre']; ?></h5>
            </div>
          </div>
        <?php
        } else {
          require_once 'controller/' . $controller . '.controller.php';
          $controller = ucwords($controller) . 'Controller';
          $controller = new $controller;
          call_user_func(array($controller, $accion));
        } ?>
      </div>
    </div>
  </section>
  <div class="responseAjax" id="responseAjax"></div>
<?php
  require_once 'controller/footer.controller.php';
  $header = new FooterController;
} else if ($controller == 'ajax') {
  require_once 'controller/' . $controller . '.controller.php';
  $controller = ucwords($controller) . 'Controller';
  $controller = new $controller;
  call_user_func(array($controller, $accion));
} else {
  header("Location: index.php?c=objetos");
}
