<?php

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create($formArray)
    {
        $this->db->insert('employee', $formArray);
    }
}

?>