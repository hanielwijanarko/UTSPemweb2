<?php

class Buku_model extends CI-Controller {
    public function getAllBuku()
    {
        return $query = $this->db->get('buku')->result_array();
    }
}