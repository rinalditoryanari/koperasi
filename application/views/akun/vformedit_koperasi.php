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
                                        <input type="text" name="id" id="id" value="<?= $data['id'];?>" required hidden>
                                        <input type="text" name="akun_id" id="akun_id" value="<?= $data['akun_id'];?>" required hidden>
                                        <label for="username" class="col-sm-2 col-form-label">Nama Koperasi</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="username" value="<?= $data['username'];?>"
                                                class="form-control" id="username" placeholder="Username" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for=pPassword" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="password" value="<?= $data['password'];?>"
                                                class="form-control" id="password" placeholder="Harga Ikan" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="ketua" class="col-sm-2 col-form-label">Ketua</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="ketua" value="<?= $data['ketua'];?>"
                                                class="form-control" id="ketua" placeholder="ketua" required>
                                        </div>
                                    </div> 

                                    <div class="form-group row">
                                        <label for="code" class="col-sm-2 col-form-label">Code</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="code" value="<?= $data['code'];?>"
                                                class="form-control" id="code" placeholder="Code" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="provinsi" class="col-sm-2 col-form-label">Provinsi</label>
                                        <div class="col-sm-10">
                                            <select id="selectProvinsi" name="provinsi" class="form-control" onchange="getKota()">
                                                <option selected hidden value="<?= $data['provinsi'];?>"><?= $data['provinsi'];?> (Terkini)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kota" class="col-sm-2 col-form-label">Kota/Kabupaten</label>
                                        <div class="col-sm-10">
                                            <select id="selectKota" name="kota" class="form-control" onchange="getKecamatan()">
                                                <option selected hidden value="<?= $data['kota'];?>"><?= $data['kota'];?> (Terkini)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                                        <div class="col-sm-10">
                                            <select id="selectKecamatan" name="kecamatan" class="form-control">
                                                <option selected hidden value="<?= $data['kecamatan'];?>"><?= $data['kecamatan'];?> (Terkini)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="alamat" value="<?= $data['alamat'];?>"
                                                class="form-control" id="alamat" placeholder="alamat" required>
                                        </div>
                                    </div>    

                                    <div class="box-footer">
                                        <a href="<?= base_url('C_akunMaster/')?>" class="btn btn-warning">Cancel</a>
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
<script src="<?= base_url(); ?>assets/js/koperasi-edit.js"></script>