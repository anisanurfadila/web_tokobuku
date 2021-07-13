<!-- ANISA NURFADILA DWI KARINA
20190140072
PKW C -->
<?php 
    include'../config.php';

    $id_kategori = $_GET['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];

    mysqli_query($koneksi, "update kategori set nama_kategori='$nama_kategori' where id_kategori='$id_kategori'");
    header("location:view_admin.php");
?>