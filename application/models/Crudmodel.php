<?php
class Crudmodel extends CI_model
{
    public function getRecords()
    {
        $query = $this->db->get('emp_details');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function getTotal()
    {
        $query = $this->db->query('SELECT * FROM `emp_details`');
        return $query->num_rows();
    }
}
