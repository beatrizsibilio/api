<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutosModel extends Model
{
    protected $table      = 'produtos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'descricao', 'valor'];

    public function getProduto($id){
        return $this->asArray()->where(['id'=>$id])->first(); 
    }
}