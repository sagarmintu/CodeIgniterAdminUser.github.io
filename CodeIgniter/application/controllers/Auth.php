<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        redirect("auth/login", "refresh");
    }

	public function login()
	{
        //echo "login page";
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        if($this->form_validation->run() == TRUE)
        {
            $name = $_POST['name'];
            $password = md5($_POST['password']);

            $this->db->select("*");
            $this->db->from("employee");
            $this->db->where(array('name' => $name, 'password' => $password));
            $query = $this->db->get();
            $user = $query->row();

            if ($user->email) 
            {
                if($user->employee_type == '1')
                {
                    $this->session->set_flashdata("success", "Your logged in");
                    $_SESSION['user_logged'] = TRUE;
                    $_SESSION['name'] = $user->name;
                    redirect("user/admin", "refresh");
                }
                else
                {
                    $this->session->set_flashdata("success", "Your logged in");
                    $_SESSION['user_logged'] = TRUE;
                    $_SESSION['name'] = $user->name;
                    redirect("user/profile", "refresh");
                }
                
            } 
            else 
            {
                $this->session->set_flashdata("error", "No such account created");
                redirect("auth/login", "refresh");
            }
            
        }
		$this->load->view('login');
	}
}
?>