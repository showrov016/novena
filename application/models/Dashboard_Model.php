<?php

class Dashboard_Model extends CI_Model
{
	public function getNovena()
	{
		$user=$_SESSION['username'];
		return($this->db->query("SELECT DISTINCT * FROM pdfform where email='$user' ")->result_array());
	}

	public function forgotpass($username)
	{
		$query=$this->db->query("SELECT email from users where email='$username'")->num_rows();
		if ($query>0) {
			return true;
		}
		else
		{
			return false;
		}
	}
	public function changeforgotpass($username)
	{
		$temp_pass=mt_rand(101100,999999);
		$this->db->query("UPDATE users set password='$temp_pass' where email='$username'");
		return $temp_pass;
	} 
}