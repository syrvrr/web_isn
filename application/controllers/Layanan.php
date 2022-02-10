<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

    public function index()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('template','home',$data);
      
        }

    public function isp()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('templatebaru','isp',$data);
      
        }

    public function web()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('templatebaru','web',$data);
      
        }

    public function system()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('templatebaru','system',$data);
      
        }

    public function mobile()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('templatebaru','mobile',$data);
      
        }
}