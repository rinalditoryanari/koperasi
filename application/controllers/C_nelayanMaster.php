<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH . '/third_party/spout/src/Spout/Autoloader/autoload.php';

use Box\Spout\Writer\WriterFactory;
use Box\Spout\Common\Type;
use Box\Spout\Writer\Style\StyleBuilder;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Box\Spout\Writer\Style\Border;
use Box\Spout\Writer\Style\BorderBuilder;
use Box\Spout\Common\Entity\Style\Color;
class C_nelayanMaster extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('M_nelayanMaster');
    }

    public function index()
    {
        if ($this->session->userdata("akun_id") == "") {
            $this->session->set_flashdata('flash3', 'Login terlebih dahulu');
            redirect(site_url('CLogin'));
        } else {
            $data['all_nelayan']   = $this->M_nelayanMaster->index();
          
           

            $this->load->view('template/header');
            $this->load->view('template/vsidebar');
            $this->load->view('nelayan/vnelayan', $data);
            $this->load->view('template/footer');
        }
    }

    public function form_nelayan()
    {
        if ($this->session->userdata("akun_id") == "") {
            $this->session->set_flashdata('flash3', 'Login terlebih dahulu');
            redirect(site_url('CLogin'));
        } else {
            $data['pilih_alat']   = $this->M_nelayanMaster->list_alat();
            $this->load->view('template/header');
            $this->load->view('template/vsidebar');
            $this->load->view('nelayan/vform_nelayan', $data);
            $this->load->view('template/footer');
        }
    }
}