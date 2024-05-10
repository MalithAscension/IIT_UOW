<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

    public function authenticate($username, $password) {
        $query = $this->db->get_where('users', array('username' => $username));
        $user = $query->row_array();
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return FALSE;
        }
    }


}
