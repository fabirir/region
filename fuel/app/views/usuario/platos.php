
<table>
   <thead>
      <tr>
         <th>Nombre</th>
         <th>Imagen</th>
         <th>Ingredientes</th>
         <th>Precio</th>
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
      </tr>

   <?php
         }
   ?>
   </tr>
   </tbody>
</table>
