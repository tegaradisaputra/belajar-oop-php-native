<?php
namespace App;

class Admin extends User
{
    public function hapusPostingan(){
        return "Sukses: Admin baru saja menghapus postingan yang toxic! \n";
    }

    public function gantiNamaAdmin(string $value){
        $this->nama = $value;
        return "boom nama menjadi {$this->nama} \n";
    }
}