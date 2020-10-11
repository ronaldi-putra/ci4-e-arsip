<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_dep extends Model
{
    public function all_data()
    {
        return $this->db->table('tbl_dep')
            ->orderBy('id_dep', 'desc')
            ->get()
            ->getResultArray();
    }

    public function tambah($data)
    {
        $this->db->table('tbl_dep')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('tbl_dep')
            ->where('id_dep', $data['id_dep'])
            ->update($data);
    }

    public function hapus($data)
    {
        $this->db->table('tbl_dep')
            ->where('id_dep', $data['id_dep'])
            ->delete($data);
    }
}
