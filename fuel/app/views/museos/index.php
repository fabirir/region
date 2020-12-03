
<div class="col-sm-6">
   <a href="/museos/add" class="btn btn-primary btn-nueva"><span>Añadir Museo</span></a>
</div>
<table>
   <thead>
      <tr>
         <th>Nombre</th>
         <th>Imagen</th>
         <th>Direccion</th>
         <th>Entrada</th>
         <th>Acciones</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <?php
         foreach ($museos as $museo) {
         ?>

      <tr>
         <td data-column="Nombre"><?php echo $museo['nombre']; ?></td>
         <td data-column="Imagen"><img width="150px" src="<?php echo $museo['imagen']; ?>"></td>
         <td data-column="Direccion"><?php echo $museo['direccion']; ?></td>
         <td data-column="Entrada"><?php echo $museo['entrada']; ?></td>
         <td data-column="Acciones">
            <a href="/museos/edit/<?php echo $museo['id']; ?>">Edit</a>
            <a href="/museos/delete/<?php echo $museo['id']; ?>">Delete</a>
         </td>
      </tr>

   <?php
         }
   ?>
   </tr>
   </tbody>
</table>