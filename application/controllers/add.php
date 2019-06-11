<?php
class Add extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function add()
	{
		$this->load->view('create');
	}
}
?>