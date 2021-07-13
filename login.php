<!-- ANISA NURFADILA DWI KARINA
20190140072
PKW C -->
<?php
include 'config.php';
$respon['status'] = 0;
$respon['message'] = "";

   

    if(isset($_POST['btnLogin'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $query_user = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='".$username."' AND password='".$password."'");
        if(mysqli_num_rows($query_user) > 0){
            while ($data_user = mysqli_fetch_assoc($query_user)){
                $_SESSION['id_admin'] = $data_user['id_admin'];
                $_SESSION['username'] = $data_user['username'];
                $_SESSION['password'] = $data_user['password'];
                $_SESSION['nama_user'] = $data_user['nama_user'];
            }
            echo '<script type="text/javascript">';
            echo ' alert("login berhasil")';  //not showing an alert box.
            echo '</script>';
            ?>
            
            <?php
            @header('Location:buku/view_admin.php');

        }else{
            ?>
            <script type="text/javascript">
                alert("gagaal")
            </script>
            <?php
              @header('Location:login.php');
        }


    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="asset/style.css" rel='stylesheet' type='text/css' />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>TOGAMEDIA</title>
  </head>
  <body>
  <?php 
    include 'register.php'; 
    ?>

  <div class="container col-lg-5 mt-5">
            <div class="card ">
                    <div class="card-header bg-dark">
                        <h2 class="fw-bold text-lg-center text-white row-cols-sm-5">Login</h2>
                    </div>

                    <div class="card-body fw-bold">
                    <form method="post" action="">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="id" value="">
                        
                        </div>
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username-login" placeholder="Masukan Username" name="username"  value="">
                        </div>
                        
                        <div class="mb-3">
                            <label for="NIM" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password-login"placeholder="Masukan Password">
                        </div>
                        
                        
                      <center>  <button type="submit" class="btn btn-info " value="SIMPAN" name="btnLogin">LOGIN</button>
                      </center>
                        <p>Don't Have an Account ?<a href="#registerModal" data-bs-toggle="modal" data-bs-target="#registerModal">Create an account</a></p>
                        
                    </form>

                    
                    </div>
             </div>


  
       </div>     
        

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