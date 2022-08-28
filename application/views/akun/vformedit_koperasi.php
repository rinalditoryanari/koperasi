<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header card">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Koperasi</h1>
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
                                <form method="post" action="<?= base_url('C_akunMaster/updatekoperasi') ?>" class="form-horizontal">

                                    <div class="form-group row">
                                        <input type="hidden" name="id" value="<?= $data['id'];?>"
                                            class="form-control" id="id" required>
                                        <label for="nama" class="col-sm-2 col-form-label">Nama Koperasi</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama" value="<?= $data['nama'];?>"
                                                class="form-control" id="nama" placeholder="nama" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="kecamatan" value="<?= $data['kecamatan'];?>"
                                                class="form-control" id="kecamatan" placeholder="Kecamatan" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="alamat" value="<?= $data['alamat'];?>"
                                                class="form-control" id="alamat" placeholder="alamat" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ketua" class="col-sm-2 col-form-label">Ketua</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="ketua" value="<?= $data['ketua'];?>"
                                                class="form-control" id="ketua" placeholder="ketua" required>
                                        </div>
                                    </div>                                    
                                    <div class="box-footer">
                                        <a href="<?= base_url('C_akunMaster/allkoperasi')?>" class="btn btn-warning">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Update</button>

                                    </div>

                                </form>
                                <?php endif;?>
                                <?php if ($this->session->userdata('tipe_akun')==2) : ?>
                                <form method="post" action="<?= base_url('C_akun/update') ?>" class="form-horizontal">

                                    <div class="form-group row">
                                        <input type="hidden" name="akun_id" value="<?= $data['akun_id'];?>"
                                            class="form-control" id="akun_id" required>
                                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="username" value="<?= $data['username'];?>"
                                                class="form-control" id="username" placeholder="Username" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for=pPassword" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password" value="<?= $data['password'];?>"
                                                class="form-control" id="password" placeholder="Harga Ikan" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="code" class="col-sm-2 col-form-label">Code</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="code" value="<?= $data['code'];?>"
                                                class="form-control" id="code" placeholder="Code" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tipe" class="col-sm-2 col-form-label">Type</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="tipe" value="<?= $data['tipe'];?>"
                                                class="form-control" id="tipe" placeholder="Type" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="id_nelayan" class="col-sm-2 col-form-label">Nelayan</label>
                                        <div class="col-sm-10">
                                            <select name="id_nelayan" id="id_nelayan" class="form-control" required="">
                                                <?php foreach ($list_nelayan as $lc) : ?>
                                                <option value="<?= $lc['id_nelayan']; ?>"><?= $lc['nama_nelayan']; ?> -
                                                    <?= $lc['kapal_nelayan']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="box-footer">
                                        <a href="<?= base_url('C_akun')?>" class="btn btn-warning">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Update</button>

                                    </div>

                                </form>
                                <?php endif;?>
                            </div>

                        </div>
                    </div>
                    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="<?= base_url(); ?>assets/js/penjualan.js"></script>