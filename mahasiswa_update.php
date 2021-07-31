<?php
	require_once 'config/koneksi.php';

	$nim = filter_var($_POST['nim'], FILTER_SANITIZE_STRING);
    $nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);
    $jurusan = filter_var($_POST['jurusan'], FILTER_SANITIZE_STRING);
    $alamat = htmlspecialchars($_POST['alamat']);

    //isset(var) -> cek var sudah diset/belum
    //empty(var) -> cek var kosong/tidak

    if (empty($nim) || empty($nama) || empty($alamat)) 
    {
    	# jika kosong...
    	echo "<script>
    		alert('Data tidak boleh Kosong');
    		window.location.href = 'mahasiswa.php';
    	</script>";
    }
    else
    {
    	# simpan -> INSERT
    	$update = mysqli_query($con, "UPDATE mahasiswa SET nama = '$nama', jurusan = '$jurusan', alamat = '$alamat' WHERE nim = '$nim'");

    	if ($update) {
    		# true...
    		echo "<script>
	    		alert('Data berhasil diupdate');
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
?>