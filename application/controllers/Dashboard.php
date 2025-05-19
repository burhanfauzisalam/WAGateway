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
            'bulk'      => 'dashboard/send_bulk',
            'result'      => 'dashboard/result',
			'scripts' 			=> [
				'assets/js/dashboard.js'
			]
		];
        $this->render_view($data);

    }

    public function send_bulk() 
    {
        $session = $this->session->userdata('email');
        $raw_numbers = $this->input->post('numbers');
        $text = urlencode($this->input->post('message'));

        $numbers = preg_split('/[\r\n,]+/', $raw_numbers, -1, PREG_SPLIT_NO_EMPTY);
        $results = [];

        foreach ($numbers as $to) {
            $to = trim($to);
            if (!empty($to)) {
                $url = "https://wa-gateway.bukansarjanakomputer.web.id/message/send-text?session={$session}&to={$to}&text={$text}";
                $response = file_get_contents($url);
        
                $results[] = [
                    'number' => $to,
                    'response' => $response
                ];

                $data = [
                    'session'    => $session,
                    'tujuan'     => $to,
                    'pesan'      => $text
                ];
                $this->db->insert('chat_history', $data);

        
                sleep(2); // jeda 2 detik antar pengiriman
            }
        }

        $data['results'] = $results;
        $this->load->view('dashboard/result_table', $data);
    }

    
}
