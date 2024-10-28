<?php 
    defined("BASEPATH") OR exit("No direct script access allowed");

    class KaryawanC extends CI_Controller{

        public function getId() {
            $this->db->select_max('id');
            $query = $this->db->get('karyawan');
            
            $row = $query->row();
        
            return $row->id + 1;
        }
        public function index(){
            $this->load->model("KaryawanM");
            $data["karyawan"] = $this->KaryawanM->get_all_karyawan();
            $this->load->view("ReadKaryawanV", $data);
        }

        public function AddData(){
            $idKaryawan["id"] = $this->getId();
            $this->load->view("CreateKaryawanV",$idKaryawan);
        }

        public function __construct(){
            parent::__construct();
            $this->load->model("KaryawanM");
        }

        public function save(){
            $data = [
                'id' => $this->input->post('id'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' => $this->input->post('alamat'),
                'jabatan' => $this->input->post('jabatan'),
                'tanggal_bergabung' => date('Y-m-d'),
            ];

            $this ->KaryawanM->insert_karyawan($data);
            redirect('KaryawanC');
        }

        public function update(){
            $data = [
                'id' => $this->input->post('id'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' => $this->input->post('alamat'),
                'jabatan' => $this->input->post('jabatan'),
                'tanggal_bergabung' => $this->input->post('tanggal_bergabung'),
            ];

            $this ->KaryawanM->update_karyawan($data);
            redirect('KaryawanC');
        }
        public function delete($id){
            $idKaryawan = array('id' => $id);
            $this->KaryawanM->delete_karyawan($idKaryawan, "karyawan");
            redirect("KaryawanC");
        }
    }
?>