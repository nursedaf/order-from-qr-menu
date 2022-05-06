<?php
class Model extends CI_Model    //admin için model
{
    public function __construct(){
        parent::__construct();
    }

    public function login($where) //loginde tüm kullanıcılar kontrol
    {
        return $this->db->where($where)->get("users")->row(); 
    }

    public function garsonlar($table,$where) //garson listesi
    {
        $this->db->where($where);
        return $this->db->get($table)->result();
    }
    public function insert($data = array(), $table) //yeni kullanıcı ekleme
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function update($where, $data = array(), $table) //kullanıcı bilgisi güncelleme
    {
        return $this->db->where('id',$where)->update($table, $data);
    }
}
