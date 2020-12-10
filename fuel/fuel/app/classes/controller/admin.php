<?php

use Fuel\Core\Input;

class Controller_Admin extends Controller_Template { 
      public $template = 'admin/layout'; 
      public function action_index() { 
         
        // Crear la vista del objeto

        return $view = View::forge('admin/index');  
        
        // buscar el libro de la base de datos y configurarlo en la vista  
       

        
     } 
      public function action_platos() { 
         
         // Crear la vista del objeto

         $view = View::forge('admin/platos');  
         
         // buscar el libro de la base de datos y configurarlo en la vista 

         $platos = Model_Materia::find('all'); 
         $view->set('platos', $platos);  
        

         $this->template->title = "Programa index page"; 
         $this->template->content = $view; 
      } 

      public function action_lugares() { 
         
        // Crear la vista del objeto

        $view = View::forge('admin/lugares');  
        
        // buscar el libro de la base de datos y configurarlo en la vista 

        $lugares = Model_Lugares::find('all'); 
        $view->set('lugares', $lugares);  
       

        $this->template->title = "Programa index page"; 
        $this->template->content = $view; 
     } 

     public function action_museos() { 
         
        // Crear la vista del objeto

        $view = View::forge('admin/museos');  
        
        // buscar el libro de la base de datos y configurarlo en la vista 

        $museos = Model_Materia::find('all'); 
        $view->set('museos', $museos);  
       

        $this->template->title = "Programa index page"; 
        $this->template->content = $view; 
     } 
      
   }