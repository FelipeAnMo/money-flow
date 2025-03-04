<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class ApiController extends BaseController
{
    use ResponseTrait;

    protected $RequestOrigin;

    public function __construct()
    {
        $this->RequestOrigin = 'http://localhost:3001';
    }

    public function getData()
    {
        $this->response->setHeader('Access-Control-Allow-Origin', $this->RequestOrigin);
        $this->response->setHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $this->response->setHeader('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        $data = [
            "message" => "Hello from PHP backend!",
            "status" => "success"
        ];

        return $this->respond($data);
    }
}