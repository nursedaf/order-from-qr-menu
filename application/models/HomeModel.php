<?php
class HomeModel extends CI_Model //Home için model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function urun($table)  //menu
    {
        return $this->db->get($table)->result();
    }

    public function masa($table, $where = array(), $sql = "") //menüdeki ve sepetteki ürünler
    {
        if($sql != "") $this->db->where($sql);
        else $this->db->where($where);
        return $this->db->get($table)->result();
    }

    public function masaId($table, $where = array(), $sql = "") //masa urlden session 
    {
        if($sql != "") $this->db->where($sql);
        else $this->db->where($where);
        return $this->db->get($table)->row();
    }

    public function masaackapa($where,$data=array(),$table) //masa giriş =>2
    {
        return $this->db->where('id',$where)->update($table, $data);
    }

    public function sepeteekle($table, $data = array())  //sepet ekleme
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function getGeneral($table, $where = array()) //tek kontrol
    {
        $this->db->where($where);
        return $this->db->get($table)->row();
    }
    public function getAllGeneral($table, $where = array()) //hepsi
    {
        $this->db->where($where);
        return $this->db->get($table)->result();
    }
    
    public function update($where = array(), $data = array(), $table) //adet
    {
        return $this->db->where($where)->update($table, $data);
    }

    public function tamam($where, $data = array(), $table) //sepeti tamamla
    {
        return $this->db->where('masano',$where)->update($table, $data);
    }

    public function siparisekle($table, $data = array())  //siparis ekleme
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

 
}
