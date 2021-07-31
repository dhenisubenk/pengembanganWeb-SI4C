<?php  
    require_once 'config/koneksi.php';

    if (isset($_GET['nim'])) {
        
        $nim = $_GET['nim'];
        
        $sql = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
        $jml = mysqli_num_rows($sql);   // -> jumlah baris yang dihasilkan dari query

        if ($jml > 0) {
           $r = mysqli_fetch_array($sql);
        }else{
            echo "<script>
                alert('Data Tidak ditemukan');
                window.location.href = 'mahasiswa.php';
            </script>";
        }
    }
    else
    {
        echo "<script>
                window.location.href = 'mahasiswa.php';
            </script>";
    }
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
                    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                        <div class="container">
                          <a class="navbar-brand" href="index.html">STIKOM<strong>AMBON</strong></a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                              <a class="nav-link" href="profil.html">Profil</a>
                              <a class="nav-link" href="kontak.html">Kontak</a>
                            </div>
                          </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h2>Form Input Mahasiswa</h2>
                            <form action="mahasiswa_update.php" method="POST">
                                <div class="form-group">
                                    <label for="">Nim</label>
                                    <input type="text" name="nim" class="form-control" value="<?= $r['nim']?>" required="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="<?= $r['nama']?>" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <select name="jurusan" class="form-control">
                                        <option <?php if($r['jurusan'] == "Sistem Informasi"){ echo "selected"; }?> >Sistem Informasi</option>
                                        <option <?php if($r['jurusan'] == "Teknik Informatika"){ echo "selected"; }?>>Teknik Informatika</option>
                                        <option <?php if($r['jurusan'] == "Manajemen Informatika"){ echo "selected"; }?>>Manajemen Informatika</option>
                                        <option <?php if($r['jurusan'] == "Komputerisasi Akuntansi"){ echo "selected"; }?>>Komputerisasi Akuntansi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="<?= $r['alamat']?>" required="">
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" name="cetak" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>