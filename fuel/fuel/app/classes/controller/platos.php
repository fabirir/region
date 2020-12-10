<?php

use Fuel\Core\Input;

class Controller_Platos extends Controller_Template
{
   public $template = 'estilos/layout';
   public function action_index()
   {

      // Crear la vista del objeto

      $view = View::forge('platos/index');

      $platos = Model_Platos::find('all');
      return $view->set('platos', $platos);

      // buscar el libro de la base de datos y configurarlo en la vista 

      // establecer las variables de la plantilla


   }
   public function action_add()
   {

      // crear un nuevo conjunto de campos y agregar un modelo de materia


      $fieldset = Fieldset::forge('plato')->add_model('Model_Platos');

      $form = $fieldset->form();

      $imagen = '';

      if (isset($_FILES['imagen'])) {
         $config = array(
            'path' => DOCROOT . '/assets/img',
            'randomize' => true,
            'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
         );

         //load the config file
         Upload::process($config);

         //if Upload is valid, save it
         if (Upload::is_valid()) {
            Upload::save();

            //extract the filename of the stored image using the array returned by get_files(). Optinally append the fully qualified path to it. Do not do this is your projects
            $imagen = '../../../assets/img/' . Upload::get_files()[0]['saved_as'];
         }
      }

      $form->add('Submit', '', array('type' => 'submit', 'value' => 'Enviar'));


      $formHtml = $fieldset->build(Uri::create('platos/add'));
      $view = View::forge('platos/add');
      $view->set('form', $formHtml, false);

      if (Input::param() != array()) {
         try {
            $plato = Model_Platos::forge();
            $plato->nombre = Input::param('nombre');
            $plato->imagen = $imagen;
            $plato->ingredientes = Input::param('ingredientes');
            $plato->precio = Input::param('precio');
            $plato->save();
            Response::redirect('platos');
         } catch (Orm\ValidationFailed $e) {
            $view->set('errors', $e->getMessage(), false);
         }
      }
      $this->template->title = "Agregar mateteria";
      $this->template->content = $view;
   }



   // editar

   public function action_edit($id = false)
   {
      if (!($plato = Model_Platos::find($id))) {
         throw new HttpNotFoundException();
      }

      // crear un nuevo conjunto de campos y agregar un modelo de materia

      $fieldset = Fieldset::forge('plato')->add_model('Model_Platos');
      $fieldset->populate($plato);

      // obtener formulario de fieldset

      $form = $fieldset->form();
      $imagen = '';

      if (isset($_FILES['imagen'])) {
         $config = array(
            'path' => DOCROOT . '/assets/img',
            'randomize' => true,
            'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
         );

         //load the config file
         Upload::process($config);

         //if Upload is valid, save it
         if (Upload::is_valid()) {
            Upload::save();

            //extract the filename of the stored image using the array returned by get_files(). Optinally append the fully qualified path to it. Do not do this is your projects
            $imagen = '../../../assets/img/' . Upload::get_files()[0]['saved_as'];
         }
      }
      // agregar el botón de envío al formulario
      $form->add('Submit', '', array('type' => 'submit', 'value' => 'Enviar'));

      // construir el formulario y establecer la página actual como acción  

      $formHtml = $fieldset->build(Uri::create('platos/edit/' . $id));
      $view = View::forge('platos/edit');
      $view->set('form', $formHtml, false);

      if (Input::param() != array()) {
         try {
            $plato->nombre = Input::param('nombre');
            $plato->imagen = $imagen;
            $plato->ingredientes = Input::param('ingredientes');
            $plato->precio = Input::param('precio');
            $plato->save();
            Response::redirect('platos');
         } catch (Orm\ValidationFailed $e) {
            $view->set('errors', $e->getMessage(), false);
         }
      }
      $this->template->title = "Editar materia";
      $this->template->content = $view;
   }

   public function action_delete($id = null)
   {
      if (!($plato = Model_Platos::find($id))) {
         throw new HttpNotFoundException();
      } else {
         $plato->delete();
      }
      Response::redirect('platos');
   }
}
