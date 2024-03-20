<?php
$c = isset($_REQUEST['c']) ? $_REQUEST['c'] : '';
$a = isset($_REQUEST['a']) ? $_REQUEST['a'] : '';
$rol = $_SESSION['rol'];
?>
<div class="navbarleft">
  <ul>
    <li <?= ($c == 'objetos' && $a == '') ? 'class="active"' : '' ?>>
      <div class="content-menu">
        <a href="?c=objetos">
          <span><i class="fa fa-archive"></i></span>
          Objetos sin reclamar
        </a>
      </div>
    </li>
    <li <?= ($c == 'objetos' && $a == 'ObjetosReclamados') ? 'class="active"' : '' ?>>
      <div class="content-menu">
        <a href="?c=objetos&a=ObjetosReclamados">
          <span><i class="fa fa-archive"></i></span>
          Objetos reclamados
        </a>
      </div>
    </li>
    <?php if ($rol == 1) { ?>
      <li <?= ($c == 'usuarios') ? 'class="active"' : '' ?>>
        <div class="content-menu">
          <a href="?c=usuarios">
            <span><i class="fa fa-user"></i></span>
            Usuarios
          </a>
        </div>
      </li>
    <?php } ?>
  </ul>
</div>