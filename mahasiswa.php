<?php 
    session_start(); 
    if (empty($_SESSION['websi4c_user'])) {
        echo "<script>
                alert('Silahkan Login dulu');
                window.location.href = 'login.php';
            </script>";
    }
    else
    {
        $user = $_SESSION['websi4c_user'];
        $level = $_SESSION['websi4c_level'];
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
        <!-- <title>Pengembangan Web</title>
        <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body{
                background-color: rgb(242, 255, 255);
            }
        </style>
    </head>
    <body>
        <div class="container-fluid mb-2 p-0">
            <div class="row">
                <div class="col-lg-12">
                    <?php require_once 'config/menu.php'; ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h2>Form Input Mahasiswa</h2>
                            <form action="mahasiswa_save.php" method="POST">
                                <div class="form-group">
                                    <label for="">Nim</label>
                                    <input type="text" name="nim" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <select name="jurusan" class="form-control">
                                        <option>Sistem Informasi</option>
                                        <option>Teknik Informatika</option>
                                        <option>Manajemen Informatika</option>
                                        <option>Komputerisasi Akuntansi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" required="">
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" name="cetak" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Mahasiswa</h5>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>NAMA</th>
                                        <th>JURUSAN</th>
                                        <th>ALAMAT</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    require_once 'config/koneksi.php';
                                    $sql = mysqli_query($con, "SELECT * FROM mahasiswa");
                                    while($r = mysqli_fetch_array($sql))
                                    {
                                        echo "<tr>
                                                <td>$r[nim]</td>
                                                <td>$r[nama]</td>
                                                <td>$r[jurusan]</td>
                                                <td>$r[alamat]</td>
                                                <td>
                                                    <a href='mahasiswa_edit.php?nim=$r[nim]' class='btn btn-sm btn-warning'>Edit</a>
                                                    <a href='mahasiswa_hapus.php?nim=$r[nim]' onclick=\"return confirm('Hapus Data?')\" class='btn btn-sm btn-danger'>Hapus</a>
                                                </td>
                                            </tr>";
                                    }
                                    
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php } ?>