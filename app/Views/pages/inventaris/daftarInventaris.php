<?= $this->extend('templates/header'); ?>
<?= $this->section('page-content'); ?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">

      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">DAFTAR INVENTARIS</h4>
            <p class="card-description">
              Inventaris | Daftar Inventaris
            </p>
            <br>
            <a href="<?= base_url(); ?>/pages/inventaris/daftarInventaris/add" class="btn btn-success btn-icon-text">
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
                      Kategori
                    </th>
                    <th>
                      Total Barang
                    </th>
                    <th>
                      Sedang Dipinjam
                    </th>
                    <th>
                      Bisa untuk Dipinjam
                    </th>
                    <th>
                      Penanggung Jawab
                    </th>
                    <th>
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <?php if (empty($listInvent)) : ?>
                      <td>DATA KOSONG</td>
                  </tr>
                <?php else : ?>
                  <?php $no = 0 ?>
                  <?php foreach ($listInvent as $l) : ?>
                    <tr>
                      <td>
                        <?php $no = $no + 1 ?>
                        <?= $no; ?>
                      </td>
                      <td class="py-1">
                        <?= $l['nama_barang']; ?>
                      </td>
                      <td>
                        <?= $l['kategori']; ?>
                      </td>
                      <td>
                        <?= $l['total_barang']; ?>
                      </td>
                      <td>
                        <?= $l['sedang_dipinjam']; ?>
                      </td>
                      <td>
                        <?= $l['bisa_untuk_dipinjam']; ?>
                      </td>
                      <td>
                        <?= $l['penanggung_jawab']; ?>
                      </td>
                      <td>
                        <?php if (in_groups('admin')) : ?>
                          <form action="/Inventaris/hapusBarang" method="POST" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="idInventt" value="<?= $l['id']; ?>">
                            <a href="<?= base_url(); ?>/pages/inventaris/daftarInventaris/edit/<?= $l['id']; ?>" class="btn btn-primary btn-icon-text">
                              Edit
                            </a>
                            <button type="submit" class="btn btn-danger btn-icon-text" onclick="return confirm('apakah anda yakin?');">
                              delete
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