<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Rental_ps extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/rental-playstation/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    // menampilkan data rental
    function index(){
        $data['datarental_ps'] = json_decode($this->curl->simple_get($this->API.'/console'));
        
        $data['datarental_ps'] = $data['datarental_ps']->data ;
        $this->load->view('rental_ps',$data);
        
    }
    
    
    // tambah data 
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'ID_console'       =>  $this->input->post('ID_console'),
                'Nama'      =>  $this->input->post('Nama'),
                'Pembuat'      =>  $this->input->post('Pembuat'),
                'Tahun_Produksi'      =>  $this->input->post('Tahun_Produksi'),
                'Harga_Sewa'      =>  $this->input->post('Harga_Sewa'),
                'kapasitas'      =>  $this->input->post('kapasitas'),
                'Gambar'=>  $this->input->post('Gambar'));
            $insert =  $this->curl->simple_post($this->API.'/console', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Data Berhasil Ditambahkan');
            }else
            {
               $this->session->set_flashdata('hasil','Data Gagal Ditambahkan');
            }
            redirect('rental_ps');
        }else{
            $this->load->view('view_tambah');
        }
    }
 

    // edit data 
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'ID_console'       =>  $this->input->post('ID_console'),
                'Nama'      =>  $this->input->post('Nama'),
                'Pembuat'      =>  $this->input->post('Pembuat'),
                'Tahun_Produksi'      =>  $this->input->post('Tahun_Produksi'),
                'Harga_Sewa'      =>  $this->input->post('Harga_Sewa'),
                'kapasitas'      =>  $this->input->post('kapasitas'),
                'Gambar'=>  $this->input->post('Gambar'));
            $update =  $this->curl->simple_put($this->API.'/console', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('rental_ps');
            }else{
            $params =  $this->uri->segment(3);
            $params = $params - 1;
            $data['datarental_ps'] = json_decode($this->curl->simple_get($this->API.'/console'));
            $data['datarental_ps'] = $data['datarental_ps']->data[$params] ;
            $this->load->view('view_edit',$data);
            
           
        }
    }
    
    // delete data 
    function delete($ID_console){
        if(empty($ID_console)){
            redirect('rental_ps');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/console', array('ID_console'=>$ID_console), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('rental_ps');
        }
    }
}