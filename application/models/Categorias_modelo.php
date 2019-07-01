<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Categorias_modelo extends CI_Model {
	
	public function __construct() {
        parent::__construct();
        $this->load->database();
	}

    //ACABA VAN LAS FUNCIONES
    public function mostrarCategorias(){
        return $this->db->get('categorias')->result();
    }

    public function agregarCategoria($data){
        $laboratorio=array(
            'descripcion'=>$data['descripcion']
        );
        $this->db->insert('categorias',$categoria);
        return $this->db->insert_id();
    }

    public function modificarCategoria($data,$id){
        $perfil=array(
            'descripcion'=>$data['descripcion']
        );
        $this->db->where('id',$id)->update('categorias',$categoria);
        return $this->db->affected_rows();
    }

    public function mostrarCategoria($idCategoria){
        return $this->db->where('id',$idCategoria)->get('categorias')->row();
    }

    public function modificarEstado($id,$num){
        $estado= array('estado'=>$num);
        $this->db->where('id',$id)->update('categorias',$estado);
        return $this->db->affected_rows();
    }
    
}