<?php

use Fuel\Core\Input;

class Controller_Usuario extends Controller_Template { 
      public $template = 'usuario/layout'; 
      public function action_index() { 
         
        // Crear la vista del objeto

        $view = View::forge('usuario/index');  
        
        // buscar el libro de la base de datos y configurarlo en la vista  
       

        $this->template->title = "Programa index page"; 
        $this->template->content = $view; 
     } 
      public function action_platos() { 
         
         // Crear la vista del objeto

         $view = View::forge('usuario/platos');  
         
         // buscar el libro de la base de datos y configurarlo en la vista 

         $platos = Model_Platos::find('all'); 
         $view->set('platos', $platos);  
        

         $this->template->title = "Programa index page"; 
         $this->template->content = $view; 
      } 

      public function action_lugares() { 
         
        // Crear la vista del objeto

        $view = View::forge('usuario/lugares');  
        
        // buscar el libro de la base de datos y configurarlo en la vista 

        $lugares = Model_Lugares::find('all'); 
        $view->set('lugares', $lugares);  
       

        $this->template->title = "Programa index page"; 
        $this->template->content = $view; 
     } 

     public function action_museos() { 
         
        // Crear la vista del objeto

        $view = View::forge('usuario/museos');  
        
        // buscar el libro de la base de datos y configurarlo en la vista 

        $museos = Model_Museos::find('all'); 
        $view->set('museos', $museos);  
       

        $this->template->title = "Programa index page"; 
        $this->template->content = $view; 
     } 
      
   }