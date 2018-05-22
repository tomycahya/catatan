<?php 

$user='hilman';
$pass='123';
if(isset($_POST['submit'])){
//jika belum di submit maka tidak ada proses
    if($_POST['nama'] == $user &&
       $_POST['pass'] == $pass){
       
        //arti kata && kondisi pertama sama kedua harus benar
        //keterangan jika nama sama dengan $user dan pass sama $pass maka proses dibawahnya  
        
        //cookie menyimpan datanya di browser
        //setcookie(key,nilai,expire)
        setcookie('nama_user', $_POST['nama'],time()+120);
        //yaitu nilainya dari yang kita masukkan di form login terus maksud +120 berarti masa kadaluarsa 2 detik
        //jika pengen sehari dikali aja, kalau ingin kadaluarsa tanda + diganti -

        //pindah ke halaman lain saya ambil contoh profile.php
           header('Location : profile.php');
       }else{
           echo 'login gagal';
       }

}
?>