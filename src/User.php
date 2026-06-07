<?php
namespace App;

class User
{
    protected string $nama;
    protected string $password;

    protected int $umur = 0;

    public function __construct(string $namaInput, string $passwordInput)
    {
        $this->nama = $namaInput;
        $this->password = $passwordInput;
    }

    public function setUmur(int $umurBaru){
        // $this->umur = $umurBaru;
        if($umurBaru < 17){
            return "Error: Usia minimal adalah 17 tahun untuk bisa mendaftar \n";
        }

        $this->umur = $umurBaru;
        return;
    }

    public function getProfile(){
        return "user {$this->nama} berusia {$this->umur} tahun \n";
    }
}