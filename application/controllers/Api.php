<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{
    public function pelanggan_get()
    {
        $data = $this->db->get('tbl_pelanggan')->result();
        $this->response($data, RestController::HTTP_OK);
    }
}
