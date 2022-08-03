<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class ProdutosController extends ResourceController
{
    private $produtosModel;

    public function __construct(){
        $this->produtosModel = new \App\Models\ProdutosModel();
    }
    
    public function listar(){
        $data = $this->produtosModel->findAll();
        return $this->response->setJson($data);
    }

    public function produto($id){
        $data = $this->produtosModel->getProduto($id);
        return $this->response->setJson($data);
    }
}