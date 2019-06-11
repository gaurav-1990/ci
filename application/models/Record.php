<?php
class Record extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function saverecords($name,$eml,$pwd,$mob,$city)
	{
		$query="insert into register values('','$name','$eml','$pwd','$mob','$city')";
		return $this->db->query($query);
	}

	function deleterecords($id)
	{
		$query=$this->db->query("delete from register where id='".$id."'");
	}

	public function read_data()
	{
		$query=$this->db->query("select * from register");
        return $query->result();
	}

	function displayrecordsById($id)
	{
		$query=$this->db->query("select * from register where id='".$id."'");
		return $query->result();
	}

	function updaterecords($name,$eml,$pwd,$mob,$city,$id)
 	{
 		$query=$this->db->query("update register set name='$name', email='$eml', password='$pwd', mobile='$mob', city='$city' where id='".$id."'");
 	} 
}

?>