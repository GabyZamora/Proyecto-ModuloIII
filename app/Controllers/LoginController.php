<?php 
namespace App\Controllers;
use App\Models\Login;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    private $login = '' ;
    public function __construct(){
      
        $this->login = new Login();       
    }
    
    // show login form
    public function index()    {  

        $session = session();  
        $session->setFlashdata('msg', '');
    return view('login');
    }      

    //check user is exist or not
    public function login(){
          
        $data = array('Usuario'=>$this->request->getVar('Usuario'),'PASSWORD'=>md5($this->request->getVar('PASSWORD')));       
        $user =  $this->login->where($data); 
        $rows = $this->login->countAllResults();
        $session = session();          
        if($rows==1){
            return view('success');
        }else{
            $session->setFlashdata('msg', 'Usuario Incorrecto');
            return view('login');
        } 
     }
}