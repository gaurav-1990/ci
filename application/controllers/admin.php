<?php
class Admin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		if( ! $this->session->userdata('user_id') )
			return redirect('login');
	}

	public function dashboard()
	{
		
		$this->load->model('articlesmodel','articles');			//articles is the alias name of articlesmodel

		$articles = $this->articles->articles_list();
		$this->load->view('admin/dashboard',['articles'=>$articles]);
	}
}

?>