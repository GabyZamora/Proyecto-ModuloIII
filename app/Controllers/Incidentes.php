<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Incidente;
class Incidentes extends Controller{

    public function index(){

        $Incidente = new Incidente();
        $datos['incidentes']=$Incidente->orderBy('IdIncidente', 'ASC')->findAll();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('incidentes/listar',$datos);

    }

    public function crear(){

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('incidentes/crear', $datos);
    }

    public function guardar(){

        $Incidente = new Incidente();

        $datos = [
            'nombreIncidente'=>$this->request->getVar('nombre'),
            'DescripcionIncidente'=>$this->request->getVar('descripcion')
        ];

        $Incidente->insert($datos);

        return $this->response->redirect(site_url('incidentes/listar'));

    }

    public function borrar($id=null){

        $Incidente = new Incidente();
        $datosIncidente=$Incidente->where('IdIncidente',$id)->first();

        $Incidente->where('IdIncidente',$id)->delete($id);

        return $this->response->redirect(site_url('incidentes/listar'));
    }

    public function editar($id=null){
        print_r($id);

        $Incidente= new Incidente();
        $datos['Incidente']=$Incidente->where('IdIncidente',$id)->first();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('incidentes/editar', $datos);
    }

    public function actualizar(){

        $Incidente = new Incidente();
        $datos = [
            'nombreIncidente'=>$this->request->getVar('nombre'),
            'descripcionIncidente'=>$this->request->getVar('descripcion')
        ];
        $id = $this->request->getVar('id');

        $Incidente->update($id,$datos);

        return $this->response->redirect(site_url('incidentes/listar'));
    }
}