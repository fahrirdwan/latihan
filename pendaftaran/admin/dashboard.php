<?php include('../config/auto_load.php'); ?>

<?php include('dashboard_control.php'); ?>

<?php include('../template/header.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
    <div class="row">
    <div class="col-md-6">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-info text-uppercase mb-1">Pendaftaran Masuk

                                <div class="h5 mt-3 font-weight-bold">
                                    <?= mysqli_num_rows($jml_pendaftar) ?> Orang
                                </div>
                            </div>
                            <div class="row no-gutters align-items-center">
                                
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 54%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300" style="font-size: 80px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="col-md-6">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success text-uppercase mb-1">Lolos Seleksi

                                <div class="h5 mt-3 font-weight-bold"> 
                                <?= mysqli_num_rows($jml_lolos) ?> Orang
                                </div>
                            </div>
                            <div class="row no-gutters align-items-center">
                                
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 27%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300" style="font-size: 80px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="mt-3">
    <h2 class="text-gray-800">Data Pendaftar Baru</h2>
    <div class="row">
        <div class="col-md-12">
        <table class="table table-bordered table-hover">
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>UAS</td>
                <td>UN</td>
                <td>US</td>
                <td>Rata"</td>
                <td>Status</td>
            </tr>

            <?php
            $no = 1;
            while($p = mysqli_fetch_array($all_pendaftar)) { ?>
            
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $p['nama'] ?></td>
                <td><?= $p['alamat'] ?></td>
                <td><?= $p['nilai_uas'] ?></td>
                <td><?= $p['nilai_un'] ?></td>
                <td><?= $p['nilai_us'] ?></td>
                <td>
                    <?= ($p['nilai_uas'] + $p['nilai_un'] +$p['nilai_us']) / 3 ?>
                </td>
                <td><span class="badge badge-info">BARU</span></td>
            </tr>
            
            <?php } 
            
            if(mysqli_num_rows($all_pendaftar) == 0) {
                echo "<tr><td colspan='8' align='center'><b>Belum ada pendaftar</b></td></tr>";
            }
            ?>
        </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php include('../template/footer.php'); ?>