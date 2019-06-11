<?php
Class Login extends MY_Controller
{
	public function index()
	{
		$this->load->view('public/admin_login');
	}

	public function admin_login()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('un','User Name','required|alpha');
		$this->form_validation->set_rules('pwd','Password','required');

		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

		if($this->form_validation->run())
		{
			$username = $this->input->post('un');
			$password = $this->input->post('pwd');

			$this->load->model('loginmodel');
			if($this->loginmodel->login_valid($username,$password))
			{
				//credentials valid. login user
				echo "Success";
			}
			else
			{
				//ahentication failed
				echo "Failed";
			}
		}
		else
		{
			$this->load->view('public/admin_login');
		}
	}
}
?>