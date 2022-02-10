<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller {

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
        $marker['infowindow_content'] = 'Ini Rumah Saya';
        $this->googlemaps->add_marker($marker);


        $data['map'] = $this->googlemaps->create_map();
		$this->load->view('map',$data, false);
	}
}

