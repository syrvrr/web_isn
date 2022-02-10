<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller {

     function __construct()
    {
      parent::__construct();
      $this->load->helper('app_helper','url','engine');
      $this->load->model('model_app');
      $this->load->library('session');
    }

	public function index()
	{
        $this->load->library('googlemaps');

        $config['center']= '3.257427, 99.407808';
        $config['zoom']= '14';
        $this->googlemaps->initialize($config);

    // lokasi 1

        $marker=array();
        $marker['position']='3.260126, 99.379251';
        $marker['icon'] = base_url('assets/icon/tes.png');
        $marker['title'] = 'yes';
        $marker['onmouseover'] = ''; 
        $co .= '<div class="panel-group acc-v1" id="accordion-1"><div class="panel panel-default">';
        $co .= '<div class="panel-heading"><h4 class="panel-title">';
        $co .= '<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-One">Informasi Data</a>';
        $co .= '</h4></div><div id="collapse-One" class="panel-collapse collapse in">';
        $co .= '<div class="panel-body"><div class="row"><div class="col-md-4">';
        $co .= '<img class="img-responsive img-new-size" src="assets/save_foto/aihara_enju_satomi.png" alt=""></div><div class="col-md-8">';
        $co .= '<table class="table"><tbody><tr><td>Kategori</td><td>Bank</td>';
        $co .= '</tr><tr><td>Deskripsi</td><td> <div>PT Bank Mandiri (Persero), Tbk., Denpasar Sesetan Raya(0361) 264941-</div></td></tr>';
        $co .= '</tr><tr><td>Website</td><td> <div><a href="http://ngedan.com/" target="_BLANK">ngedan.com</a></div></td></tr></tbody></table>';
        $co .= '</div></div></div></div></div>';
        // $co .= '';
        // $co .= '';
        
        // $co = '<div style="width :250px; height :210px;"><h3>';
        // $co .= '</h3><br><h5><strong>Website : </strong>';
        // $co .= '</h5></div>';

        $marker['infowindow_content'] = $co;
        $this->googlemaps->add_marker($marker);


        $data['map'] = $this->googlemaps->create_map();
		$this->load->view('map');
	}


 function closest_locations(){

        $location =json_decode( preg_replace('/\\\"/',"\"",$_POST['data']));
        $lan='3.262962';
        $lat='99.379251';
        $ServiceId='1';
        $base = base_url();
        $providers= $this->services_model->get_closest_locations($lan,$lat,$ServiceId);
        $indexed_providers = array_map('array_values', $providers);
        // this loop will change retrieved results to add links in the info window for the provider
        $x = 0;
        foreach($indexed_providers as $arrays => &$array){
            foreach($array as $key => &$value){
                if($key === 1){
                    $pieces = explode(",", $value);
                    $value = "$pieces[1]<a href='$base$pieces[0]'>More..</a>";
                }

                $x++;
            }
        }
        echo json_encode($indexed_providers,JSON_UNESCAPED_UNICODE);

    }


    
function isi(){
    
  //  $id =$this->uri->segment(3); 

    $data=$this->model_app->view_result('master_all_profile');
    echo json_encode($data);
  
   
}


}

