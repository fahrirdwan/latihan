<?php

$all_pendaftar = mysqli_query($koneksi, "SELECT * FROM pendaftar, nilai WHERE pendaftar.id = nilai.pendaftar_id
AND nilai.status = 0");

if(!$all_pendaftar) {
    die('Query Error : '. mysqli_error($koneksi));
}

$jml_pendaftar = mysqli_query($koneksi, "SELECT * FROM pendaftar, nilai WHERE pendaftar.id = nilai.pendaftar_id");

if(!$jml_pendaftar) {
    die('Query Error : '. mysqli_error($koneksi));
}


$jml_lolos = mysqli_query($koneksi, "SELECT * FROM pendaftar, nilai WHERE pendaftar.id = nilai.pendaftar_id
AND nilai.status = 1");

if(!$jml_lolos) {
    die('Query Error : '. mysqli_error($koneksi));
}
?>