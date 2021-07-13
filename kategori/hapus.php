<!-- ANISA NURFADILA DWI KARINA
20190140072
PKW C -->
<?php 
include '../config.php';

$id_kategori = $_GET['id_kategori'];

mysqli_query($koneksi,"delete from kategori where id_kategori='$id_kategori'");

header("location: view_admin.php");

?>