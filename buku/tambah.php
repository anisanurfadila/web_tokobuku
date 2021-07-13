<!-- ANISA NURFADILA DWI KARINA
20190140072
PKW C -->
<?php
     include '../config.php';

     $nama_buku = $_POST['nama_buku'];
     $penerbit = $_POST['penerbit'];
     $harga = $_POST['harga'];
     $diskon = $harga/10;
     $id_kategori = $_POST['kategori'];

     mysqli_query($koneksi,"insert into buku values('','$nama_buku','$penerbit','$harga','$diskon','$id_kategori')");
     header("location:view_admin.php");
     

?>