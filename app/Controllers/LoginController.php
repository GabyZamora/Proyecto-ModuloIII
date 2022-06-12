<?php 

namespace App\Controllers;  

use CodeIgniter\Controller;

use App\Models\Login;

  

class LoginController extends Controller

{

    public function index()

    {

        helper(['form']);

        echo view('login');

    } 

  

    public function loginAuth()

    {

        $session = session();

        $Login = new Login();

        $Usuario = $this->request->getVar('Usuario');

        $PASSWORD = $this->request->getVar('PASSWORD');

        

        $data = $Login->where('Usuario', $Usuario)->first();

        

        if($data){

            $pass = $data['PASSWORD'];

            $authenticatePASSWORD = PASSWORD_verify($PASSWORD, $pass);

            if($authenticatePASSWORD){

                $ses_data = [

                    'id' => $data['id'],

                    'NombreUsuario' => $data['NombreUsuario'],

                    'Usuario' => $data['Usuario'],

                    'isLoggedIn' => TRUE

                ];


                $session->set($ses_data);

                return redirect()->to('/profile');

            

            }else{

                $session->setFlashdata('msg', 'Contraseña Incorrecta.');

                return redirect()->to('/login');

            }


        }else{

            $session->setFlashdata('msg', 'Usuario Incorrecto.');

            return redirect()->to('/login');

        }

    }

}