<?php  
	require_once 'config/koneksi.php';

	$username = $_POST['username'];
	$pass = $_POST['password'];		//admin
	$level = $_POST['level'];
	$password = password_hash($pass, PASSWORD_DEFAULT); 
	
	// 2 arah enkrip > decrypt
	// 1 arah -> hash
	
	$nama_file = $_FILES['foto']['name'];			//Gambar.PNG
	$tmp_file = $_FILES['foto']['tmp_name'];
	$tipe_file = $_FILES['foto']['type'];
	$ukuran_file = $_FILES['foto']['size'];

	//get tipe file
	$step1 = strtolower($nama_file);	//gambar.png
	$step2 = explode(".", $step1);		// ["gambar","png"]
	$tipe = end($step2);				// png

	// validasi -> tipe file
	if ($tipe != "png" && $tipe != "jpeg" && $tipe != "jpg") 
	{
		# jika file tidak suport...
		echo "<script>
    		alert('File tidak Support!');
    		window.location.href = 'user.php';
    	</script>";
	}
	else if ($ukuran_file > 1000000) // validasi -> ukuran file
	{
		echo "<script>
    		alert('File tidak boleh > 1MB!');
    		window.location.href = 'user.php';
    	</script>";
	}
	else
	{
		// simpan ke db -> nama file
		$simpan = mysqli_query($con, "INSERT INTO user (username, password, level, foto) VALUES ('$username','$password','$level','$nama_file')");

    	if ($simpan) {
    		# true...
    		// fisik copy ke dir web
    		move_uploaded_file($tmp_file, "images/user/".$nama_file);
    		echo "<script>
	    		alert('Data berhasil ditambahkan');
	    		window.location.href = 'user.php';
	    	</script>";
    	}else{
    		# false
    		echo "<script>
	    		alert('Terjadi kesalahan');
	    		window.location.href = 'user.php';
	    	</script>";
    	}
	}
?>