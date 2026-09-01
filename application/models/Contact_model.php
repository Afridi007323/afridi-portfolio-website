<?php
class Contact_model extends CI_Model {
    public function save_contact($data) {
        return $this->db->insert('contact_form', $data);
    }
}