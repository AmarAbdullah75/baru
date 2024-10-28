<?php 
class KaryawanM extends CI_Model{
    private $karyawan = 'karyawan'; 
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insert_karyawan($data){
        return $this->db->insert("karyawan",$data);
    }

    public function update_karyawan($data){
        $this->db->where('id',$data["id"]);
        return $this->db->update("karyawan",$data);
    }

    public function get_all_karyawan(){
        return $this->db->get("karyawan")->result();
    }

    public function delete_karyawan($id, $table){
        $this->db->where($id);
        $this->db->delete($table);
    }
}
?>