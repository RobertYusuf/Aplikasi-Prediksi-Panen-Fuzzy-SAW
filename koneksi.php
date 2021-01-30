<?php
$host = 'localhost';
$user = 'root';
$pass ='';
$dbname ='db_fix';
$con = new mysqli($host, $user, $pass, $dbname);

// $db = new mysqli($db)

if ($con) {
    // echo 'koneksi berhasil';
} else {
    echo 'koneksi gagal';
}

?>
