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

	public function add_article()
	{
		$this->load->view('admin/add_article');
	}

	public function edit_article($article_id)
	{
		$this->load->model('articlesmodel','articles');
		$article = $this->articles->find_article($article_id);
		print_r($article);
		die;
	}

	public function delete_article()
	{
		
	}

	public function store_article()
	{
		$this->load->library('form_validation');
		if($this->form_validation->run('add_article_rules'))
		{
			$post = $this->input->post();
			
			unset($post['login']);
			
			$this->load->model('articlesmodel','articles');		//articles is the alias name of articlesmodel
			if($this->articles->add_article($post))
			{
				$this->session->set_flashdata('feedback','Article Added Successfully.');
				$this->session->set_flashdata('feedback_class','alert-sucess');
			}
			else
			{
				$this->session->set_flashdata('feedback','Error Occured while adding the article.');
				$this->session->set_flashdata('feedback_class','alert-danger');
			}
			return redirect('admin/dashboard');
		}
		else
		{
			$this->load->view('admin/add_article');
		}
	}
}

?>