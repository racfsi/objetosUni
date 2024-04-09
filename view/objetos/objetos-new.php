<?php
$status = isset($_REQUEST['status']) ? $_REQUEST['status'] : '1';
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '0';
$a = isset($_REQUEST['a']) ? $_REQUEST['a'] : '0';
$rol = $_SESSION['rol'];
?>
<div class="col-md-12 text-center">
    <?php if ($status != 0 && $rol == 1) { ?>
        <h3 class="text-center"><?= (isset($_REQUEST['id'])) ? 'Editar' : 'Nuevo'; ?> objeto</h3>
    <?php } ?>
    <div class="mb-4 text-center">
        <a href="?c=objetos<?= ($status == 0 ? '&a=ObjetosReclamados' : '') ?>">Volver <i class="fas fa-undo"></i></a>
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col-md-6">
        <?php if ($status == 0  || $rol != 1 && $id) { ?>
            <div class="title-inactive">
                <h3><?= $objeto[0]['nombre']; ?></h3>
            </div>
            <div class="info-inactive">
                <label class="label-inactive">Información (Detalles del lugar que se extravió)</label><br>
                <p><?= $objeto[0]['info']; ?></p>
            </div>
            <div class="form-group">
                <label class="label-inactive">Imagen del producto</label><br>
                <img src="images/<?= $objeto[0]['url_img'] ?> " alt="<?= (isset($objeto)) ? $objeto[0]['nombre'] : ''; ?>" width="260px">
            </div>
            <div class="form-group">
                <label class="label-inactive">Fecha creación</label>
                <p><?= (isset($objeto)) ? $objeto[0]['fecha'] : ''; ?></p>
            </div>
            <div class="info-inactive">
                <p><?= ($objeto[0]['estado'] == 0 ? '<span style="color: green">Reclamado</span>' : '<span style="color: red">Sin reclamar</span>' ); ?></p>
            </div>
        <?php } else { ?>
            <form method="post" id="frm-newobject">
                <div class="form-group">
                    <label class="label-inactive">Titulo (Descripción del objeto)</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" required value="<?= (isset($objeto)) ? $objeto[0]['nombre'] : ''; ?>">
                </div>
                <div class="form-group">
                    <label class="label-inactive">Información (Detalles del lugar que se extravió)</label><br>
                    <textarea style="width: 100%;" name="info" id="info" cols="20" rows="5" required><?= (isset($objeto)) ? $objeto[0]['info'] : ''; ?></textarea>
                </div>
                <div class="form-group">
                    <label class="label-inactive">Imagen del producto</label><br>
                    <input type="file" class="form-control-file" id="imageprod" name="imageprod" accept="image/*">
                </div>
                <div class="form-group">
                    <img src="images/<?= $objeto[0]['url_img'] ?>" alt="<?= (isset($objeto)) ? $objeto[0]['nombre'] : ''; ?>" width="260px">
                </div>
                <?php if ($rol == 1) { ?>
                    <div class="form-group">
                        <select name="estado" id="estado">
                            <option value="0">Reclamado</option>
                            <option value="1">Sin Reclamar</option>
                        </select>
                    </div>
                <?php } ?>
                <div class="form-group text-center">
                    <input type="hidden" name="action" value="<?= ($id == 0 ? 'new' : 'update') ?>">
                    <input type="hidden" name="idobj" value="<?= $id ?>">
                    <input type="hidden" name="urlImg" value="<?= $objeto[0]['url_img'] ?>">
                    <button type="submit" class="btn-custom"><?= ($id == 0 ? 'Crear' : 'Actualizar') ?></button>
                </div>
            </form>
        <?php } ?>
    </div>
</div>