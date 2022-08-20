<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class C_homepage extends CI_Controller
{
    //Input:    
    //Output:   
    //Process:  Self Routing
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    //Input:    
    //Output:   
    //Process:  Nampil halaman vhomepage
    public function index()
    {
        $this->load->view('vhomepage');
    }
}
