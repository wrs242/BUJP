<?php
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'conn.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from USER where USERNAME='$username' and PASSWORD= MD5 ('$password')");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:{{ url('dashboard') }}");
}else{
	header("location:{{ url('dashboard') }}?pesan=gagal");
}
?>