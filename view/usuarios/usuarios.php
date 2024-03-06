<?php
?>
<div class="col-md-12 text-center">
    <h3 class="text-center">Usuarios</h3>
    <!-- <div class="col-md-3 mb-4 btn-new-from">
        <a href="?c=objetos&a=new">Nuevo usuario<i class="fas fa-plus"></i></a>
    </div> -->
</div>
<div class="col-md-12">
    <table class="table table-bordered table-hover" id="tabla">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Correo</th>
                <th class="text-center">Rol</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($usuarios as $key => $v) {
            ?>
                <tr>
                    <td class="text-center align-middle"><?= $v['id']; ?></td>
                    <td class="text-center align-middle"><?= $v['nombre']; ?></td>
                    <td class="text-center align-middle"><?= $v['correo']; ?></td>
                    <td class="text-center align-middle"><?= ($v['rol'] == 1 ? 'Admin' :  'Estudiante'); ?></td>
                    
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>