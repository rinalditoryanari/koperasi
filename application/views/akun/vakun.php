<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header card">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Akun</h1>
                    <h4>Pelabuhan <?php echo $this->session->userdata('asal')?></h4>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <?php if ($this->session->userdata('tipe_akun')==2) : ?>
            <a href="<?= base_url('C_akun/form_akun') ?>"><button type="button" class="btn btn-primary">+ Data
                    Akun</button></a>
            <br>
            <br>
            <?php endif;?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Akun</h3>
                            <div class="card-tools">
                            <?php if ($this->session->userdata('tipe_akun') == '2') : ?>
                                <form method="GET" action="<?= base_url('C_akun'); ?>">
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
                            <?php endif;?>
                            <?php if ($this->session->userdata('tipe_akun') == '3') : ?>
                                <form method="GET" action="<?= base_url('C_akunMaster/alluser'); ?>">
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
                                <?php endif;?>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Code</th>
                                        <th>Type</th>
                                        <th>Nama Nelayan</th>
                                        <?php if ($this->session->userdata('tipe_akun') != '3') : ?>
                                        <th>Action</th>
                                        <?php endif;?>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if ($this->session->userdata('tipe_akun')==3) : ?>
                                    <?php
                                    if (empty($all_akun['data'])) : ?>
                                    <tr>
                                        <td colspan="7">
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
                                        <?php if ($this->session->userdata('tipe_akun') != '3') : ?>
                                        <td align="">
                                            <a class="tombol-edit"
                                                href="<?= base_url('C_akunMaster/edit/' . $a['akun_id']); ?>"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="tombol-hapus"
                                                href="<?= base_url('C_akunMaster/hapus_akun/' . $a['akun_id']); ?>"
                                                onclick="return confirm('Yakin Mau Di Hapus?');"><i
                                                    class="fas fa-trash-alt"></i></a>
                                        </td>
                                        <?php endif;?>
                                    </tr>
                                    </tfoot>
                                    <?php
                                    endforeach; ?>
                                <?php endif;?>
                                <?php if ($this->session->userdata('tipe_akun')==2) : ?>
                                    <?php
                                    if (empty($all_akun['data'])) : ?>
                                    <tr>
                                        <td colspan="7">
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