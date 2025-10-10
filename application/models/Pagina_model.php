<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina_model extends CI_Model { 
    
    function consultar_aires($idcatseccion){
        $sql = "SELECT contenido FROM [Boxito].dbo.cat_contenido WHERE idcatseccion = 1";
        $query=$this->db->query($sql);
        if($query!=false){
            return $query->result();
        } else{
            return false;
        }
    }

    function consultar_plomeria($idcatseccion){
        $sql = "SELECT contenido FROM [Boxito].dbo.cat_contenido WHERE idcatseccion = 2";
        $query=$this->db->query($sql);
        if($query!=false){
            return $query->result();
        } else{
            return false;
        }
    }

    function consultar_baño($idcatseccion){
        $sql = "SELECT contenido FROM [Boxito].dbo.cat_contenido WHERE idcatseccion = 3";
        $query=$this->db->query($sql);
        if($query!=false){
            return $query->result();
        } else{
            return false;
        }
    }

    function consultar_piso($idcatseccion){
        $sql = "SELECT contenido FROM [Boxito].dbo.cat_contenido WHERE idcatseccion = 4";
        $query=$this->db->query($sql);
        if($query!=false){
            return $query->result();
        } else{
            return false;
        }
    }

    function consultar_cocina($idcatseccion){
        $sql = "SELECT contenido FROM [Boxito].dbo.cat_contenido WHERE idcatseccion = 5";
        $query=$this->db->query($sql);
        if($query!=false){
            return $query->result();
        } else{
            return false;
        }
    }

    function consultar_hogar($idcatseccion){
        $sql = "SELECT contenido FROM [Boxito].dbo.cat_contenido WHERE idcatseccion = 6";
        $query=$this->db->query($sql);
        if($query!=false){
            return $query->result();
        } else{
            return false;
        }
    }

    function consultar_electricidad($idcatseccion){
        $sql = "SELECT contenido FROM [Boxito].dbo.cat_contenido WHERE idcatseccion = 7";
        $query=$this->db->query($sql);
        if($query!=false){
            return $query->result();
        } else{
            return false;
        }
    }

    function consultar_ferreteria($idcatseccion){
        $sql = "SELECT contenido FROM [Boxito].dbo.cat_contenido WHERE idcatseccion = 8";
        $query=$this->db->query($sql);
        if($query!=false){
            return $query->result();
        } else{
            return false;
        }
    }




}