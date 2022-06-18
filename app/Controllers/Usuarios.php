<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;
use App\Models\Rol;

class Usuarios extends Controller
{

    public function ListarTodoCombos() {
		$rol = new Rol();
        $listaroles['roles'] = $rol->orderBy('NombreRol')->findAll();
	}

    public function index()
    {
        $usuario= new Usuario();
        $datos['usuarios']= $usuario->orderBy('IdUsuario','ASC')->paginate(10);
        
        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('usuario/listar', $datos);
    }

   

    public function crear()
    {
        $model = model('roles');
        $datos['roles'] = $model->findAll();
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');

        return view('usuario/crear', $datos);
    }

    public function guardar()
    {
     
        $usuario = new Usuario();
        $datos=[

            $NombreUsuario= $this->request->getVar('NombreUsuario'),
            $Usuario= $this->request->getVAr('Usuario'),
            $DuiUsuario= $this->request->getVAr('DuiUsuario'),
            $Usuario= $this->request->getVAr('Usuario'),
            $TelUsuario= $this->request->getVAr('TelUsuario'),
            $CorreoUsuario= $this->request->getVAr('CorreoUsuario'),
            $FechaNacimiento= $this->request->getVAr('FechaNacimiento'),
            $PASSWORD= $this->request->getVAr('PASSWORD')

        ];

        $usuario->insert($datos);
       

       return $this->responsive->redirect(site_url('/listar'));
    }
    
    public function borrar($id=null)
    {
        $usuario= new Usuario();
        $datosUsuario=$usuario->where('id',$id)->first();
        \unlink($ruta);

        $usuario->where('IdUsuario',$id)->delete($id);

        return $this->responsive->redirect(site_url('/listar'));
    }

    public function editar($id=null)
    {
        print_r($id);
        $usuario= new Usuario();
        $datos['usuario']=$usuario->where('IdUsuario',$id)->first();

        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('usuarios/editar', $datos);
    }

    public function actualizar()
    {
        $usuario=new Usuario();
        $datos=[
            'NombreUsuario'=>$this->request->getVar('NombreUsuario'),
            'Usuario'=>$this->request->getVar('Usuario'),
            'DuiUsuario'=>$this->request->getVar('Duiusuario'),
            'TelUsuario'=>$this->request->getVar('TelUsuario'),
            'CorreoUsuario'=>$this->request->getVar('CorreoUsuario'),
            'PASSWORD'=>$this->request->getVar('PASSWORD')
        ];
        $id=$this->request->getVar('id');
        $usuario->update($id,$datos);
    }
}