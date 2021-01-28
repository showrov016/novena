<?php

class Users_Model extends CI_Model
{
	public function create_user($name,$email,$password)
	{
		$name="'".$name."'";
		$email="'".$email."'";
		$password="'".$password."'";
		$ip="'".$_SERVER['REMOTE_ADDR']."'";
		$this->db->query("INSERT INTO users (name,email,password,ip) VALUES
		 ($name,$email,$password,$ip)");
	}

	public function logincheck($username,$password)
	{
		$username="'".$username."'";
		$password="'".$password."'";
		$result=$this->db->query("SELECT * from users where email=$username and password=$password")->num_rows();
		if ($result>0) {
			return true;
		}
		return false;
	}

	public function checkper($password,$user)
	{
		$detail=$this->db->query("SELECT password FROM users where email='$user'")->num_rows();
		if ($detail > 0) {
			return true;
		}
		else
		{
			return false;
		}
	}

	public function changepassword($newpass)
	{
		$user=$_SESSION['username'];
		$this->db->query("UPDATE users SET password='$newpass' WHERE email='$user'");
	}

	public function checkuser($user)
	{
		$res=$this->db->query("SELECT email from users where email='$user'")->num_rows();
		if ($res>0) {
			return true;
		}
		else
		{
			return false;
		}
	}
}