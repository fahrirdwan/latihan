<?php

$id_user = $_SESSION['id_users'];
$sql_pendaftar = "SELECT * FROM pendaftar where users_id = '$id_user'";
$result_pendaftar = mysqli_query($koneksi, $sql_pendaftar);

if(mysqli_num_rows($result_pendaftar)) {
    $data_pendaftar = mysqli_fetch_array($result_pendaftar);
    $id_pendaftar = $data_pendaftar['id'];

    $sql_nilai ="SELECT * FROM nilai where pendaftar_id = '$id_pendaftar'";
    $result_nilai = mysqli_query($koneksi, $sql_nilai);

    
    if(mysqli_num_rows($result_nilai)) {
        $data_nilai = mysqli_fetch_array($result_nilai);
        $status = $data_nilai['status'];

    }else{
       // echo "error ". mysqli_error($koneksi);
         //   die;
    }

    
    
    if(isset($_POST['btn_simpan']) && $_POST['btn_simpan'] == 'simpan_nilai') {
        
        $un = $_POST['un'];
        $uas = $_POST['uas'];
        $us = $_POST['us'];

        $sql_insert_nilai ="INSERT INTO nilai (nilai_un, nilai_uas, nilai_us, status, pendaftar_id)
        values ('$un', '$uas', '$us', 0, '$id_pendaftar')";

        $query_insert_nilai = mysqli_query($koneksi, $sql_insert_nilai);

        if($query_insert_nilai)  {
            header('location:dashboard.php');
        }else {
            echo "error ". mysqli_error($koneksi);
            die;
        }
    }

}


?>