<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// File: application/core/MY_Controller.php
class MY_Controller extends CI_Controller {
    public $layoutData = [];

    public function __construct() {
        parent::__construct();

        // Ambil data session dan simpan ke variabel layout
        $this->layoutData['logged_in'] = $this->session->userdata('logged_in');
        $this->layoutData['email'] = $this->session->userdata('email');
    }

    public function render_view($data = [])
    {
        // Ambil konten dari view utama
        $content = $this->load->view($data['content'], $data, true);
    
        // Gabungkan layoutData (misal: session login) ke data tampilan
        $data = array_merge($this->layoutData, $data);
        $data['content'] = $content;
    
        // Tampilkan layout utama
        $this->load->view('dashboard/layout', $data);
    }
    

}
