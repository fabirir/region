<?php

use Fuel\Core\Input;

class Controller_Museos extends Controller_Template { 
      public $template = 'estilos/layout'; 
      public function action_index() { 
         
         // Crear la vista del objeto

         $view = View::forge('museos/index');  

         $museos = Model_Museos::find('all'); 
         $view->set('museos', $museos);  
         
         // buscar el libro de la base de datos y configurarlo en la vista 

            // establecer las variables de la plantilla

         $this->template->title = "Programa index page"; 
         $this->template->content = $view; 
      } 
      public function action_add() { 
   
         // crear un nuevo conjunto de campos y agregar un modelo de materia
 
         
         $fieldset = Fieldset::forge('museo')->add_model('Model_Museos');  
         



        $imagen = '';

        if(isset($_FILES['image'])){
         $config = array(
            'path' => DOCROOT.'/assets/img',
            'randomize' => true,
            'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
          );
         
          //load the config file
          Upload::process($config);
         
          //if Upload is valid, save it
          if (Upload::is_valid())
          {
              Upload::save();
              
              //extract the filename of the stored image using the array returned by get_files(). Optinally append the fully qualified path to it. Do not do this is your projects
             $imagen = '../../../assets/img/'.Upload::get_files()[0]['saved_as'];
          }
      }
         
         $formHtml = $fieldset->build(Uri::create('museos/add'));  
         $view = View::forge('museos/add'); 
         $view->set('form', $formHtml, false); 

         if (Input::param() != array()) { 
            try {
               $museo = Model_Museos::forge();
               $museo->nombre = Input::param('nombre'); 
               $museo->imagen = $imagen;
               $museo->direccion = Input::param('direccion'); 
               $museo->entrada = Input::param('entrada');
               $museo->save();  
               Response::redirect('museos'); 
            } catch (Orm\ValidationFailed $e) { 
               $view->set('errors', $e->getMessage(), false); 
            } 
         }  
         $this->template->title = "Agregar mateteria";  
         $this->template->content = $view; } 

         
         
         public function action_edit($id = false) { 
            if(!($museo = Model_Museos::find($id))) { 
               throw new HttpNotFoundException(); 
            }  
            
            // crear un nuevo conjunto de campos y agregar un modelo de materia

            $fieldset = Fieldset::forge('museo')->add_model('Model_Museos'); 
            $fieldset->populate($museo);  
            
            // obtener formulario de fieldset

            $form = $fieldset->form();  

            
        $imagen = '';

        if(isset($_FILES['image'])){
         $config = array(
            'path' => DOCROOT.'/assets/img',
            'randomize' => true,
            'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
          );
         
          //load the config file
          Upload::process($config);
         
          //if Upload is valid, save it
          if (Upload::is_valid())
          {
              Upload::save();
              
              //extract the filename of the stored image using the array returned by get_files(). Optinally append the fully qualified path to it. Do not do this is your projects
             $imagen = '../../../assets/img/'.Upload::get_files()[0]['saved_as'];
          }
      }
            
            // agregar el botón de envío al formulario

            $form->add('Submit', '', array('type' => 'submit', 'value' => 'Enviar'));  
            
            // construir el formulario y establecer la página actual como acción  
            
            $formHtml = $fieldset->build(Uri::create('museos/edit' . $id));  
            $view = View::forge('museos/edit'); 
            $view->set('form', $formHtml, false);  
            
            if (Input::param() != array()) { 
               try { 
               $museo->nombre = Input::param('nombre'); 
               $museo->imagen = $imagen;
               $museo->direccion = Input::param('direccion'); 
               $museo->entrada = Input::param('entrada');
               $museo->save();  
               Response::redirect('museos'); 
               } catch (Orm\ValidationFailed $e) { 
                  $view->set('errors', $e->getMessage(), false); 
               } 
            }  
            $this->template->title = "Editar materia"; 
            $this->template->content = $view; 
         }

         public function action_delete($id = null) { 
            if ( ! ($museo = Model_Museos::find($id))) { 
               throw new HttpNotFoundException(); 
         
            } else { 
               $museo->delete(); 
            } 
            Response::redirect('museos'); 
         } 
   }
