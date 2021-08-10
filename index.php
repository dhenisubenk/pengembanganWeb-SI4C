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
        <title>Pengembangan Web</title>
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
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                Kelas Akademik
                            </h5>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex officiis nostrum inventore mollitia aliquid dicta beatae nobis. Accusantium rerum quidem dolor pariatur! Dicta consequuntur sequi eos, autem totam recusandae corporis.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <img src="images/pexels-bich-tran-669996.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Home</h5>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex officiis nostrum inventore mollitia aliquid dicta beatae nobis. Accusantium rerum quidem dolor pariatur! Dicta consequuntur sequi eos, autem totam recusandae corporis.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                Kelas Akademik
                            </h5>
                            <p class="card-text"> 
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex officiis nostrum inventore mollitia aliquid dicta beatae nobis. Accusantium rerum quidem dolor pariatur! Dicta consequuntur sequi eos, autem totam recusandae corporis.
                            </p>
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
<?php } ?>