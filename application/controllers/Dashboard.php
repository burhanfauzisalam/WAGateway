<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller  {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
        $this->load->model('User_model');
    }

    public function index()
    {
		$data = [
			'title' 	=> 'Dashboard',
			'content' 	=> 'dashboard/index',
			'scripts' 			=> [
				'assets/js/dashboard.js'
			]
		];
        $this->render_view($data);

    }
}
