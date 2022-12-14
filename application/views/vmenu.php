<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header card">
        <div class="container-fluid ">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><?= $judul ?> </h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-body">
                            Aplikasi untuk melakukan transaksi penjualan, peminjaman dan pengembalian
                        </div>
                    </div>
                    <?php if ($this->session->userdata('tipe_akun') == '2') { ?>
                        <div class="d-flex" style="justify-content: space-between;">
                            <div class="col-2 card">
                                <div class="card-header">
                                    <h3 class="card-title">Akun</h3>
                                </div>
                                <div class="card-body">
                                    <h3><?php echo $akun;?></h3>
                                </div>
                            </div> 
                            <div class="col-2 card">
                                <div class="card-header">
                                    <h3 class="card-title">Nelayan</h3>
                                </div>
                                <div class="card-body">
                                    <h3><?php echo $nelayan;?></h3>
                                </div>
                            </div> 
                            <div class="col-2 card">
                                <div class="card-header">
                                    <h3 class="card-title">Ikan</h3>
                                </div>
                                <div class="card-body">
                                    <h3><?php echo $ikan;?></h3>
                                </div>
                            </div> 
                            <div class="col-2 card">
                                <div class="card-header">
                                    <h3 class="card-title">Alat</h3>
                                </div>
                                <div class="card-body">
                                    <h3><?php echo $alat;?></h3>
                                </div>
                            </div> 
                            <div class="col-2 card">
                                <div class="card-header">
                                    <h3 class="card-title">Penjualan</h3>
                                </div>
                                <div class="card-body">
                                    <h3><?php echo $penjualan;?></h3>
                                </div>
                            </div> 
                        </div>
                    <?php } ?>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Koperasi</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tr>
                                    <td>Nama Koperasi</td>
                                    <td>:</td>
                                    <td><?php echo $lokasi['nama'];?></td>
                                </tr>
                                <tr>
                                    <td>Kepala Koperasi</td>
                                    <td>:</td>
                                    <td><?php echo $lokasi["ketua"];?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><?php echo $lokasi["alamat"];?></td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>  
                                    <td><?php echo $lokasi["kecamatan"];?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->


                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
<!-- /.content-wrapper -->
<script>
const baseUrl = "<?php echo base_url();?>"

$.ajax({

    url: baseUrl + 'welcome/chart_data',
    dataType: 'json',
    method: 'get',
    success: data => {
        console.log(data)
    }

})
</script>