<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

    public function index()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('template','home',$data);
      
        }

    public function portofolio()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('templatebaru','portofolio',$data);
      
        }

     public function service()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('templatebaru','service',$data);
      
        }

    public function profil()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('templatebaru','profil',$data);
      
        }

     public function contact()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('templatebaru','contact',$data);
      
        }
    
     public function galeri()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('templatebaru','galeri',$data);
      
        }

}