<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model');
    }
    public function pembayaran_get()
    {
        $data = $this->Pembayaran_model->getAllPembayaran();
        $this->response($data, RestController::HTTP_OK);
    }
}
