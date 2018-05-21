# perbedaan metode GET DAN POST


//GET
<?php 
if(isset($_GET['submit'])){
//jika belum di submit maka tidak ada proses
echo $_GET['nama'];
//diisi nama karena diambil dari name="nama"
//maka nanti setelah disubmit maka akan keluar nama
//kekurangan dari method Get adalah ketika kita mengetikkan nama dan password maka akan tampil di url
}
?>

<form action="" method="get"> 
    <input type="text" name="nama">
    <input type="password" name="pass">
    <input type="submit" name="submit">
</form>


//POST
<?php 
if(isset($_POST['submit'])){
//jika belum di submit maka tidak ada proses
echo $_POST['nama'];
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