<?php
class Model_Platos extends Orm\Model { 
   protected static $_connection = 'production'; 
   protected static $_table_name = 'platos'; 
   protected static $_primary_key = array('id'); 
   
   protected static $_properties = array ( 
      'id',
      'nombre' => array ( 
         'data_type' => 'varchar', 
         'label' => 'Nombre', 
         'validation' => array ( 
            'required',  
            'min_length' => array(3),  
            'max_length' => array(50) 
         ),   
         'form' => array ( 
            'type' => 'text' 
         ), 
      ),

      'imagen' => array ( 
         'data_type' => 'blob', 
         'label' => 'Imagen', 
         'validation' => array ( 
            'required',
         ), 
         
         'form' => array ( 
            'type' => 'file',
         ), 
      ),  
      'ingredientes' => array ( 
         'data_type' => 'varchar', 
         'label' => 'Ingredientes', 
         'validation' => array ( 
            'required', 
            'min_length' => array(3),  
            'max_length' => array(70) 
         ), 
         'form' => array ( 
            'type' => 'text' 
         ), 
      ),  
      'precio' => array ( 
         'data_type' => 'int', 
         'label' => 'Precio', 
         'validation' => array ( 
            'required', 
         ), 
         'form' => array ( 
            'type' => 'text' 
         ), 
      ),  
   );  
   protected static $_observers = array('Orm\\Observer_Validation' => array ( 
      'events' => array('before_save') 
   )); 
   
}
?>