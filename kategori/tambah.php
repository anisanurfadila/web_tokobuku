<!-- ANISA NURFADILA DWI KARINA
20190140072
PKW C -->
<?php
     include '../config.php';

     $nama_kategori = $_POST['nama_kategori'];

     mysqli_query($koneksi,"insert into kategori values('','$nama_kategori')");
     header("location:view_admin.php");
     

?>