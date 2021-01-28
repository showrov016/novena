<?php

class Home extends CI_Controller
{
     public function __construct()
    {
        parent::__construct();
        $this->load->model('Pdf_Model','pf');      
    }
    public function index()
    {
        $this->load->view('home');
    }
    public function aboutus()
    {
        $this->load->view('aboutus');
    }
    public function how()
    {
        $this->load->view('how');
    }
    public function why()
    {
        $this->load->view('why');
    }
     public function products()
    {
        $this->load->view('products');
    }
     public function contact()
    {
        $this->load->view('contact');
    }
     public function faq()
    {
        $this->load->view('faq');
    }
    public function acknowledgement()
    {
        $this->load->view('acknowledgement');
    }
	public function createform()
	{
		$this->load->view('novenaform');
    }

}