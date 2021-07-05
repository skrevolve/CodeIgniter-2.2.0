<?php
class News_model extends CI_Model {

    protected $table = 'news';

    public function __construct() {
        parent::__construct();
    }

    public function get_news($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get($this->table);
            return $query->result_array();
        }
        $query = $this->db->get_where($this->table, array('slug' => $slug));
        return $query->row_array();
    }
    
    public function set_news() {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        return $this->db->insert($this->table, $data);
    }
}