<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Router;
use App\Database;
use App\User;

$router = new Router();

$router->get('/', function() {
    echo "welcome to HomePage";
});

$router->get('/about', function() {
    echo "welcome to AboutPage";
});

$router->get('/users', function() {
    // $db = new Database;

    // $koneksi = $db->connect();

    // if ($koneksi) {
    //     echo "Koneksi ke database sukses";
    // } else {
    //     echo "koneksi gagal";
    // }

    $userModel = new User();

    $dataUsers = $userModel->all();

    echo "===== DATA USERS DARI DATABASE ===== \n";

    print_r($dataUsers);
});

$router->run();


// // ambil URL yang sedang di akses saat ini
// $url = $_SERVER['REQUEST_URI'];

// // ambil methodnya (get, psot, put, delete)
// $method = $_SERVER['REQUEST_METHOD'];

// // echo "lo lagi akses URL " . $url . "<br>";

// // echo "pake method: " . $method . "<br>";

// switch($url){
//     case "/":
//         echo "Welcome to HomePage!";
//         break;
//     case "/about":
//         echo "This is AboutPage!";
//         break;
//     default:
//         echo "Error: 404 NOT FOUND";
// }







// use App\User;
// use App\Admin;


// $user1 = new User("John Doe", "JohnDoe26");

// echo $user1->setUmur(25);

// echo $user1->getProfile();



// $admin1 = new Admin("He Yu", "HeYu26");

// echo $admin1->setUmur(24);

// echo $admin1->getProfile();

// echo $admin1->hapusPostingan();

// echo $admin1->gantiNamaAdmin("Zhang Linghe");

// echo $admin1->getProfile();