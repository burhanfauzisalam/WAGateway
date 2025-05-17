<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MY_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
        $this->load->model('User_model');
        $this->load->helper('url');
    }

    public function index()
    {
		$data = [
			'title' 	=> 'Settings',
			'content' 	=> 'settings/index',
            'barcode'   => 'settings/barcode',
            'email'     => $this->session->userdata('email'),
			'scripts' 			=> [
				'assets/js/settings.js'
			]
		];
        // var_dump($data['barcode']);die;
        $this->render_view($data);
    }

    public function barcode()
    {
        $data = [
			'title' 	=> 'Settings',
			'content' 	=> 'settings/barcode',
            'email'     => $this->session->userdata('email'),
			'scripts' 			=> [
				'assets/js/settings.js'
			]
		];
        $this->load->view('settings/barcode', $data);
    }

    public function login_wa()
    {
        $email = $this->session->userdata('email'); // ambil email dari query param

        $url = "https://wa-gateway.bukansarjanakomputer.web.id/session/start?session=" . $email;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => false,
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);
        curl_close($curl);

        if ($error) {
            // Gagal, kirim error
            echo json_encode([
                'status' => false,
                'html' => '<a href="#" class="btn btn-danger" id="logout-wa">Logout</a>',
            ]);
        } else {
            // Berhasil, kirim HTML QR
            echo json_encode([
                'status' => true,
                'html' => $response,
            ]);
        }
    }

}
