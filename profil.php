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
                            <h5 class="card-title">Profil</h5>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>NAMA</th>
                                        <th>JURUSAN</th>
                                        <th>ALAMAT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>190203041</td>
                                        <td>Jamaludin</td>
                                        <td>Sistem Informasi</td>
                                        <td>Galunggung</td>
                                    </tr>
                                    <tr>
                                        <td>190203042</td>
                                        <td>Mahmud</td>
                                        <td>Sistem Informasi</td>
                                        <td>Waihaong</td>
                                    </tr>
                                    <tr>
                                        <td>190203043</td>
                                        <td>Andika</td>
                                        <td>Teknik Informatika</td>
                                        <td>Waihaong</td>
                                    </tr>
                                    <tr>
                                        <td>190203045</td>
                                        <td>Wati</td>
                                        <td>Manajemen Informatika</td>
                                        <td>Galunggung</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p id="cetak"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <script>
            //variabel  
            var nama = "Mahmud";
            var uts = 80;
            var uas = 78;
            var tugas = 75;
            var na = uts * 0.3 + uas * 0.3 + tugas * 0.4;
            var status;   
            var grade;   
            
            var x = 5;
            var y = 2;
            
            if(na >= 80 && na <= 100){
                grade = "A";
            }else if(na >= 70){
                grade = "B";
            }else if(na >= 60){
                grade = "C";
            }else if(na >= 50){
                grade = "D";
            }else{
                grade = "E";
            }

            switch (grade) {
                case 'A':
                case 'B':
                case 'C':
                    status = "LULUS";
                    break;
                case 'D':
                    status = "PERBAIKAN";
                    break;
                case 'E':
                    status = "TIDAK LULUS";
                    break;
                default:
                    status = "-";
                    break;
            }

            var d = new Date();
            var tahun = d.getFullYear();
            var bulan = d.getMonth() + 1;
            var tanggal = d.getDate();

            //inner HTML
            document.getElementById("cetak").innerHTML = "<b>Nama : </b> " + nama + "<br><b>Nilai Akhir : </b> " + na + "<br><b>Grade : </b> " + grade + "<br><b>Status : </b> " + status;
            // document.write("Halo " + nama);
            alert(tanggal+"/"+bulan+"/"+tahun);
            // console.log("Halo " + nama);

            //for
            // nilai awal, kondisi, statement, incerement/dec
            // for(i=1; i<=5; i++){
            //     console.log(i);
            // }

            //while
            // var i = 1;
            // while(i<=6)
            // {
            //     console.log(i);
            //     i++;
            // }

            //do while
            var i = 1;
            do{
                console.log(i);
                i++;
            }
            while(i <= 7);


        </script>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>