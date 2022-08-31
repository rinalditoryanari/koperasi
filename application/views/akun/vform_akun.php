<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header card">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Akun</h1>
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
                                    <h5><i class="icon fas fa-ban"></i>Data Salah!</h5>
                                    Pastikan jumlah tidak 0
                                </div>
                                <?php
                                endif;
                                ?>
                                <!-- select -->
                                <?php if ($this->session->userdata('tipe_akun')==3) : ?>
                                    <form method="post" action="<?= base_url('C_akunMaster/tambah_akun') ?>"
                                        class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="username" class="form-control" id="username"
                                                    placeholder="Username" required>
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
                                            <label for="code" class="col-sm-2 col-form-label">Code</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="code" class="form-control" id="code"
                                                    placeholder="Code" required>
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

                                        <!-- <div class="form-group row">
                                            <label for="id_nelayan" class="col-sm-2 col-form-label">Nelayan</label>
                                            <div class="col-sm-10">
                                                <select name="id_nelayan" id="id_nelayan" class="form-control" required="">
                                                    <option value="">Pilih Nama Nelayan - Nama Kapal</option>
                                                    <?php foreach ($list_nelayan as $lc) : ?>
                                                    <option value="<?= $lc['id_nelayan']; ?>"><?= $lc['nama_nelayan']; ?> -
                                                        <?= $lc['kapal_nelayan']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div> -->

                                        <div class="form-group row">
                                            <label for="asal" class="col-sm-2 col-form-label">Asal</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="asal" class="form-control" id="asal"
                                                    placeholder="Asal Lokasi Koperasi" required>
                                            </div>
                                        </div>


                                        <div class="box-footer">
                                            <a href="<?= base_url('C_akunMaster')?>" class="btn btn-warning">Cancel</a>
                                            <button type="submit" class="btn btn-primary">Simpan</button>

                                        </div>

                                    </form>
                                <?php
                                    endif;
                                ?>

                                <?php if ($this->session->userdata('tipe_akun')==2) : ?>
                                    <form method="post" action="<?= base_url('C_akun/tambah_akun') ?>"
                                        class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="username" class="form-control" id="username"
                                                    placeholder="Username" required>
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
                                            <label for="code" class="col-sm-2 col-form-label">Code</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="code" class="form-control" id="code"
                                                    placeholder="Code" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tipe" class="col-sm-2 col-form-label">Type</label>
                                            <div class="col-sm-10">
                                                <select name="tipe" id="tipe" class="form-control" required>

                                                    <option value="">- Pilih Tipe -</option>
                                                    <option value="0">Nelayan</option>
                                                    <option value="1">Admin</option>
                                                    <option value="2">Super Admin</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="id_nelayan" class="col-sm-2 col-form-label">Nelayan</label>
                                            <div class="col-sm-10">
                                                <select name="id_nelayan" id="id_nelayan" class="form-control" required="">
                                                    <option value="">Pilih Nama Nelayan - Nama Kapal</option>
                                                    <?php foreach ($list_nelayan as $lc) : ?>
                                                    <option value="<?= $lc['id_nelayan']; ?>"><?= $lc['nama_nelayan']; ?> -
                                                        <?= $lc['kapal_nelayan']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="box-footer">
                                            <a href="<?= base_url('C_akun')?>" class="btn btn-warning">Cancel</a>
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
<script src="<?= base_url(); ?>assets/js/penjualan.js"></script>