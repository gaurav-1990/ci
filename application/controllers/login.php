<?php
Class Login extends MY_Controller
{
	public function index()
	{
		if($this->session->userdata('user_id'))
			return redirect('admin/dashboard');
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
			
			$login_id=$this->loginmodel->login_valid($username,$password);
			
			if($login_id)
			{
				$this->load->library('session');
				$this->session->set_userdata('user_id', $login_id);
				return redirect('admin/dashboard');

				//credentials valid. login user
			}
			else
			{
				$this->session->set_flashdata('login_failed','Invalid Username or Password.');
				return redirect('login');
			}
		}
		else
		{
			$this->load->view('public/admin_login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('login');
	}
}
?>