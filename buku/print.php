<!-- ANISA NURFADILA DWI KARINA
20190140072
PKW C -->
<?php
        include '../config.php';
        $id_buku = $_GET['id_buku'];
        $mahasiswa = mysqli_query($koneksi,"select id_buku,nama_buku,penerbit,harga,diskon,b.id_kategori,k.nama_kategori from buku b join kategori k on b.id_kategori=k.id_kategori where id_buku='$id_buku'");
        
        while ($data = mysqli_fetch_assoc($mahasiswa)){
  ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title> <?php echo $data['nama_buku']?></title>
  </head>

  <body onload="window.print();">

            <div class="container mt-5">
                <p class="fw-bold">Data Buku</p>
                <p>Nama Buku : <?php echo $data['nama_buku']?></p>
                <p>Penerbit : <?php echo $data['penerbit']?></p>
                <p>Harga : <?php echo $data['harga']?></p>
                <p>Diskon : <?php echo $data['diskon']?></p>
                <p>Kategori : <?php echo $data['nama_kategori']?></p>
            </div>
            
    
<?php 
}
?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>