<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Dispositivo;

class Dispositivos extends Controller
{

    public function ListarTodoCombos() {
		$dispositivo = "SELECT * FROM dispositivos
		ORDER BY IdCentro ASC";
		return $this->EjecutarQuery( $dispositivo );
	}

    public function index()
    {
        $dispositivo= new Dispositivo();
        $datos['dispositivos']= $dispositivo->orderBy('IdDispositivo','ASC')->paginate(10);

        $paginador=$dispositivo->pager;
        $datos['paginador']=$paginador;
        $paginador->setPath('ci4/');
        
        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('dispositivos/listar', $datos);
    }

   

    public function crear()
    {
        
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');

        return view('dispositivos/crear', $datos);
    }

    public function guardar()
    {
     
        $dispositivo = new dispositivo();
        $datos=[

            $NombreDispositivo= $this->request->getVar('nombreDispositivo'),
            $MarcaDispositivo= $this->request->getVAr('marcaDispositivo'),
            $ModeloDispositivo = $this->request->getVAr('modeloDispositivo'),
            $IdCentro = $this->request->getVAr('IdCentro')
        ];

        $dispositivo->insert($datos);
       

       return $this->responsive->redirect(site_url('/listar'));
    }
    
    public function borrar($id=null)
    {
        $dispositivo= new dispositivo();
        $datosDispositivo=$dispositivo->where('id',$id)->first();
        \unlink($ruta);

        $dispositivo->where('Iddispositivo',$id)->delete($id);

        return $this->responsive->redirect(site_url('/listar'));
    }

    public function editar($id=null)
    {
        print_r($id);
        $dispositivo= new dispositivo();
        $datos['dispositivo']=$dispositivo->where('IdDispositivo',$id)->first();

        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('dispositivos/editar', $datos);
    }

    public function actualizar()
    {
        $dispositivo=new dispositivo();
        $datos=[
            'NombreDispositivo'=>$this->request->getVar('nombreDispositivo'),
            'MarcaDispositivo'=>$this->request->getVar('marcaDispositivo'),
            'ModeloDispositivo'=>$this->request->getVar('modeloDispositivo'),
            'IdCentro'=>$this->request->getVar('IdCentro')

        ];
        $id=$this->request->getVar('id');
        $dispositivo->update($id,$datos);
    }
}
