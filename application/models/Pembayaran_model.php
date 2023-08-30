<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pembayaran_model extends CI_Model
{
    public function getAllPembayaran()
    {
        $this->db->where('THN_PAJAK_SPPT', '2023');
        $this->db->where('KODETP', 'POS');
        //$this->db->where('KD_KELURAHAN', '006');
        return $this->db->get('VW_BAYAR_PBB')->result_array();
    }
}
