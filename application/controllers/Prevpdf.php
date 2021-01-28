<?php

class Prevpdf extends CI_Controller
{
	public function index()
	{
		if ($this->input->post('novsubmit')) {
		$desname= $this->input->post('desname');
		$output= $this->input->post('output');
		$_SESSION['output']=$output;
		if ($desname=="Create Novena") {
			$this->load->view('novenaform');
		}
		else
		{
		$this->load->model('Prevpdf_Model','pp');
		$pdf=$this->pp->getpdf($desname);

		foreach ($pdf as $trn){
			$_SESSION['name']=$trn['name'];
            $_SESSION['birth']=$trn['birth'];
            $_SESSION['death']=$trn['death'];
            $_SESSION['obt']=$trn['obituary'];
            $_SESSION['sex']=$trn['sex'];
            $_SESSION['funame']=$trn['fname'];
            $_SESSION['webname']=$trn['fweb'];
            $_SESSION['addname']=$trn['faddress'];
            $_SESSION['email']=$trn['femail'];
            $_SESSION['img']=$_SERVER['DOCUMENT_ROOT']."/purgatory/assets/img/".$trn['dimage'];
            $_SESSION['fimg']=$_SERVER['DOCUMENT_ROOT']."/purgatory/assets/img/".$trn['fuimage'];
            $_SESSION['dimage']=$trn['dimage'];
            $_SESSION['fuimg']=$trn['fuimage'];

    }
	    if ($output=="Multi Page") {
	                 $this->load->view('funeral_Pdffull');
	            }
            elseif($output=="Two page")
            {
                 $this->load->view('pdfcontent');
            }
            else
            {
            	$this->load->view('editnovena');
            }
		}
		}

		
	}

	// public function funeral_Pdf()
 //    {
 //        $this->load->view('funeral_Pdf');
 //    }
 //    public function funeral_Pdffull()
 //    {
 //        $this->load->view('funeral_Pdffull');
 //    }
}