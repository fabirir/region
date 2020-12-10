<?php

use Fuel\Core\Controller_Template;
use Fuel\Core\Input;

class Controller_Usuario extends Controller
{

   public function action_index()
   {
      $data = array();

      // If so, you pressed the submit button. Let's go over the steps.
      if (Input::post('enviar')) {
         // Check the credentials. This assumes that you have the previous table created and
         // you have used the table definition and configuration as mentioned above.
         echo Input::post('password');

         if (Auth::login(Input::post('username'), Input::post('password'))) {
            // Credentials ok, go right in.
            Response::redirect('admin/index');
         } else {
            // Oops, no soup for you. Try to login again. Set some values to
            // repopulate the username field and give some error text back to the view.
            $data['username']    = Input::post('username');
            $data['login_error'] = 'Wrong username/password combo. Try again';
         }
      }

      // Crear la vista del objeto


      return  View::forge('usuario/index');

      // buscar el libro de la base de datos y configurarlo en la vista  




   }
   public function action_platos()
   {

      $data = array();

      // If so, you pressed the submit button. Let's go over the steps.
      if (Input::post('enviar')) {
         // Check the credentials. This assumes that you have the previous table created and
         // you have used the table definition and configuration as mentioned above.
         echo Input::post('password');

         if (Auth::login(Input::post('username'), Input::post('password'))) {
            // Credentials ok, go right in.
            Response::redirect('admin/index');
         } else {
            // Oops, no soup for you. Try to login again. Set some values to
            // repopulate the username field and give some error text back to the view.
            $data['username']    = Input::post('username');
            $data['login_error'] = 'Wrong username/password combo. Try again';
         }
      }
      // Crear la vista del objeto

      $view = View::forge('usuario/platos');

      // buscar el libro de la base de datos y configurarlo en la vista 

      $platos = Model_Platos::find('all');
      return $view->set('platos', $platos);
   }

   public function action_lugares()
   {

      $data = array();

      // If so, you pressed the submit button. Let's go over the steps.
      if (Input::post('enviar')) {
         // Check the credentials. This assumes that you have the previous table created and
         // you have used the table definition and configuration as mentioned above.
         echo Input::post('password');

         if (Auth::login(Input::post('username'), Input::post('password'))) {
            // Credentials ok, go right in.
            Response::redirect('admin/index');
         } else {
            // Oops, no soup for you. Try to login again. Set some values to
            // repopulate the username field and give some error text back to the view.
            $data['username']    = Input::post('username');
            $data['login_error'] = 'Wrong username/password combo. Try again';
         }
      }
      // Crear la vista del objeto

      $view = View::forge('usuario/lugares');

      // buscar el libro de la base de datos y configurarlo en la vista 

      $lugares = Model_Lugares::find('all');
      return $view->set('lugares', $lugares);
   }

   public function action_museos()
   {

      $data = array();

      // If so, you pressed the submit button. Let's go over the steps.
      if (Input::post('enviar')) {
         // Check the credentials. This assumes that you have the previous table created and
         // you have used the table definition and configuration as mentioned above.
         echo Input::post('password');

         if (Auth::login(Input::post('username'), Input::post('password'))) {
            // Credentials ok, go right in.
            Response::redirect('admin/index');
         } else {
            // Oops, no soup for you. Try to login again. Set some values to
            // repopulate the username field and give some error text back to the view.
            $data['username']    = Input::post('username');
            $data['login_error'] = 'Wrong username/password combo. Try again';
         }
      }
      // Crear la vista del objeto


      $view = View::forge('usuario/museos');

      // buscar el libro de la base de datos y configurarlo en la vista 

      $museos = Model_Museos::find('all');
      return $view->set('museos', $museos);
   }
   public function action_contacto()
   {

      $data = array();

      // If so, you pressed the submit button. Let's go over the steps.
      if (Input::post('enviar')) {
         // Check the credentials. This assumes that you have the previous table created and
         // you have used the table definition and configuration as mentioned above.
         echo Input::post('password');

         if (Auth::login(Input::post('username'), Input::post('password'))) {
            // Credentials ok, go right in.
            Response::redirect('admin/index');
         } else {
            // Oops, no soup for you. Try to login again. Set some values to
            // repopulate the username field and give some error text back to the view.
            $data['username']    = Input::post('username');
            $data['login_error'] = 'Wrong username/password combo. Try again';
         }
      }
      $view = View::forge('usuario/contacto');

      // buscar el libro de la base de datos y configurarlo en la vista 


      return $view->set('Contacto', null);
   }
   public function action_sesion()
   {

      /*
            \Auth::create_user(
                    'admin',
                    '123',
                    'safsf@gmail.com',
                    \Config::get('application.user.default_group', 1),
                    array(
                        
                    )
                );
            */
           
     
      return $view = View::forge('usuario/sesion');

      $data = array();

    // If so, you pressed the submit button. Let's go over the steps.
    if (Input::post('enviar'))
    {
        // Check the credentials. This assumes that you have the previous table created and
        // you have used the table definition and configuration as mentioned above.
        echo Input::post('password');
        
        if (Auth::login(Input::post('username'),Input::post('password')))
        {
            // Credentials ok, go right in.
            Response::redirect('admin/index');
        }
        else
        {
            // Oops, no soup for you. Try to login again. Set some values to
            // repopulate the username field and give some error text back to the view.
            $data['username']    = Input::post('username');
            $data['login_error'] = 'Wrong username/password combo. Try again';
        }
    }

    // Show the login form.
    echo View::forge('usuario/sesion',$data);
		//return Response::forge(View::forge('sesion/index'));
}

public function action_valor()
{
   $data = array();

   // If so, you pressed the submit button. Let's go over the steps.
   if (Input::post('enviar')) {
      // Check the credentials. This assumes that you have the previous table created and
      // you have used the table definition and configuration as mentioned above.
      echo Input::post('password');

      if (Auth::login(Input::post('username'), Input::post('password'))) {
         // Credentials ok, go right in.
         Response::redirect('admin/index');
      } else {
         // Oops, no soup for you. Try to login again. Set some values to
         // repopulate the username field and give some error text back to the view.
         $data['username']    = Input::post('username');
         $data['login_error'] = 'Wrong username/password combo. Try again';
      }
   }

   // Crear la vista del objeto


   return  View::forge('usuario/valor');

   // buscar el libro de la base de datos y configurarlo en la vista  




}


      
   
}
