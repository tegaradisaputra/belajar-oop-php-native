<?php
namespace App;

class Router
{
    private array $routes = [];

    public function get(string $url, mixed $callback){
        $this->routes['GET'][$url] = $callback;
    }

    public function run(){
        $currentUrl = $_SERVER['REQUEST_URI'];
        $currentMethod = $_SERVER['REQUEST_METHOD'];

        // cek apakah url dan method yang di akses user terdaftar di kantong kita?
        if(isset($this->routes[$currentMethod][$currentUrl])) {

            // kalo ada ambil fungsi callbacknya
            $action = $this->routes[$currentMethod][$currentUrl];

            // jalankan fungsinya
            return $action();
        }

        // kalo ngga ada ya 404 not found
        echo "ERROR: 404 NOT FOUND";
    }
}