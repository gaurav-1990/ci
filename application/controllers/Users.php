<?php
class Users extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Record');

	}
	
	public function create()
	{
		
		if($this->input->post('save'))
		{
			$n=$this->input->post('name');
			$e=$this->input->post('eml');
			$p=$this->input->post('pwd');
			$m=$this->input->post('mob');
			$c=$this->input->post('city');

			$res = $this->Record->saverecords($n,$e,$p,$m,$c);

			if($res){
				$this->session->set_flashdata('success', 'Records Saved Successfully . ');
				
			}else{
				 $this->session->set_flashdata('fail', 'Records not Saved Successfully ');			
				
			}

			redirect('Users/create');

		}
		else
		{
			$this->load->view('create');
		}		
		
	}

	
	public function read()
	{
		$data['res'] = $this->Record->read_data();
		$this->load->view('display', $data);
	}
	

	public function deletedata()
	{
		 $id=$this->uri->segment("3");
		 //$id=$this->input->get('id');
		 $this->Record->deleterecords($id);
		 redirect('Users/read');
	}


	public function updatedata()
	{
		$id=$this->uri->segment("3");
		 
 		$data['res']=$this->Record->displayrecordsById($id);
 		$this->load->view('update_record',$data);

		if($this->input->post('update'))
		{
			 
			$n=$this->input->post('name');
			$e=$this->input->post('eml');
			$p=$this->input->post('pwd');
			$m=$this->input->post('mob');
			$c=$this->input->post('city');
			
			$this->Record->updaterecords($n,$e,$p,$m,$c,$id);
 			redirect('Users/read');
		}
	}
}