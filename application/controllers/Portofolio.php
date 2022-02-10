<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CI_Controller {

    public function index()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('template','home',$data);
      
        }

    public function muba()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('templatebaru','portofolio/muba',$data);
      
        }

    public function jdih()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('templatebaru','portofolio/jdih',$data);
      
        }

    public function kominfo()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('templatebaru','portofolio/kominfo',$data);
      
        }

    public function pkk()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('templatebaru','portofolio/pkk',$data);
      
        }

     public function sppd()
	{

        $data['tab'] = 'tab1';
     

        $this->template->load('templatebaru','portofolio/sppd',$data);
      
        }

}