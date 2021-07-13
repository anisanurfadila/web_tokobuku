<!-- ANISA NURFADILA DWI KARINA
20190140072
PKW C -->
<?php 
    include '../config.php';

    $id_buku = $_GET['id_buku'];

    $nama_buku = $_POST['nama_buku'];
    $penerbit = $_POST['penerbit'];
    $harga = $_POST['harga'];
    $diskon = $harga/10;
    $id_kategori = $_POST['id_kategori'];

    mysqli_query($koneksi, "update buku set nama_buku='$nama_buku',penerbit='$nama_buku',harga='$harga',diskon='$diskon',id_kategori='$id_kategori' where id_buku='$id_buku'");
    header("location:view_admin.php");
?>



