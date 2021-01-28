<?php

class Prevpdf_Model extends CI_Model
{
	public function getpdf($name)
	{
		$user=$_SESSION['username'];
		return($this->db->query("SELECT * FROM pdfform where name='$name' ")->result_array());
	}
}