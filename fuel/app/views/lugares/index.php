
<div >
   <a href="/lugares/add" class="btn btn-primary btn-nueva"><span>Añadir Lugar</span></a>
</div>
   <table>
      <thead>
         <tr>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Ubicacion</th>
            <th>Entrada</th>
            <th>Acciones</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <?php
            foreach ($lugares as $lugar) {
            ?>
   
         <tr>
            <td data-column="Nombre"><?php echo $lugar['nombre']; ?></td>
            <td data-column="Imagen"><img width="150px"  src="<?php echo $lugar['imagen']; ?>"></td>
            <td data-column="Ubicacion"><?php echo $lugar['ubicacion']; ?></td>
            <td data-column="Entrada"><?php echo $lugar['entrada']; ?></td>
            <td data-column="Acciones" >
               <a href="/lugares/edit/<?php echo $lugar['id']; ?>">Edit</a>
               <a href="/lugares/delete/<?php echo $lugar['id']; ?>">Delete</a>
            </td>
         </tr>
   
      <?php
            }
      ?>
      </tr>
      </tbody>
   </table>
