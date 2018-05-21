# Require : jika script error maka proses akan berhenti
# Include : Jika script error maka proses dibawahnya terus proses
# Require_once/include_once : apabila terdapat dua perintah sama maka 
        diabaikan

    contoh
    //mengambil file dari header.php
     <?php  require_once('header.php') ?>

# implode : array to string
# explode : string to array

    //contoh implode
    <?php 
    $pekerjaan = ["programmer", "designer", "manager"];
    echo implode(" | ", $pekerjaan);
    ?>
    //maka hasilnya =>  programmer | designer | manager

    echo "br";

    //contoh explode
    <?php 
    $pelajaran = "html css javascript php";
    print(explode("", $pelajaran));
    ?>
    //maka hasilnya => array([0]=>html[1]=>css[2]=>javascript[3]=>php)

# fungsi date
    <?php 
    echo date('d - M - Y');
    ?>
    //maka hasilnya 15 - May - 2016(sesuai tanggal pembuatan fungsi date)
    bisa dilihat di google fungsi datenya