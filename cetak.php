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
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                Hitung BMI
                            </h5>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jk" class="form-control">
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Tahun Lahir</label>
                                    <input type="text" class="form-control" name="tahun_lahir">
                                </div>
                                <div class="form-group">
                                    <label for="">Tinggi Badan (m)</label>
                                    <input type="text" class="form-control" name="tinggi_badan">
                                </div>
                                <div class="form-group">
                                    <label for="">Berat Badang (Kg)</label>
                                    <input type="text" class="form-control" name="berat_badan">
                                </div>
                                <div class="form-group mt-2">
                                    <button type="submit" name="hitung" class="btn btn-primary">Hitung BMI</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php
                        if(isset($_POST['hitung']))
                        {
                            $nama = $_POST['nama'];
                            $jk = $_POST['jk'];
                            $tahun_lahir = $_POST['tahun_lahir'];
                            $tb = $_POST['tinggi_badan'];
                            $bb = $_POST['berat_badan'];
                            $kategori = "";
                            $bmi = round($bb / ($tb * $tb));

                            if($jk == "Perempuan")
                            {
                                //perempuan
                                if($bmi >= 27){
                                    $kategori = "Obesitas";
                                }else if($bmi >= 25){
                                    $kategori = "Gemuk";
                                }else if($bmi >= 18){
                                    $kategori = "Normal";
                                }else{
                                    $kategori = "Kurus";
                                }
                            }
                            else
                            {
                                //laki2
                                //perempuan
                                if($bmi >= 27){
                                    $kategori = "Obesitas";
                                }else if($bmi >= 23){
                                    $kategori = "Gemuk";
                                }else if($bmi >= 17){
                                    $kategori = "Normal";
                                }else{
                                    $kategori = "Kurus";
                                }
                            }
                    ?>
                    <div class="card mt-2">
                        <div class="card-body">
                            <h5 class="card-title">
                                Hasil Perhitungan BMI
                            </h5>
                            <table class="table table-borderless">
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?= $nama ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td><?= $jk ?></td>
                                </tr>
                                <tr>
                                    <td>Umur</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>BMI</td>
                                    <td>:</td>
                                    <td><?= $bmi?></td>
                                </tr>
                                <tr>
                                    <td>Kategori</td>
                                    <td>:</td>
                                    <td><?= $kategori ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>