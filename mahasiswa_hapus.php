<?php  
	require_once 'config/koneksi.php';

	if (isset($_GET['nim'])) {
		
		$nim = $_GET['nim'];

		$sql = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim = '$nim'");

		if ($sql) {
    		# true...
    		echo "<script>
	    		alert('Data berhasil dihapus');
	    		window.location.href = 'mahasiswa.php';
	    	</script>";
    	}else{
    		# false
    		echo "<script>
	    		alert('Terjadi kesalahan');
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