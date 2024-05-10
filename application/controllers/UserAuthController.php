<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserAuthController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('UserModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('sign_up');
    }


    public function login()
    {
        $this->load->view('log_in');
    }


    public function signup()
    {
        $this->load->view('sign_up');
    }


    public function register()
    {

        $asiaColomboTimeZone = new DateTimeZone('Asia/Colombo');
        $dateTime = new DateTime('now', $asiaColomboTimeZone);
        $formattedDateTime = $dateTime->format('Y-m-d H:i:s');

        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $data = array(
            'fullname' => $this->input->post('fullname'),
            'username' => $this->input->post('username'),
            'useremail' => $this->input->post('useremail'),
            'password' => $password,
            'created_date' => $formattedDateTime,
            'is_active' => 1,
        );

        $inserted = $this->UserModel->insert_user($data);

        if ($inserted) {
            echo "User inserted successfully!";
            redirect('../login');
        } else {
            echo "Failed to insert user.";
        }
    }


    public function chackAuth()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Invalid Username or Password !');
            redirect('../login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->UserModel->authenticate($username, $password);

            if ($user) {
                $this->session->set_userdata('username', $username);
                redirect('../home');
            } else {
                $this->session->set_flashdata('error', 'Invalid Username or Password !');
                redirect('../login');
            }
        }
    }
}
