<?php
class Contact_model extends CI_Model {

    protected $table1 = 'contacts';
    protected $table2 = 'member';

    function __construct() {
        parent::__construct();
    }

    function getData() {
        $query = $this->db->get($this->table1);
        
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            $empty = '정보가 없습니다.';
            return $empty;
        }
    }

    function slave_getData() {
        $query = $this->db2->get($this->table2);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            $empty = '정보가 없습니다.';
            return $empty;
        }
    }
}
?>