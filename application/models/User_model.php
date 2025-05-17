<?php
class User_model extends CI_Model {
    public function get_user($email, $password) {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        return $this->db->get('user')->row();
    }
}
