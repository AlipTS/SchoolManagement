<?= $this->extend('templates/header'); ?>
<?= $this->section('page-content'); ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Peminjaman Inventaris</h4>
                        <p class="card-description">
                            Inventaris | Peminjaman Inventaris | Tambah Peminjaman
                        </p>
                        <br>
                        <form class="forms-sample" name="addInvtUsr" action="/inventaris/addInv" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label>Pilih Barang</label>
                                <select class="js-example-basic-single w-100" name="barang">
                                    <option hidden>Pilih Barang</option>

                                    <?php if (empty($list)) : ?>
                                        <option disab led>---DATA KOSONG---</option>
                                    <?php else : ?>
                                        <?php $no = 0 ?>
                                        <?php foreach ($list as $l) : ?>
                                            <option value="<?= $l['id']; ?>"><?= $l['nama_barang']; ?> &nbsp;&nbsp;&nbsp;(Tersedia : <?= $l['bisa_untuk_dipinjam']; ?>)</option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleI nputEmail1">Jumlah</label>
                                <input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
                            </div>
                            <div class="form-group">
                                <label for="exampleI nputEmail1">Pinjam Dari:</label>
                                <input type="DATE" class="form-control" name="dari">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Sampai:</label>
                                <input type="DATE" class="form-control" name="sampai">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Keterangan</label>
                                <textarea class="form-control" name="keterangan" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="<?= base_url(); ?>/pages/inventaris/peminjamanInventaris/add" class="btn btn-success btn-icon-text">
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