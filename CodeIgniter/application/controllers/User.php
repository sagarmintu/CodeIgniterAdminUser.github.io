<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_Model');
        if($_SESSION['user_logged'] == FALSE)
        {
            $this->session->set_flashdata("error", "Please login first to view this page !!");
            redirect("auth/login");
        }
    }

    public function profile()
	{
        if($_SESSION['user_logged'] == FALSE)
        {
            $this->session->set_flashdata("error", "Please login first to view this page !!");
            redirect("auth/login");
        }
        $this->load->view('profile');
    }

    public function admin()
	{
        if($_SESSION['user_logged'] == FALSE)
        {
            $this->session->set_flashdata("error", "Please login first to view this page !!");
            redirect("auth/login");
        }
        $results=$this->Auth_Model->readdata();
        $this->load->view('admin', ['result'=>$results]);
    }

    public function create()
    {
        $this->load->view('create');
    }
}