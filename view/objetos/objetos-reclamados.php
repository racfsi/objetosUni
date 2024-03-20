<?php
?>
<div class="col-md-12 text-center bm-4">
    <h3 class="text-center">Objetos reclamados</h3>
</div>
<div class="col-md-12 mt-4">
    <table class="table table-bordered table-hover" id="tabla">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Estado</th>
                <th class="text-center">Imagen</th>
                <th class="text-center">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($objetos as $key => $v) {
            ?>
                <tr>
                    <td class="text-center align-middle"><?= $v['id']; ?></td>
                    <td class="text-center align-middle"><?= $v['nombre']; ?></td>
                    <td class="text-center align-middle">Reclamado</td>
                    <td class="text-center align-middle"><img src="images/<?= $v['url_img'] ?> " alt="<?= $v['nombre']; ?>" width="140px"></td>
                    <td class="text-center align-middle">
                        <a class="btn btn-link" style="padding: 0px;" href="?c=objetos&a=new&id=<?= $v['id']; ?>&status=0">Ver más</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>