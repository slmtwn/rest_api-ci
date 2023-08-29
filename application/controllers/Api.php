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
    public function pelanggan_get($id = '')
    {
        $check_data = $this->db->get_where('tbl_pelanggan', ['id_pelanggan' => $id])->row_array();
        if ($id) {
            if ($check_data) {
                $data = $this->db->get_where('tbl_pelanggan', ['id_pelanggan' => $id])->row_array();
                $this->response($data, RestController::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'Data tidak ditemukan'
                ], RestController::HTTP_NOT_FOUND);
            }
        } else {
            $data = $this->db->get('tbl_pelanggan')->result();
            $this->response($data, RestController::HTTP_OK);
        }
    }
    public function pelanggan_post()
    {
        $data = [
            'nm_pelanggan' => $this->post('nm_pelanggan'),
            'alamat_pelanggan' => $this->post('alamat_pelanggan'),
            'status' => $this->post('status'),
            'no_hp' => $this->post('no_hp'),
            'id_layanan' => $this->post('id_layanan')
        ];
    }
}
