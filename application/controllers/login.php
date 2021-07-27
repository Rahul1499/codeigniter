<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        /*call CodeIgniter's default Constructor*/
        parent::__construct();
        $this->load->model('login_model');
    }

    public function login()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("email", "Email", "required");
        $this->form_validation->set_rules("pass", "Password", "required");
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');
            $result = $this->login_model->login($email, $pass);
            if ($result == true) {
                foreach ($result as $row) {
                    $data = array(
                        'logged_in' => TRUE,
                        'name' => $row['name'],
                        'email' => $row['email'],
                        'type' => $row['type'],
                        'id' => $row['id'],
                        'image'=>$row['image']
                    );
                    // print_r($data);die();
                    if ($row['type'] == 'admin') {
                        $this->session->set_userdata($data);
                        redirect('Admin/admin');
                    } else if ($row['type'] == 'newuser') {
                        $this->session->set_userdata($data);
                        redirect('User/user');
                    }
                }
            } else {
                $this->session->set_flashdata('message', 'invalid credentials!!Please check');
                redirect('Login/login');
            }
        }
    }
}
?>
