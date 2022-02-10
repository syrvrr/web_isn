<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Developer extends CI_Controller {
    
	function __construct()
    {
      parent::__construct();
      $this->load->helper('app_helper','url','engine');
      $this->load->model('model_app');
      $this->load->library('session');
    }

    public function index()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('template','list_master',$data);
      
        }

    public function content()
    {

        $data['tab'] = 'tab1';
     

        $this->template->load('template','list_content',$data);
      
        }

    public function tambah_list()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('template','tambah_data_list',$data);
      
        }


    public function tambah_content()
    {

        $data['tab'] = 'tab1';
     

        $this->template->load('template','tambah_data_content',$data);
      
        }

        public function post()
        {
    
            $data['title'] = 'google';
         
    
            $this->template->load('template','post',$data);
          
            }

        public function kategori()
        {
    
            $data['title'] = 'Ngedan';
         
    
            $this->template->load('template','kategori',$data);
          
            }


       function save_master_list(){

               
            $config['upload_path'] = 'assets/save_ico/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $hasil=$this->upload->data();

            

        if ($hasil['file_name']==''){
        $data = array(
                
                'index_sub'           => $this->input->post('menu_utama'), 
                'nama_loc'            => $this->input->post('nama_menu'),
                'status'              => $this->input->post('status'),
                'no_urut'             => $this->input->post('nomor'),
              
                
               
            );

        

        }else{

        $data = array(

                'index_sub'           => $this->input->post('menu_utama'), 
                'nama_loc'            => $this->input->post('nama_menu'),
                'status'              => $this->input->post('status'),
                'logo_loc'            => $hasil['file_name'],
                'no_urut'             => $this->input->post('nomor'),
              
               
            );

        

        }

       $data =  $this->model_app->insert('mr_loc',$data);
               
        echo json_encode($data);

  

        echo "<script>
        alert('Data Master Sudah Di Simpan');
        window.location.href='tambah_list';
        </script>";
   
    }


    function save_master_content(){

               
            $config['upload_path'] = 'assets/save_foto/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $hasil=$this->upload->data();

            

        if ($hasil['file_name']==''){
        $data = array(
                
                'index_grup'        => $this->input->post('grup'), 
                'alamat'            => $this->input->post('alamat'),
                'keterangan'        => $this->input->post('keterangan'),
                'link'              => $this->input->post('link'),
                'longitude'         => $this->input->post('longitude'),
                'latitude'          => $this->input->post('latitude'),
              
                
               
            );

        

        }else{

        $data = array(

                'index_grup'        => $this->input->post('grup'), 
                'alamat'            => $this->input->post('alamat'),
                'keterangan'        => $this->input->post('keterangan'),
                'link'              => $this->input->post('link'),
                'foto'              => $hasil['file_name'],
                'longitude'         => $this->input->post('longitude'),
                'latitude'          => $this->input->post('latitude'),
               
              
               
            );

        

        }

       $data =  $this->model_app->insert('master_all_profile',$data);
               
        echo json_encode($data);

  

        echo "<script>
        alert('Data Master Sudah Di Simpan');
        window.location.href='content';
        </script>";
   
    }

    function list_daftar_show(){
    
    $data=$this->model_app->view_result('mr_loc');
    echo json_encode($data);
  
   
    }

 public function view_edit_data_list()
        {
      
            $id = $this->uri->segment(3);

            $ambil = $this->model_app->view_where('mr_loc',array('index' => $id))->row_array();

          //  $combo_bidang = $this->model_app->view_ordering('tbl_bidang','id_bidang','ASC');

            $data = array(

              'index' => $ambil,
            //  'combo' => $combo_bidang,

          );

            $this->template->load('template','edit_data_list',$data);

            
              }




}
    