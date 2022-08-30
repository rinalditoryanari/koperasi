<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header card">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Koperasi</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <?php if ($this->session->userdata('tipe_akun')==3) : ?>
            <a href="<?= base_url('C_akunMaster/form_koperasi') ?>"><button type="button" class="btn btn-primary">+ Data
                    Koperasi</button></a>
            <br>
            <br>
            <?php endif;?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Koperasi</h3>
                            <div class="card-tools">
                                <form method="GET" action="<?= base_url('C_akunMaster/allkoperasi'); ?>">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Username">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Koperasi</th>
                                        <th>Code</th>
                                        <th>Password</th>
                                        <th>Ketua</th>
                                        <th>Alamat</th>
                                        <th>Kecamatan</th>
                                        <th>Kota/Kabupaten</th>
                                        <th>Provinsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if ($this->session->userdata('tipe_akun')==3) : ?>
                                    <?php
                                    if (empty($all_akun['data'])) : ?>
                                    <tr>
                                        <td colspan="5">
                                            <div class="alert alert-danger" role="alert">Data Not Found!</div>
                                        </td>
                                    </tr>
                                    <?php
                                    endif;
                                    $no = 0;
                                    foreach ($all_akun['data'] as $a) :
                                    ?>
                                    <tr>
                                        <td align=""><?= ++$no; ?></td>
                                        <td><?= $a['username']; ?></td>
                                        <td><?= $a['code']; ?></td>
                                        <td><?= $a['password']; ?></td>
                                        <td><?= $a['ketua']; ?></td>
                                        <td><?= $a['alamat']; ?></td>
                                        <td><?= $a['kecamatan']; ?></td>
                                        <td><?= $a['kota']; ?></td>
                                        <td align=""><?= $a['provinsi']; ?></td>
                                        <td align="">
                                            <a class="tombol-edit"
                                                href="<?= base_url('C_akunMaster/editkoperasi/' . $a['code']); ?>"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="tombol-hapus"
                                                href="<?= base_url('C_akunMaster/hapus_akunkoperasi/' . $a['code']); ?>"
                                                onclick="return confirm('Yakin Mau Di Hapus?');"><i
                                                    class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    </tfoot>
                                    <?php
                                    endforeach; ?>
                                <?php endif;?>
                                <?php if ($this->session->userdata('tipe_akun')==2) : ?>
                                    <?php
                                    if (empty($all_akun['data'])) : ?>
                                    <tr>
                                        <td colspan="5">
                                            <div class="alert alert-danger" role="alert">Data Not Found!</div>
                                        </td>
                                    </tr>
                                    <?php
                                    endif;
                                    $no = 0;
                                    foreach ($all_akun['data'] as $a) :
                                    ?>
                                    <tr>
                                        <td align=""><?= ++$no; ?></td>
                                        <td><?= $a['username']; ?></td>
                                        <td align=""><?= $a['password']; ?></td>
                                        <td align=""><?= $a['code']; ?></td>
                                        <td align=""><?= $a['tipe']; ?></td>
                                        <td align=""><?= $a['nama_nelayan']; ?></td>
                                        <td align="">
                                            <a class="tombol-edit"
                                                href="<?= base_url('C_akun/edit/' . $a['akun_id']); ?>"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="tombol-hapus"
                                                href="<?= base_url('C_akun/hapus_akun/' . $a['akun_id']); ?>"
                                                onclick="return confirm('Yakin Mau Di Hapus?');"><i
                                                    class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    </tfoot>
                                    <?php
                                    endforeach; ?>
                                <?php endif;?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->