<div class="col-sm-6">
   <a href="/platos/add" class="btn btn-primary btn-nueva"><span>Añadir Plato</span></a>
</div>
<table>
   <thead>
      <tr>
         <th>Nombre</th>
         <th>Imagen</th>
         <th>Ingredientes</th>
         <th>Precio</th>
         <th>Acciones</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <?php
         foreach ($platos as $plato) {
         ?>
      <tr>
         <td data-column="Nombre"><?php echo $plato['nombre']; ?></td>
         <td data-column="Imagen"><img width="150px" src="<?php echo $plato['imagen']; ?>"></td>
         <td data-column="Ingredientes"><?php echo $plato['ingredientes']; ?></td>
         <td data-column="Precio"><?php echo $plato['precio']; ?></td>
         <td data-column="Acciones">
            <a href="/platos/edit/<?php echo $plato['id']; ?>">Edit</a>
            <a href="/platos/delete/<?php echo $plato['id']; ?>">Delete</a>
         </td>
      </tr>

   <?php
         }
   ?>
   </tr>
   </tbody>
</table>
