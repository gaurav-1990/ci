<?php

class Articlesmodel extends CI_Model
{
	
	public function articles_list()
	{
		$user_id = $this->session->userdata('user_id');
		$query = $this->db->select(['title','id'])
							 ->from('article')
							 ->where('user_id', $user_id)
							 ->get();
		return $query->result();
	}

	public function add_article($array)
	{
		return $this->db->insert('article',$array);
	}

	public function find_article($article_id)
	{
		$q = $this->db->where('id',$article_id)
				 ->get('article');
		return $q->row();
	}
}
