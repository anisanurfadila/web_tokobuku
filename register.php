<!-- ANISA NURFADILA DWI KARINA
20190140072
PKW C -->
<?php
     include 'config.php';

     if(isset($_POST['btnRegister'])){
     $nama_admin = $_POST['nama_admin'];
     $username = $_POST['username'];
     $password = $_POST['password'];

     $cek_user_query = mysqli_query($koneksi,"select count (*) from admin where username= '".$username."'" );
        if(mysqli_num_rows($cek_user_query) >1){
           
            echo '<script type="text/javascript">';
            echo ' alert("register gagal user telah ada")';  //not showing an alert box.
            echo '</script>';
            
        }
        else{
            echo '<script>alert("Register sukses");</script>';
            mysqli_query($koneksi,"insert into admin values('','$nama_admin','$username','$password')");
            header("location:login.php");
       
        }
    }


?>
                <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="" method="post">
                                
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                
                                
                                
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_admin" placeholder="Masukan Nama Lengkap" name="nama_admin" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="type" class="form-control" id="username" placeholder="Masukan Username" name="username" required>
                                </div>
                                
                                
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" class="form-control" placeholder="Masukan Password" name="password" required></input>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                   
                                     <button type="submit" name="btnRegister" class="btn btn-primary">Register</button>
             
                                </div>
            
                            </form>
            
                        </div>
                    </div>
                    </div>
            </div>