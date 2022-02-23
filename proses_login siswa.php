<?php
if($_POST) {
    $username = $_POST['NISN'];

    include "koneksi.php";
        $query_login=mysqli_query($koneksi, "SELECT * FROM siswa where nisn = '".$username."'");
        echo "SELECT * FROM siswa where nisn = '".$username.".";

    if(mysqli_num_rows($query_login)>0) {
        $data_login=mysqli_fetch_array($query_login);
        session_start();
        $_SESSION['nisn']=$data_login['nisn'];
        $_SESSION['nama']=$data_login['nama'];
        $_SESSION['status_login']=true;
        $_SESSION['level']='siswa';
        echo "<script>alert('Login Berhasil');location.href='home.php';</script>";
    }else{
        echo"<script>alert('Login Gagal');location.href='index.php';</script>";
        
    }
    }

?>