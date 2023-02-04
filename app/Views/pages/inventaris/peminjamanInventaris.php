<?= $this->extend('templates/header'); ?>
<?= $this->section('page-content'); ?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">

      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">DAFTAR INVENTARIS SEDANG DIPINJAM</h4>
            <p class="card-description">
              Inventaris | Peminjaman Inventaris
            </p>
            <br>
            <a href="<?= base_url(); ?>/pages/inventaris/peminjamanInventaris/add" class="btn btn-success btn-icon-text">
              <i class="ti-plus btn-icon-prepend"></i>
              Pinjam
            </a>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      No.
                    </th>
                    <th>
                      Nama Barang
                    </th>
                    <th>
                      Nama Peminjam
                    </th>
                    <th>
                      Keterangan
                    </th>
                    <th>
                      Jumlah Pinjaman
                    </th>
                    <th>
                      Tanggal Pinjaman
                    </th>
                    <th>
                      Tangga dikembalikan
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <?php if (empty($listInventUser)) : ?>
                      <td>DATA KOSONG</td>
                  </tr>
                <?php else : ?>
                  <?php $no = 0 ?>
                  <?php foreach ($listInventUser as $l) : ?>
                    <tr>
                      <td>
                        <?php $no = $no + 1 ?>
                        <?= $no; ?>
                      </td>
                      <td class="py-1">
                        <?= $l['nama_barang']; ?>
                      </td>
                      <td>
                        <?= $l['keterangan']; ?>
                      </td>
                      <td>
                        <?= $l['fullname']; ?>
                      </td>
                      <td>
                        <?= $l['jumlah_pinjaman']; ?>
                      </td>
                      <td>
                        <?= $l['tanggal_pinjaman']; ?>
                      </td>
                      <td>
                        <?= $l['tanggal_dikembalikan']; ?> &NonBreakingSpace;
                        <?php if ($l['id_user'] == user_id() && $l) : ?>
                          <form action="/Inventaris/kembalikan" method="POST" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="idInventUser" value="<?= $l['id']; ?>">
                            <button type=" submit" class="btn btn-success btn-icon-text" onclick="return confirm('apakah anda yakin?<?= $l['id']; ?>');">
                              Kembalikan
                            </button>
                          </form>

                        <?php endif; ?>
                      </td>


                    </tr>

                  <?php endforeach; ?>
                <?php endif ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>