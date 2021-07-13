<!-- ANISA NURFADILA DWI KARINA
20190140072
PKW C -->
<?php 
include '../config.php';

$id_buku = $_GET['id_buku'];

mysqli_query($koneksi,"delete from buku where id_buku='$id_buku'");

header("location: view_admin.php");

?>