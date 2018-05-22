<?php 

session_start();

$user='hilman';
$pass='123';
if(isset($_POST['submit'])){
//jika belum di submit maka tidak ada proses
    if($_POST['nama'] == $user &&
       $_POST['pass'] == $pass){
       
      //session
      //menyimpan di server
      $_SESSION['nama_user'] =  $_POST['nama'];
        //mengambil nama-user sebagai contoh saja
        //memakai session wajib menggunakan session_start() biasanya diketik di atas sendiri
        //untuk menghapus data semua gunakan session_destroy()
        

        //pindah ke halaman lain saya ambil contoh profile.php
           header('Location : profile.php');
       }else{
           echo 'login gagal';
       }

}
?>