<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produtos extends Seeder
{
    public function run()
    {
        $nome = ['Notebook','Tablet','PC Gamer'];
        $desc = ['Novo','Novo','Novo'];
        $valor = [10000,3000,20000];

        for($x = 0; $x < 3; $x++){
            $data = [
                'nome' => $nome[$x],
                'descricao' => $desc[$x],
                'valor'    => $valor[$x],
            ];

            
            $this->db->table('produtos')->insert($data);
        }
    }
}