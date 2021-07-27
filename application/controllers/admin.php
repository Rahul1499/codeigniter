<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        /*call CodeIgniter's default Constructor*/
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('upload');
        //$this->load->model('Update_model');

    }
    public function admin()
    {
        $result['data'] = $this->Admin_model->admin();
        $this->load->view('admin', $result);
    }
    //new function for prifilled
    public function prefilled()
    {
        $id = $this->input->get('id');
        $result['data'] = $this->Admin_model->prefilled($id);
        $this->load->view('update', $result);
     
            $image = array(
                'upload_path' => './upload/',
                'allowed_types' => "jpg|png|jpeg",
            );
        

            $this->upload->initialize($image);
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


            $this->Admin_model->update($name, $number, $gender, $id, $image);
            $this->session->set_flashdata('msg', ' Thankyou!! update successfully..');
            redirect('Admin/admin');
        }
    }

    //Delete Record
    public function delete()
    {
        $id = $this->input->get('id');
        $result = $this->Admin_model->deleterecord($id);
        if ($result == true) {

            redirect('Admin/admin');
        } else {
            echo "Error !";
        }
    }
}
