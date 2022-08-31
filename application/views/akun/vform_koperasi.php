<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header card">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Koperasi</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="col-sm-12">
                            <div class="content-header">
                            <?php
                                if ($this->session->flashdata('flash4')) :
                                ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-ban"></i>Lengkapi Semua Data!</h5>
                                    Isi semua data yang dibutuhkan
                                </div>
                                <?php
                                endif;
                                ?>
                                <?php
                                if ($this->session->flashdata('flash3')) :
                                ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-ban"></i>Proses Gagal</h5>
                                </div>
                                <?php
                                endif;
                                ?>
                                <!-- select -->
                                <?php if ($this->session->userdata('tipe_akun')==3) : ?>
                                    <form method="post" action="<?= base_url('C_akunMaster/tambah_koperasi') ?>"
                                        class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="username" class="col-sm-2 col-form-label">Nama Koperasi</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="username" class="form-control" id="username"
                                                    placeholder="Koperasi ...." required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="password" class="form-control" id="password"
                                                    placeholder="Password" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="ketua" class="col-sm-2 col-form-label">Ketua</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="ketua" class="form-control" id="ketua"
                                                    placeholder="Ketua" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="code" class="col-sm-2 col-form-label">Code</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="code" class="form-control" id="code"
                                                    placeholder="Code" value="<?php echo $code ?>"  readonly="true">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tipe" class="col-sm-2 col-form-label">Type</label>
                                            <div class="col-sm-10">
                                                <select name="tipe" id="tipe" class="form-control" disabled>
                                                    <option value="2">Super Admin</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="provinsi" class="col-sm-2 col-form-label">Provinsi</label>
                                            <div class="col-sm-10">
                                                <select id="selectProvinsi" name="provinsi" class="form-control" onchange="getKota()">
                                                    <option>-</option></select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="kota" class="col-sm-2 col-form-label">Kota/Kabupaten</label>
                                            <div class="col-sm-10">
                                                <select id="selectKota" name="kota" class="form-control" onchange="getKecamatan()">
                                                    <option disabled selected hidden>Pilih Kota</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                                            <div class="col-sm-10">
                                                <select id="selectKecamatan" name="kecamatan" class="form-control">
                                                    <option disabled selected hidden>Pilih Kecamatan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="alamat" class="form-control" id="alamat"
                                                    placeholder="Alamat" required>
                                            </div>
                                        </div>

                                        
                                        <!-- <div class="form-group row">
                                            <label for="provinsi" class="col-sm-2 col-form-label">Provinsi</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="provinsi" class="form-control" id="provinsi"
                                                    placeholder="Provinsi" required>
                                            </div>
                                        </div> -->

                                        <div class="box-footer">
                                            <a href="<?= base_url('C_akunMaster')?>" class="btn btn-warning">Cancel</a>
                                            <button type="submit" class="btn btn-primary">Simpan</button>

                                        </div>

                                    </form>
                                <?php
                                    endif;
                                ?>

                            </div>

                        </div>
                    </div>
                    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="<?= base_url(); ?>assets/js/koperasi.js"></script>