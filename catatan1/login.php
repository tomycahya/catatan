<?php 

$user='hilman';
$pass='123';
if(isset($_POST['submit'])){
//jika belum di submit maka tidak ada proses
    if($_POST['nama'] == $user &&
       $_POST['pass'] == $pass){
        //hanya satu halaman
        //arti kata && kondisi pertama sama kedua harus benar
        //keterangan jika nama sama dengan $user dan pass sama $pass maka proses dibawahnya   
           echo 'login berhasil';
       }else{
           echo 'login gagal';
       }
//diisi nama karena diambil dari name="nama"
//maka nanti setelah disubmit maka akan keluar nama
//metode post tidak akan menampilkan apa-apa di URL
}
?>

<form action="" method="post"> 
    <input type="text" name="nama">
    <input type="password" name="pass">
    <input type="submit" name="submit">
</form>

<?php 

$user='hilman';
$pass='123';
if(isset($_POST['submit'])){
//jika belum di submit maka tidak ada proses
    if($_POST['nama'] == $user &&
       $_POST['pass'] == $pass){
        
        //arti kata && kondisi pertama sama kedua harus benar
        //keterangan jika nama sama dengan $user dan pass sama $pass maka proses dibawahnya   

        //pindah ke halaman lain saya ambil contoh profile.php        
           header('Location : profile.php');
       }else{
           echo 'login gagal';
       }
//diisi nama karena diambil dari name="nama"
//maka nanti setelah disubmit maka akan keluar nama
//metode post tidak akan menampilkan apa-apa di URL
}
?>

<form action="" method="post"> 
    <input type="text" name="nama">
    <input type="password" name="pass">
    <input type="submit" name="submit">
</form>