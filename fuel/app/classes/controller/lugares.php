<?php

use Fuel\Core\Input;

class Controller_Lugares extends Controller_Template { 
      public $template = 'estilos/layout'; 
      public function action_index() { 
         
         // Crear la vista del objeto

         $view = View::forge('lugares/index');  
         
         // buscar el libro de la base de datos y configurarlo en la vista 

         $lugares = Model_Lugares::find('all'); 
         $view->set('lugares', $lugares);  
         
         // establecer las variables de la plantilla

         $this->template->title = "Programa index page"; 
         $this->template->content = $view; 
      } 
      public function action_add() { 
   
         // crear un nuevo conjunto de campos y agregar un modelo de materia
 
         
         $fieldset = Fieldset::forge('lugar')->add_model('Model_Lugares');  
         



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
             $imagen = '/assets/img/'.Upload::get_files()[0]['saved_as'];
          }
      }
         
         $formHtml = $fieldset->build(Uri::create('lugares/add'));  
         $view = View::forge('lugares/add'); 
         $view->set('form', $formHtml, false); 

         if (Input::param() != array()) { 
            try {
               $lugar = Model_Lugares::forge();
               $lugar->nombre = Input::param('nombre'); 
               $lugar->imagen = $imagen;
               $lugar->ubicacion = Input::param('ubicacion'); 
               $lugar->entrada = Input::param('entrada');
               $lugar->save();  
               Response::redirect('lugares'); 
            } catch (Orm\ValidationFailed $e) { 
               $view->set('errors', $e->getMessage(), false); 
            } 
         }  
         $this->template->title = "Agregar mateteria";  
         $this->template->content = $view; } 

         
         
         public function action_edit($id = false) { 
            if(!($lugar = Model_Lugares::find($id))) { 
               throw new HttpNotFoundException(); 
            }  
            
            // crear un nuevo conjunto de campos y agregar un modelo de materia

            $fieldset = Fieldset::forge('lugar')->add_model('Model_Lugares'); 
            $fieldset->populate($lugar);  
            
            // obtener formulario de fieldset

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
             $imagen = '/assets/img/'.Upload::get_files()[0]['saved_as'];
          }
      }

            $form = $fieldset->form();  
            
            // agregar el botón de envío al formulario

            $form->add('Submit', '', array('type' => 'submit', 'value' => 'Enviar'));  
            
            // construir el formulario y establecer la página actual como acción  
            
            $formHtml = $fieldset->build(Uri::create('lugares/edit/' . $id));  
            $view = View::forge('lugares/edit'); 
            $view->set('form', $formHtml, false);  
            
            if (Input::param() != array()) { 
               try { 
               $lugar->nombre = Input::param('nombre'); 
               $lugar->imagen = $imagen;
               $lugar->ubicacion = Input::param('ubicacion'); 
               $lugar->entrada = Input::param('entrada');
               $lugar->save();  
               Response::redirect('lugares'); 
               } catch (Orm\ValidationFailed $e) { 
                  $view->set('errors', $e->getMessage(), false); 
               } 
            }  
            $this->template->title = "Editar materia"; 
            $this->template->content = $view; 
         }

         public function action_delete($id = null) { 
            if ( ! ($lugar = Model_Lugares::find($id))) { 
               throw new HttpNotFoundException(); 
         
            } else { 
               $lugar->delete(); 
            } 
            Response::redirect('lugares'); 
         } 
   }
