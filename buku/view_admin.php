<!-- ANISA NURFADILA DWI KARINA
20190140072
PKW C -->
<?php 
    include '../config.php'; 
    ?>
    
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        
        <link href="../asset/style.css" rel='stylesheet' type='text/css' />
        <title>TOGAMEDIA</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-atomic="punya anisa nurfadila dwi karina">
            <div class="container">
                <a class="navbar-brand" href="#">TOGAMEDIA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNovAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="../buku/view_admin.php">Buku</a>
                        <a class="nav-link active" aria-current="page" href="../kategori/view_admin.php">Kategori</a>
                        <a class="nav-link active" aria-current="page" href="../logout.php">Logout</a>
               
                    </div>
                </div>
            </div>
        </nav>




    <div class="container data-mahasiswa mt-5" aria-atomic="punya anisa nurfadila dwi karina">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Data Buku
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="tambah.php" name="form">
                    
                <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Buku</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Buku</label>
                        <input type="text" class="form-control" id="nama_buku" placeholder="Masukan Nama Buku" name="nama_buku" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="NIM" class="form-label">Penerbit</label>
                        <input type="type" class="form-control" id="penerbit" placeholder="Masukan Penerbit" name="penerbit" required>
                    </div> 
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="harga" placeholder="Masukan Harga" name="harga" required>
                    </div>
                          
  
                        <div class="mb-3">
                                <label for="tahun">Kategori</label>
                                <select name="kategori" id="kategori">
                                    <option disabled selected> Pilih </option>
                                    <?php 
                                        $sql=mysqli_query($koneksi,"SELECT * FROM kategori");
                                    while ($data=mysqli_fetch_array($sql)) {
                                    ?>
                                         <option value="<?=$data['id_kategori']?>"><?=$data['nama_kategori']?></option> 
                                    <?php
                                    }
                                    ?>
                                </select>
                            
                            
                            </div>
                </div>
                            
                    
                    
                    <div class="modal-footer" aria-atomic="punya anisa nurfadila dwi karina">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="btnTambah" class="btn btn-primary">TAMBAH</button>
                    </div>
                </form>

            </div>
        </div>
        


        
        </div>

        <div class="card" style="padding:5%;background-color: #eddcd2;">


            <table class="table table-striped" id="tabelMahasiswa">
                <thead>
                    <tr>
                    <th scope="col">No. </th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Diskon</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                include '../config.php';
                //membuat variabel untuk nomor mahasiswa yang akan diincrement
                $no = 1;
                //query
                $mahasiswa = mysqli_query($koneksi, "select * from buku");
                //looping data mahasiswa
                while ($data = mysqli_fetch_array($mahasiswa)){
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
                        <td>
                            <!--  btn-sm agar tombolnya kecil-->
                            <a href="print.php?id_buku=<?php echo $data['id_buku']; ?>" class="btn btn-success btn-sm text-white">PRINT</a>
                            <!-- link untuk masuk ke halaman edit-->
                            <!-- edit.php?id=< -->
                                <!-- ?php echo $data['id'];?> --> 
                            <a href="#"  class="btn btn-warning btn-sm text-white"data-bs-toggle="modal" data-bs-target="#UPDATEMODAL<?php echo $data['id_buku']; ?>">EDIT</a>
                            <!-- link untuk delete berdasarkan id, akan keluar confirm terlebih dahulu-->
                            <a href="hapus.php?id_buku=<?php echo $data['id_buku']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data kategori ini?')">HAPUS</a>
                        </td>
                    </tr>





        <div class="modal fade" id="UPDATEMODAL<?php echo $data['id_buku']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" aria-atomic="punya anisa nurfadila dwi karina">
        <div class="modal-dialog">
            <div class="modal-content">
            <form method="post" action="edit.php?id_buku=<?php echo $data['id_buku']; ?>" name="form">
                    
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                    
                    <div class="mb-3">
                            <input type="hidden" class="form-control" name="id_buku" value="<?php echo $data['id_buku'];?>">
                        
                        </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Buku</label>
                        <input type="text" class="form-control" id="nama_buku" value="<?php echo $data['nama_buku']; ?>" name="nama_buku" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" value="<?php echo $data['penerbit']; ?>" name="penerbit" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="harga" value="<?php echo $data['harga']; ?>" name="harga" required>
                    </div>
               
                    <div class="mb-3">
                                <label for="tahun">Kategori</label>
                                <select name="id_kategori" id="id_kategori">
                                    <option disabled selected> Pilih </option>
                                    <?php 
                                        $sql=mysqli_query($koneksi,"SELECT * FROM kategori");
                                    while ($data2=mysqli_fetch_array($sql)) {
                                    ?>
                                         <option value="<?=$data2['id_kategori']?>"><?=$data2['nama_kategori']?></option> 
                                    <?php
                                    }
                                    ?>
                                </select>
                            
                            
                    </div>
                    
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" value="SIMPAN">EDIT</button>
                    </div>

                </form>

            </div>
        </div>
        </div>
                <?php
                }
                ?>
            </tbody>
            </table>   
    </div>
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