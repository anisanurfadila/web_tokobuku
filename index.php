<!-- ANISA NURFADILA DWI KARINA
20190140072
PKW C -->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link href="asset/style.css" rel='stylesheet' type='text/css' />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        

        <title>TOGAMEDIA</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">TOGAMEDIA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNovAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </nav>




        <div class="container data-mahasiswa mt-5">




        


            <table class="table table-striped" id="tabelMahasiswa">
                <thead>
                    <tr>
                    <th scope="col">No. </th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Diskon</th>
                        <th scope="col">Kategori</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                include 'config.php';
                //membuat variabel untuk nomor mahasiswa yang akan diincrement
                $no = 1;
                //query
                $buku = mysqli_query($koneksi, "select * from buku");
                //looping data mahasiswa
                while ($data = mysqli_fetch_array($buku)){
                ?>
                    <!--menampilkan data mahasiswa ke dalam tabel-->
                    <tr>
                        <!--increment nomor baris $no++ -->
                        <td><?php echo $no++; ?></td>
                        <!--menampilkan data-->
                        <td><?php echo $data['nama_buku']; ?></td>
                        <td><?php echo $data['penerbit']; ?></td>
                        <td><?php echo $data['harga']; ?></td> 
                        <td><?php echo $data['diskon']; ?></td> 
                        <?php 
                            $idkat = $data['id_kategori'];
                            $namakategori = mysqli_query($koneksi, "select nama_kategori from kategori where id_kategori='$idkat'");
                            while ($hasilnama = mysqli_fetch_array($namakategori)){
                                
                        ?>
                        <td><?php echo $hasilnama['nama_kategori']?></td> 
                        <?php 
                    }
                    ?>
                        <!--kolom ini untuk aksi data mahasiswa-->
                       
                    </tr>
                <?php
                }
                ?>
            </tbody>
            </table>   
    
        </div> 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#tabelMahasiswa').DataTable();
            });
        </script>


    </body>
</html>