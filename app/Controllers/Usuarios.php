<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;

class Usuarios extends Controller
{

    public function ListarTodoCombos() {
		$usuario = "SELECT * FROM roles
		ORDER BY NombreRol ASC";
		return $this->EjecutarQuery( $usuario );
	}

    public function index()
    {
        $usuario= new Usuario();
        $datos['usuarios']= $usuario->orderBy('IdUsuario','ASC')->paginate(10);

        $paginador=$usuario->pager;
        $datos['paginador']=$paginador;
        $paginador->setPath('ci4/');
        
        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('usuario/listar', $datos);
    }

   

    public function crear()
    {
        
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

        return view('usuario/editar', $datos);
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
