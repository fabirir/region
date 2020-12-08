<?php

use Fuel\Core\Controller_Template;
use Fuel\Core\Input;

class Controller_Usuario extends Controller
{
  
   public function action_index()
   {

      // Crear la vista del objeto


      return  View::forge('usuario/index');

      // buscar el libro de la base de datos y configurarlo en la vista  



      
   }
   public function action_platos()
   {

      // Crear la vista del objeto

      $view = View::forge('usuario/platos');

      // buscar el libro de la base de datos y configurarlo en la vista 

      $platos = Model_Platos::find('all');
      return $view->set('platos', $platos);

      
   }

   public function action_lugares()
   {

      // Crear la vista del objeto

      $view = View::forge('usuario/lugares');

      // buscar el libro de la base de datos y configurarlo en la vista 

      $lugares = Model_Lugares::find('all');
      return $view->set('lugares', $lugares);


      
   }

   public function action_museos()
   {

      // Crear la vista del objeto


      $view = View::forge('usuario/museos');

      // buscar el libro de la base de datos y configurarlo en la vista 

      $museos = Model_Museos::find('all');
      return $view->set('museos', $museos);


      
   }
}
