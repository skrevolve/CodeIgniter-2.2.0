<?php
class Contact_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getData()
    {
        $query = $this->db->get('contacts');
        
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }else{
            show_error('Database is empty!');
        }
    }

    function slave_getData() {
        $query = $this->db2->get('member');

        if ($query->num_rows() > 0)
        {
            return $query->result();
        }else{
            show_error('Database is empty!');
        }
    }
}
?>