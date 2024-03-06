<?php
?>
<div class="col-md-12 text-center">
    <h3 class="text-center"><?= (isset($_REQUEST['id'])) ? 'Editar' : 'Nuevo'; ?> objeto</h3>
    <div class="mb-4 text-center">
        <a href="?c=objetos">Volver <i class="fas fa-undo"></i></a>
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col-md-6">
        <form method="post" id="frm-newobject">
            <div class="form-group">
                <label>Titulo (Descripción del objeto)</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" required value="<?= (isset($objeto)) ? $objeto[0]['nombre'] : ''; ?>">
            </div>
            <div class="form-group">
                <label>Info (Detalles del lugar que se extravió)</label><br>
                <textarea style="width: 100%;" name="info" id="info" cols="20" rows="5" required><?= (isset($objeto)) ? $objeto[0]['info'] : ''; ?></textarea>
            </div>
            <?php if ((!isset($_REQUEST['id']))) { ?>
                <div class="form-group">
                    <label>Imagen del producto</label>
                    <input type="file" class="form-control-file" id="imageprod" name="imageprod" accept="image/*">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn-custom">Crear</button>
                </div>
            <?php } else { ?>
                <div class="form-group">
                    <label>Imagen del producto</label><br>
                    <img src="images/<?= $objeto[0]['url_img'] ?> " alt="<?= (isset($objeto)) ? $objeto[0]['nombre'] : ''; ?>" width="260px">
                </div>
                <div class="form-group">
                    <label>Fecha creación</label>
                    <p><?= (isset($objeto)) ? $objeto[0]['fecha'] : ''; ?></p>
                </div>
            <?php } ?>
        </form>
    </div>
</div>