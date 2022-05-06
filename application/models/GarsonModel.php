<?php
class GarsonModel extends CI_Model //garson için model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function openmasa($table, $where)  //garson sayfasındaki aktif siparişler için açık masalar 
    {
        $this->db->where($where);
        return $this->db->get($table)->result();
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
    public function masaackapa($where, $data = array(), $table) //açık masayı kapat veya açılmayı bekleyen masaları aç
    {
        return $this->db->where('id', $where)->update($table, $data);
    }

    public function insert($data = array(), $table) //yeni ürün ekleme
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function update($where = array(), $data = array(), $table) //adet
    {
        return $this->db->where($where)->update($table, $data);
    }

    public function urun($table)  //menu
    {
        return $this->db->get($table)->result();
    }

    public function siparisekle($table, $data = array())  //siparis ekleme
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
}
