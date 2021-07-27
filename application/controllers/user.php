<?php
class User extends CI_Controller
{
    public function __construct()
    {
        /*call CodeIgniter's default Constructor*/
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('upload');
    }

    public function user()
    {
        $result['data'] = $this->User_model->user();
        $this->load->view('user', $result);
    }
    // for prefilled deatiles..
    public function prefilled()
    {
        $id = $this->input->get('id');
        $result['data'] = $this->User_model->prefilled($id);
        $this->load->view('update', $result);

        $image = array(
            'upload_path' => './upload/',
            'allowed_types' => "jpg|png|jpeg",
        );

        $this->upload->initialize($image);
        //upload information with image
        if ($this->input->post('update')) {
            if ($this->upload->do_upload('image')) {
                $imageData = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
            $name = $this->input->post('name');
            $number = $this->input->post('number');
            $gender = $this->input->post('gender');
            $image = $imageData;


            $this->User_model->update($name, $number, $gender, $id, $image);
            $this->session->set_flashdata('msg', ' Thankyou!! update successfully..');
            redirect('User/user');
        }
    }
}
