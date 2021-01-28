<?php

class Pdfconv extends CI_Controller
{
     public function __construct()
    {
        parent::__construct();
        $this->load->model('Pdf_Model','pf');      
    }

        public function loadform()
    {
        if($this->input->post('submit') != NULL )
        {
 
         // POST data
        $postData = $this->input->post();

        // Read POST data
        $dname=$postData['dname'];
        $birth=$postData['birthdate'];
        $death=$postData['deathdate'];
        $sex=$postData['sex'];
        $obt=$postData['obt'];
        $output=$_SESSION['output'];
        
        $funame=$postData['funame'];
        $webname=$postData['webname'];
        $addname=$postData['addname'];
        $email=$postData['email'];
        
        $username=$this->session->userdata('username');
        $image = $_FILES['image']['name'];
        $fimage= $_FILES['fimage']['name'];
        $target = $_SERVER['DOCUMENT_ROOT']."/purgatory/assets/img/".basename($image);
        $ftarget = $_SERVER['DOCUMENT_ROOT']."/purgatory/assets/img/".basename($fimage);
        $msg="";
     
        if($this->pf->check($dname,$birth,$death,$sex,$obt,$funame,$webname,$addname,$email,$image,$username)==false)
        {
           $this->pf->createform($dname,$birth,$death,$sex,$obt,$funame,$webname,$addname,$email,$image,$username,$fimage); 
        }
        else
        {
            echo "Novena Already exist, if you want to change any information please go to your dashboard and choose edit novena beside novena list dropdown";
        }
        

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target) && move_uploaded_file($_FILES['fimage']['tmp_name'], $ftarget))
        {
            $msg = "Image uploaded successfully";
        }
        else
        {
            $msg = "Failed to upload image";
        }
        
            
            $_SESSION['name']=$dname;
            $_SESSION['birth']=$birth;
            $_SESSION['death']=$death;
            $_SESSION['obt']=$obt;
            $_SESSION['img']=$target;
            $_SESSION['fimg']=$ftarget;
            $_SESSION['sex']=$sex;
            $_SESSION['funame']=$funame;
            $_SESSION['webname']=$webname;
            $_SESSION['addname']=$addname;
            $_SESSION['email']=$email;
            $_SESSION['output']=$output;
           var_dump($output);
            if ($output=="Multi Page") {
                 // $this->load->view('download');
                 // $this->load->view('dashboard');
                 $this->load->view('funeral_Pdffull');
            }
            else
            {
                 // $this->load->view('download');
                 // $this->load->view('dashboard');
                 $this->load->view('funeral_Pdf');
            }
           
            
      
        }
    }

    public function editnovena()
    {
        if($this->input->post('submit')!= NULL)
        {
             $postData = $this->input->post();

        // Read POST data
        $dname=$postData['dname'];
        $birth=$postData['birthdate'];
        $death=$postData['deathdate'];
        
        if (isset($_POST['sex'])) {
           $sex=$postData['sex'];
        }
        else
        {
         $sex=$_SESSION['sex'];   
        }
        $obt=$postData['obt'];
        
        
        $funame=$postData['funame'];
        $webname=$postData['webname'];
        $addname=$postData['addname'];
        $email=$postData['email'];
        $username=$this->session->userdata('username');

        if(!empty($_FILES['image']['name']))
        {
        $image = $_FILES['image']['name'];
        $target = $_SERVER['DOCUMENT_ROOT']."/purgatory/assets/img/".basename($image);
        $msg="";

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
        {
            $msg = "Image uploaded successfully";
        }
        else
        {
            $msg = "Failed to upload image";
        }
        }
        else
        {
            $image=$_SESSION['dimage'];
        }

        if(!empty($_FILES['fimage']['name']))
        {
        $fimage = $_FILES['fimage']['name'];
        $target1 = $_SERVER['DOCUMENT_ROOT']."/purgatory/assets/img/".basename($fimage);
        $msg="";

        if (move_uploaded_file($_FILES['fimage']['tmp_name'], $target1))
        {
            $msg = "Image uploaded successfully";
        }
        else
        {
            $msg = "Failed to upload image";
        }
        }
        else
        {
            $fimage=$_SESSION['fuimg'];
        }



        

        $result=$this->pf->edit($dname,$birth,$death,$sex,$obt,$funame,$webname,$addname,$email,$image,$username,$fimage);
        if ($result==true) {
            echo "Novena Updated";
            header("refresh:1;url= ../Users/dashboard");
        }
        }
    }
    // public function funeral_Pdf()
    // {
    //     $this->load->view('funeral_Pdf');
    // }
    // public function funeral_Pdffull()
    // {
    //     $this->load->view('funeral_Pdffull');
    // }
}