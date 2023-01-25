<?php include('../config/auto_load.php'); ?>

<?php include('editprofil_control.php'); ?>

<?php include('../template/header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">EDIT PROFIL</h1>
    <form class="user" method="POST" action="<?= $base_url ?>/siswa/editprofil.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8">
                    
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama" 
                                            value="<?= $data_pendaftar['nama'] ?>">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir"
                                            value="<?= $data_pendaftar['tmpt_lahir'] ?>">
                                            </div>
                                            <div class="col-md-6">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir"
                                            value="<?= $data_pendaftar['tgl_lahir'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <?php
                                            $laki = "";
                                            $perempuan = "";

                                            if($data_pendaftar['jenis_kelamin'] == "L") {
                                                $laki = "checked";
                                            } else {
                                                $perempuan = "checked";
                                            }
                                            ?>
                                            <div class="form-check">
                                                <input type="radio" name="jenis_kelamin" value="L" class="form-check-input" id="laki" <?= $laki ?>>
                                                <label for="laki" class="form-check-label">Laki-Laki</label>    
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" name="jenis_kelamin" value="P" class="form-check-input" id="perempuan" <?= $perempuan ?>>
                                                <label for="perempuan" class="form-check-label">Perempuan</label>    
                                            </div>
                                            
                                            </div>
                                            <div class="col-md-6">
                                                <label for="agama">Agama</label>
                                                <select name="agama" id="agama" class="form-control">
                                                    <option value="">PIlih Agama</option>
                                                    <option value="islam" <?php if($data_pendaftar['agama'] == 'islam'){ echo "selected"; } ?>>Islam</option>
                                                    <option value="kristen" <?php if($data_pendaftar['agama'] == 'kristen'){ echo "selected"; } ?>>Kristen</option>
                                                    <option value="hindu" <?php if($data_pendaftar['agama'] == 'hindu'){ echo "selected"; } ?>>Hindu</option>
                                                    <option value="budha" <?php if($data_pendaftar['agama'] == 'budha'){ echo "selected"; } ?>>Budha</option>
                                                    <option value="katolik" <?php if($data_pendaftar['agama'] == 'katolik'){ echo "selected"; } ?>>Katolik</option>
                                                    <option value="konghucu" <?php if($data_pendaftar['agama'] == 'konghucu'){ echo "selected"; } ?>>Konghucu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea name="alamat" id="alamat" class="form-control"><?= $data_pendaftar['alamat'] ?></textarea>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?= $data_pendaftar
                                            ['email'] ?>">
                                            </div>
                                            <div class="col-md-6">
                                            <label for="telepon">Telepon</label>
                                            <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Telepon" value="<?= $data_pendaftar
                                            ['telepon'] ?>">
                                            </div>
                                        </div>
                                        <!--<div class="form-group row">
                                            <div class="col-md-6">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                            </div>
                                            <div class="col-md-6">
                                            <label for="ulangi_password">Ulangi Password</label>
                                            <input type="password" name="ulangi_password" class="form-control" id="ulangi_password" placeholder="Ulangi Password">
                                            </div>
                                        </div -->

                                       
                    
            </div>
            <div class="col-md-4">

                            <?php
                                if(isset($data_pendaftar['foto'])) {
                                    $foto = '../uploads/' . $data_pendaftar['foto'];
                                } else {
                                    $foto = '../assets/img/poto.jpg'; 
                                }

                            ?>
                            <img src="<?= $foto ?>" alt="fotoprofile" class="img-fluid" style="width: 400px">

                            <input type="file" name="gambar" class="form-control mt-3"> 
            </div>
            <div class="col-md-12">
                <button type="submit" name="btn_simpan" value="simpan_profil" class="btn btn-primary mb-5">Ubah</button>
                <a href="dashboard.php" class="btn btn-danger mb-5">Kembali</a>
            </div>
        </div>
    </form>


</div>
<!-- /.container-fluid -->

<?php include('../template/footer.php'); ?>