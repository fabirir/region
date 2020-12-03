<table>
   <thead>
      <tr>
         <th>Nombre</th>
         <th>Imagen</th>
         <th>Direccion</th>
         <th>Entrada</th>
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
      </tr>

   <?php
         }
   ?>
   </tr>
   </tbody>
</table>