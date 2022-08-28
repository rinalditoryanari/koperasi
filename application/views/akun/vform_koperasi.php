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
                                    <h5><i class="icon fas fa-ban"></i>Data Salah!</h5>
                                    Pastikan jumlah tidak 0
                                </div>
                                <?php
                                endif;
                                ?>
                                <!-- select -->
                                <?php if ($this->session->userdata('tipe_akun')==3) : ?>
                                    <form method="post" action="<?= base_url('C_akunMaster/tambah_koperasi') ?>"
                                        class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama Koperasi</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nama" class="form-control" id="nama"
                                                    placeholder="nama" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="kecamatan" class="form-control" id="kecamatan"
                                                    placeholder="kecamatan" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="alamat" class="form-control" id="alamat"
                                                    placeholder="alamat" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="ketua" class="col-sm-2 col-form-label">Ketua</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="ketua" class="form-control" id="ketua"
                                                    placeholder="ketua" required>
                                            </div>
                                        </div>


                                        <div class="box-footer">
                                            <a href="<?= base_url('C_akunMaster/allkoperasi')?>" class="btn btn-warning">Cancel</a>
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