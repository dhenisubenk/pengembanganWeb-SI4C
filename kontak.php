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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kontak</h5>
                            <form action="">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Subjek</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Pesan</label>
                                    <textarea name="" class="form-control"></textarea>
                                </div>
                                <div class="form-group d-grid gap-2 mt-2">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kontak</h5>
                            <form action="">
                                <div class="form-group row mb-2">
                                    <label for="" class="col-3">Username</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-3">Password</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group mt-2 row">
                                    <div class="col-9 offset-3 d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
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