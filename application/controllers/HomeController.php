<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('UserModel');
        $this->load->model('HomeModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        // $this->load->view('sign_up');
    }


    public function home()
    {
        $data['username'] = $this->session->userdata('username');

        if(empty($data['username'] )) {
            redirect('../login');
        }

        $data['questions'] = $this->HomeModel->get_questions();
        $this->load->view('home', $data);
    }


    public function my_profile()
    {
        $data['id'] = $this->input->get('id');
        $data['username'] = $this->session->userdata('username');
        $data['profile_details'] = $this->HomeModel->get_my_profile($data['username']);

        if(empty($data['username'] )) {
            redirect('../login');
        }

        $this->load->view('my_profile', $data);
    }


    public function about_us()
    {
        $data['username'] = $this->session->userdata('username');
        if(empty($data['username'] )) {
            redirect('../login');
        }
        $this->load->view('about_us', $data);
    }


    public function my_questions()
    {
        $data['id'] = $this->input->get('id');
        $data['username'] = $this->session->userdata('username');
        $data['questions'] = $this->HomeModel->get_my_questions($data['username']);

        if(empty($data['username'] )) {
            redirect('../login');
        }

        $this->load->view('my_questions', $data);
    }


    public function add_question()
    {
        $asiaColomboTimeZone = new DateTimeZone('Asia/Colombo');
        $dateTime = new DateTime('now', $asiaColomboTimeZone);
        $formattedDateTime = $dateTime->format('Y-m-d H:i:s');

        $data = array(
            'question' => $this->input->post('question'),
            'add_tages' => $this->input->post('add_tages'),
            'created_date' => $formattedDateTime,
            'created_user' => $this->session->userdata('username'),
            'answer_count' => 0,
            'view_count' => 0,
        );

        $inserted = $this->HomeModel->insert_question($data);

        if ($inserted) {
            $this->session->set_flashdata('Success', 'Successfully added new question !');
            redirect('../home');
        } else {
            echo "Failed to add question.";
        }
    }


    public function question_answers()
    {
        $data['username'] = $this->session->userdata('username');
        if(empty($data['username'] )) {
            redirect('../login');
        }
        
        $question_id = $this->input->get('question_id');
        $data['question_id'] = $question_id;
        $data['questions_details'] = $this->HomeModel->selected_question_details($question_id);

        $data['answers'] = $this->HomeModel->get_answers($question_id);

        $update = array(
            'question_id' => $question_id,
        );
        $inserted = $this->HomeModel->update_question_view($update);

        $data['answer_tags'] = $this->HomeModel->get_questions_tags($question_id);
        $this->load->view('show_answers', $data);
    }
    

    public function add_answers()
    {
        $asiaColomboTimeZone = new DateTimeZone('Asia/Colombo');
        $dateTime = new DateTime('now', $asiaColomboTimeZone);
        $formattedDateTime = $dateTime->format('Y-m-d H:i:s');

        $data = array(
            'question_id' => $this->input->post('question_id'),
            'answer' => $this->input->post('answer'),
            'created_date' => $formattedDateTime,
            'created_user' => $this->session->userdata('username')
        );

        $inserted = $this->HomeModel->insert_answers($data);

        if ($inserted) {
            $this->session->set_flashdata('Success', 'Successfully added answers !');
            redirect('../question_answers/?question_id='.$this->input->post('question_id'));
        } else {
            echo "Failed to add answers.";
        }
    }


    public function update_question()
    {
        $asiaColomboTimeZone = new DateTimeZone('Asia/Colombo');
        $dateTime = new DateTime('now', $asiaColomboTimeZone);
        $formattedDateTime = $dateTime->format('Y-m-d H:i:s');

        $data = array(
            'question_id' => $this->input->post('question_id'),
            'question' => $this->input->post('question'),
            'created_date' => $formattedDateTime,
            'created_user' => $this->session->userdata('username')
        );

        $inserted = $this->HomeModel->update_question($data);

        if ($inserted) {
            $this->session->set_flashdata('UpdatedQuestion', 'Successfully update question !');
            redirect('../question_answers/?question_id='.$this->input->post('question_id'));
        } else {
            echo "Failed to add question.";
        }
    }



    public function update_answer()
    {
        $asiaColomboTimeZone = new DateTimeZone('Asia/Colombo');
        $dateTime = new DateTime('now', $asiaColomboTimeZone);
        $formattedDateTime = $dateTime->format('Y-m-d H:i:s');

        $data = array(
            'answer_id' => $this->input->post('answer_id'),
            'answer' => $this->input->post('answer'),
            'created_date' => $formattedDateTime,
            'created_user' => $this->session->userdata('username')
        );

        $inserted = $this->HomeModel->update_answer($data);

        if ($inserted) {
            $this->session->set_flashdata('UpdatedAnswer', 'Successfully update answer !');
            redirect('../question_answers/?question_id='.$this->input->post('question_id'));
        } else {
            echo "Failed to add answer.";
        }
    }



    public function update_myprofile()
    {
        $asiaColomboTimeZone = new DateTimeZone('Asia/Colombo');
        $dateTime = new DateTime('now', $asiaColomboTimeZone);
        $formattedDateTime = $dateTime->format('Y-m-d H:i:s');

        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

        $data = array(
            'user_id' => $this->input->post('user_id'),
            'fullname' => $this->input->post('fullname'),
            'useremail' => $this->input->post('useremail'),
            'password' => $password,
            'is_active' => $this->input->post('is_active')
        );

        $inserted = $this->HomeModel->update_myprofile($data);

        if ($inserted) {
            $this->session->set_flashdata('UpdatedProfile', 'My Profile successfully updated !');
            redirect('../my_profile/?id='.$this->session->userdata('username'));
        } else {
            echo "Failed to update.";
        }
    }



    public function add_new_tag()
    {
        $data = array(
            'question_id' => $this->input->post('question_id'),
            'add_tages' => $this->input->post('add_tages'),
        );

        $inserted = $this->HomeModel->insert_new_tag($data);

        if ($inserted) {
            redirect('../home');
        } else {
            echo "Failed to add tags.";
        }


    }



}
