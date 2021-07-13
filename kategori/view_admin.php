<!-- ANISA NURFADILA DWI KARINA
20190140072
PKW C -->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        
        <link href="../asset/style.css" rel='stylesheet' type='text/css' />
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
                        <a class="nav-link active" aria-current="page" href="../buku/view_admin.php">Buku</a>
                        <a class="nav-link active" aria-current="page" href="../kategori/view_admin.php">Kategori</a>
                        <a class="nav-link active" aria-current="page" href="../logout.php">Logout</a>
               
                    </div>
                </div>
            </div>
        </nav>




        <div class="container data-mahasiswa mt-5">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Data Kategori
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="tambah.php" name="form">
                    
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                    
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" placeholder="Masukan Nama Kategori" name="nama_kategori" required>
                    </div>
               
                    
                    
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" value="SIMPAN">TAMBAH</button>
                    </div>

                </form>

            </div>
        </div>
        </div>


        
        </div>

        <div class="card" style="padding:5%;background-color: #eddcd2;">


            <table class="table table-striped" id="tabelMahasiswa">
                <thead>
                    <tr>
                        <th scope="col">No. </th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                include '../config.php';
                //membuat variabel untuk nomor mahasiswa yang akan diincrement
                $no = 1;
                //query
                $mahasiswa = mysqli_query($koneksi, "select * from kategori");
                //looping data mahasiswa
                while ($data = mysqli_fetch_array($mahasiswa)){
                ?>
                    <!--menampilkan data mahasiswa ke dalam tabel-->
                    <tr>
                        <!--increment nomor baris $no++ -->
                        <td><?php echo $no++; ?></td>
                        <!--menampilkan data-->
                        <td><?php echo $data['nama_kategori']; ?></td>
                        
                        <!--kolom ini untuk aksi data mahasiswa-->
                        <td>
                            <!--  btn-sm agar tombolnya kecil-->
                           <!-- link untuk masuk ke halaman edit-->
                            <!-- edit.php?id=< -->
                                <!-- ?php echo $data['id'];?> --> 
                            <a href="#"  class="btn btn-warning btn-sm text-white"data-bs-toggle="modal" data-bs-target="#UPDATEMODAL<?php echo $data['id_kategori']; ?>">EDIT</a>
                            <!-- link untuk delete berdasarkan id, akan keluar confirm terlebih dahulu-->
                            <a href="hapus.php?id_kategori=<?php echo $data['id_kategori']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data kategori ini?')">HAPUS</a>
                        </td>
                    </tr>





                    <div class="modal fade" id="UPDATEMODAL<?php echo $data['id_kategori']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="edit.php?id_kategori=<?php echo $data['id_kategori']; ?>" name="form">
                    
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                    
                    <div class="mb-3">
                            <input type="hidden" class="form-control" name="id_kategori" value="<?php echo $data['id'];?>">
                        
                        </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" value="<?php echo $data['nama_kategori']; ?>" name="nama_kategori" required>
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