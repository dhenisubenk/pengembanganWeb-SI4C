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
        <title>Data User</title>
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
                            <h2>Form Input User</h2>
                            <form action="user_simpan.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" name="password" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Level</label>
                                    <select name="level" class="form-control">
                                        <option>Admin</option>
                                        <option>User</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" name="foto" class="form-control" required="">
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
                            <h5 class="card-title">Data User</h5>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                        require_once 'config/koneksi.php';
                                        $sql = mysqli_query($con, "SELECT * FROM user");
                                        while ($r = mysqli_fetch_array($sql)) 
                                        {
                                            echo "<tr>
                                                    <td><img src='images/user/$r[foto]' width='75' class='img-thumbnail'></td>
                                                    <td>$r[username]</td>
                                                    <td>$r[level]</td>
                                                    <td>
                                                        <a href='' class='btn btn-sm btn-warning'>Edit</a>
                                                        <a href='' onclick=\"return confirm('Hapus Data?')\" class='btn btn-sm btn-danger'>Hapus</a>
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