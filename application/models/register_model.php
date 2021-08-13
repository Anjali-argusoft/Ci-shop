<?php

class Register_model extends CI_Model{

    public function insertUser($data)
    {
        $this->db->insert('user', $data);  
        return $this->db->insert_id();
    }
}
?>