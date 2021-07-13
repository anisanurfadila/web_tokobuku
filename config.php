<!-- ANISA NURFADILA DWI KARINA
20190140072
PKW C -->
<?php
//koneksi ke database. "" merupakan password phpmyadmin
$koneksi = mysqli_connect("localhost", "root", "", "web_tokobuku");

//cek koneksi ke database
//apabila error
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_errno();
}
?>