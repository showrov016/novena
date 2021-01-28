<?php
class Users extends CI_Controller
{

	public function register()
	{
		$this->load->view('register');
     }

	public function create_user()
	{

	  if($this->input->post('signup_submit') != NULL )
       {
         // POST data
          $postData = $this->input->post();

        $this->load->model('Users_Model','u');
        $check=$this->u->checkuser($postData['email']);

        if ($check==true) {
          $this->load->view('register');
          echo "<p class='text-center' style='background: red;color: white'>This email already exist</p>";
        }
        else
        {
          // Read POST data
          $password=$postData['password'];
          $rpassword=$postData['password2'];
          
          if ($password==$rpassword) {
            
            $this->u->create_user($postData['name'],$postData['email'],$postData['password']);
             echo "Registration Successful";
              header("refresh:1;url= login");
          }
          else
          {
            echo "<script>alert('passwords do not match')</script>";
            header("refresh:1;url= register");
          }

        }
 
         

          
       }
	}

	public function login()
	{
		$this->load->view('login');

	    if($this->input->post('submit') != NULL )
          {
              // POST data
               $postData = $this->input->post();
              // Read POST data
                $username=$postData['email'];
                $this->session->set_userdata('username', $username);
                $password=$postData['password'];
               
               $this->load->model('Users_Model','um');
               $check=$this->um->logincheck($username,$password);
               if ($check==true) {
               	header('Location:dashboard');
               }
               else
               {
               	echo "<h1 class='text-center'>Your provided Information is not correct</h1>";
               }
 
   	      }

	}

  public function logout()
  {
    session_destroy();
    header("Location: login");
  }

     public function dashboard()
     {
          $this->load->model('Dashboard_Model','dash');
          $novena['novena']=$this->dash->getNovena();
          $this->load->view('dashboard',$novena);
          
     }

     public function forgotpass()
     {
      $username=$this->input->post('username');
      $_SESSION['forgotuser']=$username;
      $submit=$this->input->post('subpass');
      if (isset($submit)) {
        $this->load->model('Dashboard_Model','dash');
        $res=$this->dash->forgotpass($username);
        if ($res==true) {
          $temppass=$this->dash->changeforgotpass($username);

          //mail system start
          require 'PHPMailerAutoload.php';
          $mail = new PHPMailer;


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'showrov016@gmail.com';                 // SMTP username
$mail->Password = 'Blackunicorn016';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->SMTPDebug = false;
$mail->setFrom('no-reply@purgatorynovena.com', 'Admin');
$mail->addAddress($username);     // Add a recipient
//$mail->addAddress('Address');               // Name is optional

   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Password recovery';
$mail->Body    = "Your temporary password is '$temppass'";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//$mail->addAttachment('s.jpg');

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
echo "Your recovery password was sent to your email.";
$this->load->view('login');
          //mail system end
        }
        else
        {
          echo "Your Given Username Does Not Exist";
        }
      }
     }

     public function account()
     {
      $this->load->view('myaccount');
      $sub=$this->input->post('submit');
      if (isset($sub)) {
        $prevpass=$this->input->post('prevpass');
      $newpass=$this->input->post('newpass');
      $this->load->model('Users_Model','um');
      $changepermission=$this->um->checkper($prevpass,$_SESSION['username']);

      if ($changepermission==true) {
        $this->um->changepassword($newpass);
        echo "<h2 style='background: green;'>Password Changed</h2>";
      }
      else
      {
        echo "<h2 style='background: red;'>Old Password Does not Match</h2>";
      }
      }
      

      
      
      
     }
}