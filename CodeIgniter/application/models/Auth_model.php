<?php

class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function readdata()
    {
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->join('department', 'employee.dept_id = department.id');
        $this->db->where('employee_type', 2);
        $query = $this->db->get();
        return $query->result();
    }
}

?>