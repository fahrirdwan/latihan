<?php include('../config/auto_load.php'); ?>

<?php include('dashboard_control.php'); ?>

<?php include('../template/header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
    <div class="row">
        <div class="col-md-12">
            <?php if(isset($_SESSION['pesan_sukses'])) { ?>
            
            <div class="alert alert-success">
                <?= $_SESSION['pesan_sukses'] ?>
            </div>

            <?php } ?>
        </div>
        <div class="col-md-6">
                    
            <div class="row">
                <?php if(!isset($status)) { ?>
                    <div class="col-md-12">
                        <!-- Illustrations -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">MASUKKAN DATA NILAI</h6>
                            </div>
                            <div class="card-body">
                                <p class="text-danger"> * Masukkan nilai hasil ujian anda untuk menyelesaikan proses pendaftaran!</p>
                                    <form class="user" method="POST" action="<?= $base_url ?>/siswa/dashboard.php">
                                        <div class="form-group">
                                            <label for="un">Nilai Ujian Nasional</label>
                                            <input type="number" name="un" class="form-control" id="un" placeholder="Masukan Nilai...">
                                        </div>
                                        <div class="form-group">
                                            <label for="uas">Nilai Ujian Akhir Semester</label>
                                            <input type="number" name="uas" class="form-control" id="uas" placeholder="Masukan Nilai...">
                                        </div>
                                        <div class="form-group">
                                            <label for="us">Nilai Ujian Sekolah</label>
                                            <input type="number" name="us" class="form-control" id="us" placeholder="Masukan Nilai...">
                                        </div>  
                                        <div class="text-right">
                                        <button type="submit" name="btn_simpan" value="simpan_nilai" class="btn btn-primary">Simpan</button>
                                        <a href="dashboard.php" class=" btn btn-danger">Kembali</a>
                                        </div>  
                                        
                                        
                                    </form>
                            </div>
                        </div>
                    </div>
                <?php } else if(isset($status) && $status == 0) { ?>
                    
                    <div class="col-md-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">PENGUMUMAN HASIL SELEKSI</h6>
                            </div>
                            <div class="card-body">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3 mt-3">Proses Penilaian</h5>
                                        <div class="col-auto">
                                            <i class="fas fa-spinner text-warning" style="font-size: 90px;"></i>
                                        </div>
                                        <p class="card-text">Terima kasih telah melakukan pendaftaran di SMA JAYAPURA. Pengumuman pada tanggal:</p>
                                        <span class="badge badge-danger" style="font-size: 17px;">1 Januari 2021</span>
                                    </div>
                                    <div class="card-footer">
                                        <marquee style="margin-bottom: -5px;">SMA Jayapura - PAPUA </marquee>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    
                <?php } else if(isset($status) && $status == 1) { ?>
                    
                    <div class="col-md-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">PENGUMUMAN HASIL SELEKSI</h6>
                            </div>
                            <div class="card-body">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3 mt-3">ANDA LOLOS</h5>
                                        <div class="col-auto">
                                            <i class="fas fa-check text-success" style="font-size: 90px;"></i>
                                        </div>
                                        <p class="card-text">Selamat anda lolos seleksi di SMA JAYAPURA lakukan daftar ulang pada tanggal :</p>
                                        <span class="badge badge-danger" style="font-size: 17px;">3 Januari 2021</span>
                                    </div>
                                    <div class="card-footer">
                                        <marquee style="margin-bottom: -5px;">SMA Jayapura - PAPUA </marquee>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                <?php } else if(isset($status) && $status == 2) { ?>    

                    <div class="col-md-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">PENGUMUMAN HASIL SELEKSI</h6>
                            </div>
                            <div class="card-body">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3 mt-3">ANDA TIDAK LOLOS</h5>
                                        <div class="col-auto">
                                            <i class="fas fa-times text-danger" style="font-size: 90px;"></i>
                                        </div>
                                        <p class="card-text">Anda belum lolos. Terima kasih telah mengikuti seleksi dengan baik.</p>
                                    </div>
                                    <div class="card-footer">
                                        <marquee style="margin-bottom: -5px;">SMA Jayapura - PAPUA </marquee>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } 
                unset($_SESSION['pesan_sukses']);

                ?>   
                

                <div class="col-md-12" >
               <div class="card shadow mb-4" >
                <div class="card-header py-3" >
                    <h6 class="m-0 font-weight-bold text-primary">Persyaratan Daftar Ulang</h6>
                </div>
                <div class="card-body">
                    <p>Siswa yang lolos seleksi wajib melakukan daftar ulang dengan membawa berkas sebagai berikut: </p>

                    <!--dari bootstrap -->
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            1. FC AKTA
                            <span class="badge badge-info badge-pill">1 Lembar</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            2. FC Kartu Keluarga
                            <span class="badge badge-info badge-pill">1 Lembar</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            3. FC Nilai Ujian Nasional
                            <span class="badge badge-info badge-pill">2 Lembar</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            4. FC Nilai Ujian Sekolah
                            <span class="badge badge-info badge-pill">2 Lembar</span>
                        </li>
                    </ul>
                    <p class="text-danger mt-3">* Wajib melakukan Daftar Ulang pada tanggal: 17 Januari 2021</p>
                </div>
            </div>
        </div>             

                
            </div>

        </div>
                <div class="col-md-6">
                    <div class="row">
                    <div class="col-md-12">
                    <!-- Illustrations -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DATA DIRI</h6>
                        </div>
                        <div class="card-body">
                            <div class="col-auto mt-3 text-center">
                                <?php
                                if(isset($data_pendaftar['foto'])) {
                                    $foto = '../uploads/' . $data_pendaftar['foto'];
                                } else {
                                    $foto = '../assets/img/poto.jpg'; 
                                }

                                ?>
                                <img src="<?= $foto ?>" alt="fotoprofile" class="img-fluid rounded-circle" alt="menunggu" style="width: 200px; 
                                height: 200px;">
                            </div>
                            <br>
                            <div class="text-right">
                                <a href="editprofil.php" class="btn btn-warning btn-sm">Edit Profil</a>
                            </div>
                            <h5 class="text-center card-title mt-3" style="color: black;">
                            <?= $data_pendaftar['nama'] ?>
                            </h5>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h6 class="mb-0" style="color: black;">Tempat, Tanggal lahir</h6>
                                    <small class="text-muted"><?= $data_pendaftar['tmpt_lahir'] ?>, <?= date("d-m-Y", strtotime
                                    ($data_pendaftar['tgl_lahir'])); ?></small>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-0" style="color: black;">Jenis Kelamin</h6>
                                    <?php
                                    if($data_pendaftar['jenis_kelamin'] == 'L') {
                                        $kelamin = "Laki-Laki";
                                    }else {
                                        $kelamin = "perempuan";
                                    }
                                    ?>
                                    <small class="text-muted"><?= $kelamin ?></small>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-0" style="color: black;">Agama</h6>
                                    <small class="text-muted"><?= $data_pendaftar['agama'] ?></small>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-0" style="color: black;">Alamat</h6>
                                    <small class="text-muted"><?= $data_pendaftar['alamat'] ?></small>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-0" style="color: black;">E-mail</h6>
                                    <small class="text-muted"><?= $data_pendaftar['email'] ?></small>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-0" style="color: black;">Nomor Telepon</h6>
                                    <small class="text-muted"><?= $data_pendaftar['telepon'] ?></small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

</div>
<!-- /.container-fluid -->

<?php include('../template/footer.php'); ?>