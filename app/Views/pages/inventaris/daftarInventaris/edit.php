<?= $this->extend('templates/header'); ?>
<?= $this->section('page-content'); ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Inventaris</h4>
                        <p class="card-description">
                            Inventaris | Daftar Inventaris | Edit Inventaris
                        </p>
                        <br>
                        <form class="forms-sample" name="addInvt" action="/inventaris/addBarang" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>


                            <div class="form-group">
                                <label for="exampleI nputEmail1">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" placeholder="nama_barang" value="<?= (old('nama_barang')) ? old('nama_barang') : $list['nama_barang'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleI nputEmail1">Kategori</label>
                                <input type="text" class="form-control" name="kategori" placeholder="kategori" value="<?= (old('kategori')) ? old('kategori') : $list['kategori'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Total Barang</label>
                                <input type="text" class="form-control" name="total_barang" placeholder="total_barang" value="<?= (old('total_barang')) ? old('total_barang') : $list['total_barang'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Penanggung Jawab</label>
                                <input type="text" class="form-control" name="penanggung_jawab" placeholder="penanggung_jawab" value="<?= (old('penanggung_jawab')) ? old('penanggung_jawab') : $list['penanggung_jawab'] ?>">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="<?= base_url(); ?>/pages/inventaris/daftarInventaris" class="btn btn-success btn-icon-text">
                                <i class="ti-multiple btn-icon-prepend"></i>
                                Batal
                            </a>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>