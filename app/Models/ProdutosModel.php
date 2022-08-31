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

    public function getProdutos($limit){
        $query = $this->db->query("SELECT * FROM produtos limit ".$limit);
        $result = $query->getResultArray();
        return $result;
    }
}