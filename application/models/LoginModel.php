<?php
	class LoginModel extends CI_Model
	{
		public	function login_valid($username,$password)
		{
			$q = $this->db->where(['username'=>$username,'password'=>$password])
						  ->get('admin');
			
			
			if($q->num_rows())
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
	}
?>