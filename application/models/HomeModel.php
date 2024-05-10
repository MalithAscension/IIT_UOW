<?php

use PhpParser\Node\Stmt\Echo_;

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }


    public function get_my_profile($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        return $query->row();
    }



    public function insert_question($data) {
        $question_data = array(
            'question' => $data['question'],
            'created_date' => $data['created_date'],
            'created_user' => $data['created_user'],
            'answer_count' => $data['answer_count'],
            'view_count' => $data['view_count']
        );
    
        $this->db->insert('questions', $question_data);
        $question_id = $this->db->insert_id();
    
        if (!empty($data['add_tages'])) {
            $tags = explode(',', $data['add_tages']);
            foreach ($tags as $tag) {
                $this->db->insert('question_tags', array(
                    'question_id' => $question_id,
                    'add_tages' => trim($tag)
                ));
            }
        }
    
        return $question_id;
    }


    public function get_questions() {
        $this->db->select('questions.*, GROUP_CONCAT(question_tags.add_tages) as tags');
        $this->db->from('questions');
        $this->db->join('question_tags', 'question_tags.question_id = questions.question_id', 'left');
        $this->db->group_by('questions.question_id'); 
        $this->db->order_by('questions.question_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    

    public function get_questions_tags($question_id) {

        $this->db->select('GROUP_CONCAT(add_tages) as tags');
        $this->db->where('question_id', $question_id);
        $query = $this->db->get('question_tags');
        return $query->result();
    }


    
    
    public function selected_question_details($question_id) {
        $this->db->where('question_id', $question_id);
        $query = $this->db->get('questions');
        $row = $query->row(); 
        if ($row) {
            return $row; 
        } else {
            echo "No question found";
        }
    }
    

    public function insert_answers($data) {

        $answers = array(
            'question_id' => $data['question_id'],
            'answer' => $data['answer'],
            'created_date' => $data['created_date'],
            'created_user' => $data['created_user']
        );
    
        $success = $this->db->insert('answers', $answers);

        $this->db->where('question_id', $data['question_id']);
        $query = $this->db->get('questions');
        $row = $query->row();
        $current_answer_count = $row->answer_count;
        $new_answer_count = $current_answer_count + 1;

        $updateQuery = $this->db->where('question_id', $data['question_id']);
        $this->db->where('question_id', $data['question_id']);
        $this->db->update('questions', array('answer_count' => $new_answer_count));

        return $success;
    }
    


    public function update_question_view($update) {

        $this->db->where('question_id', $update['question_id']);
        $query = $this->db->get('questions');
        $row = $query->row();
        $current_view_count = $row->view_count;
        $new_view_count = $current_view_count + 1;

        $updateQuery = $this->db->where('question_id', $update['question_id']);
        $this->db->where('question_id', $update['question_id']);
        $this->db->update('questions', array('view_count' => $new_view_count));
        return $this->db->affected_rows() > 0;
    }








    public function get_answers($question_id) {
        $this->db->where('question_id', $question_id);
        $this->db->order_by('answer_id', 'DESC'); 
        $query = $this->db->get('answers');
        return $query->result();
    }
    


    public function update_question($data) {
        $question_id = $data['question_id'];
        unset($data['question_id']);
    
        $this->db->where('question_id', $question_id);
        $this->db->update('questions', $data);
    
        return $this->db->affected_rows() > 0;
    }
    

    public function update_answer($data) {
        $answer_id = $data['answer_id'];
        unset($data['answer_id']);
    
        $this->db->where('answer_id', $answer_id);
        $this->db->update('answers', $data);
    
        return $this->db->affected_rows() > 0;
    }



    public function update_myprofile($data) {
        $user_id = $data['user_id'];
        unset($data['answer_id']);
    
        $this->db->where('user_id', $user_id);
        $this->db->update('users', $data);
    
        return $this->db->affected_rows() > 0;
    }




    public function insert_new_tag($data) {

        $tags = array(
            'question_id' => $data['question_id'],
            'add_tages' => $data['add_tages']
        );
    
        $success = $this->db->insert('question_tags', $tags);
        return $success;
    }
    


    public function get_my_questions($username) {
        $this->db->select('questions.*, GROUP_CONCAT(question_tags.add_tages) as tags');
        $this->db->from('questions');
        $this->db->join('question_tags', 'question_tags.question_id = questions.question_id', 'left');
        $this->db->where('questions.created_user', $username); 
        $this->db->group_by('questions.question_id'); 
        $this->db->order_by('questions.question_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }



}
