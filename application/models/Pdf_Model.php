<?php

class Pdf_Model extends CI_Model
{	
	public function createform
	($dname,$birth,$death,$sex,$obt,$funame,$webname,$addname,$email,$image,$username,$fimage)
	{
		$this->db->query
		("INSERT INTO pdfform (email,name,birth,death,sex,obituary,fname,fweb,faddress,femail,dimage,fuimage) VALUES('$username','$dname','$birth','$death','$sex','$obt','$funame','$webname','$addname','$email','$image','$fimage')");
	}

	public function check($dname,$birth,$death,$sex,$obt,$funame,$webname,$addname,$email,$image,$username)
	{
		$numrow=$this->db->query("SELECT * from pdfform where email='$username' and name='$dname' and birth='$birth' and death='$death' and sex='$sex' and obituary='$obt'")->num_rows();
		if ($numrow>0) {
			return true;
		}
		return false;
	}

	public function edit($dname,$birth,$death,$sex,$obt,$funame,$webname,$addname,$email,$image,$username,$fimg)
	{
		$name=$_SESSION['name'];
		$bday=$_SESSION['birth'];
		$dday=$_SESSION['death'];
		$usex=$_SESSION['sex'];

		$this->db->query("UPDATE pdfform SET email='$username', name='$dname', birth='$birth', death='$death', sex='$sex', obituary='$obt',fname='$funame',fweb='$webname',faddress='$addname',femail='$email',dimage='$image',fuimage='$fimg' WHERE name='$name' and birth='$bday' and death='$dday' and sex='$usex'");
		return true;
	}

	
}