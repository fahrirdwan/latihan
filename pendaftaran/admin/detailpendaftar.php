<?php include('../config/auto_load.php'); ?>

<?php include('detailpendaftar_control.php'); ?>

<?php include('../template/header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Pendaftar</h1>

    <div class="row">

    <div class="col-md-6">
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
                <h5 class="card-title mb-3 text-center ">
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
                            $kelamin = "Perempuan";
                        }
                        ?>
                        <small class="text-muted"> <?= $kelamin ?> </small>
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

    <div class="col-md-6">
        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DATA NILAI PENDAFTAR</h6>
            </div>
            <div class="card-body">

                <?php
                if($data_nilai['status'] == 0) {
                    echo '<div class="alert alert-warning">
                    Data Pendaftar Belum di validasi

                </div>';
                } else if($data_nilai['status'] == 1) {
                    echo '<div class="alert alert-info">
                    Data Pendaftar Dinyatakan <b>Lolos</b>

                </div>';
                } else if($data_nilai['status'] == 2) {
                    echo '<div class="alert alert-danger">
                    Data Pendaftar Dinyatakan <b>Tidak Lolos</b>

                </div>';
                }    
                ?>

                <ul class="list-group">
                    <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Nilai Ujian Nasional</h6>
                        <small text-muted><?= $data_nilai['nilai_un'] ?></small>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Nilai Ujian Akhir Semester</h6>
                        <small text-muted><?= $data_nilai['nilai_uas'] ?></small>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Nilai Ujian Sekolah</h6>
                        <small text-muted><?= $data_nilai['nilai_us'] ?></small>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Nilai Ujian Rata-Rata</h6>
                        <small class="text-muted"><?= number_format(($data_nilai['nilai_uas'] + $data_nilai['nilai_un'] 
                        + $data_nilai['nilai_us']) / 3, 2) ?></small>
                    </li>
                </ul>

                <button type="button" class="btn btn-primary mt-3 btn-block" data-toggle="modal" data-target="#modalvalidasi">
                    Validasi Data Pendaftar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalvalidasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <form action="<?= $base_url ?>/admin/detailpendaftar.php?id=<?= $id_pendaftar ?>"
                        method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Penilaian data pendaftar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <label for="nilai">Beri Penilaian</label>
                        <select name="nilai" id="nilai" class="form-control" required>
                            <option value="">--- Pilih ---</option>
                            <option value="1">Lolos</option>
                            <option value="2">Tidak Lolos</option>
                        </select>    
                    
                    </div>
                    <div class="modal-footer">
                        <button name="simpan" value="simpan_nilai" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cencel</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <a href="pendaftaran.php" class="btn btn-primary">Kembali</a>
    </div>
    
    </div>
    
    
</div>
<!-- /.container-fluid -->


<?php include('../template/footer.php'); ?>