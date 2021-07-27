<?php
class Signup extends CI_Controller
{
	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();

		$this->load->model('Signup_Model');
	}

	public function savedata()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_rules("name", "Name", "required");
		$this->form_validation->set_rules("email", "Email", "required|is_unique[form.email]");
		$this->form_validation->set_rules("number", "phone_number", "required|numeric|exact_length[10]");
		$this->form_validation->set_rules("password", "Password", "required");
		if ($this->form_validation->run() == false) {
			$this->load->view('signup');
		} else {
			if (isset($_POST['submit'])) {
				$data['name'] = $this->input->post('name');
				$data['email'] = $this->input->post('email');
				$data['number'] = $this->input->post('number');
				$data['password'] = hash('sha256', $this->input->post('password'));
				$data['gender'] = $this->input->post('gender');
				$data['type'] = $this->input->post('type');
				$response = $this->Signup_Model->saverecords($data);
				if ($response == true) {
?>

					<script>
						alert("good..form submitted.. now you can login");
						location.href = "savedata";
					</script>
				<?php


				} else {
				?>
					<script>
						alert("sorry ..form  not submitted..");
						location.href = "savedata";
					</script>
<?php


				}
			}
		}
	}
}
?>