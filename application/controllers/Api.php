<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('Pembayaran_sppt_model');
    }
    public function pelanggan_get()
    {
        $id = $this->input->get('id');
        if ($id == '') {
            $data = $this->db->get('tbl_pelanggan')->result();
        } else {
            $this->db->where('id_pelanggan', $id);
            $data = $this->db->get('tbl_pelanggan')->result();
        }
        $this->response($data, 200);
    }
}
