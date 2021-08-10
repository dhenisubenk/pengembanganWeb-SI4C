<?php  
    session_start();
    require_once 'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Shubhan R">
        <meta name="description" content="Dokumen HTML Pertama Saya">
        <meta name="keyword" content="web,stikom,ambon">
        <title>Login - Pengembangan Web</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body{
                background-color: rgb(242, 255, 255);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-auto mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Halaman Login</h5>
                            <?php  
                                if (isset($_POST['login'])) 
                                {
                                    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
                                    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

                                    if (empty($username) || empty($password)) {
                                        echo '<div class="text-danger">Username / Password kosong</div>';
                                    }else{
                                        //cek username -> sql
                                        $sql = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");
                                        $count = mysqli_num_rows($sql);
                                        if ($count > 0) {
                                            # username ada...
                                            $r = mysqli_fetch_array($sql);
                                            # cek password
                                            if (password_verify($password, $r['password'])) {
                                                # true -> buat session...
                                                $_SESSION['websi4c_user'] = $r['username'];
                                                $_SESSION['websi4c_level'] = $r['level'];
                                                echo "<meta http-equiv='refresh' content='0; url=index.php'>";
                                            }else{
                                                # false -> password salah
                                                echo '<div class="text-danger">Password Salah.</div>';
                                            }
                                        }else {
                                            # username tidak ada
                                            echo '<div class="text-danger">Username Salah.</div>';
                                        }
                                    }
                                }
                            ?>

                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control" name="username" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" name="password" required="">
                                </div>
                                <div class="form-group d-grip mt-3">
                                    <button class="btn btn-primary" name="login">Login</button>
                                </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="profil.html">Profil</a></li>
            <li><a href="kontak.html">Kontak</a></li>
        </ul>
        <div class="container">
            <h1>Pengembangan Web</h1>  

            <p>
                <img src="images/coding (1).png" alt="coding" width="64">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam explicabo dolorum recusandae at voluptates nobis error consequuntur asperiores eum maiores soluta, veniam molestiae tempore et iste dignissimos totam. Provident, nulla. Coca&nbsp;Cola 
            </p>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis fugiat provident eum fuga quia fugit! Repellat eligendi, consequatur rem laboriosam, beatae corporis vitae, voluptatum nam atque animi nihil iste eius!</p>
        </div> -->
        
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>