<?php
require_once 'header.php';
require_once 'dbkoneksi.php';
$row = [];
?>


<div class="container" data-aos="fade-up">
    <br>
    <header class="section-header">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Form Pesanan</h2>
    </header>
    <br>
    <div class="card-content">
        <div class="card-body">
            <form class="form form-horizontal" method="POST" action="proses_pesanan.php">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-4 mb-1">
                            <label for="nama_pemesan">Nama</label>
                        </div>
                        <div class="col-md-8 form-group mb-1">
                            <input type="text" id="nama_pemesan" class="form-control" name="nama_pemesan" placeholder="Nama" />
                        </div>
                        <div class="col-md-4 mb-1">
                            <label for="alamat_pemesan">Alamat</label>
                        </div>
                        <div class="col-md-8 form-group mb-1">
                            <input type="text" id="alamat_pemesan" class="form-control" name="alamat_pemesan" placeholder="Alamat" />
                        </div>
                        <div class="col-md-4 mb-1">
                            <label for="tanggal">Tanggal Pembelian</label>
                        </div>
                        <div class="col-md-8 form-group mb-1">
                            <input type="date" id="tanggal" class="form-control" name="tanggal" placeholder="Tanggal Pembelian" />
                        </div>
                        <div class="col-md-4 mb-1">
                            <label for="produk_id">Produk</label>
                        </div>
                        <div class="col-md-8 form-group mb-1">
                        <?php
                            $sqlproduk = "SELECT * FROM produk";
                            $rsproduk = $dbh->query($sqlproduk);
                            ?>
                            <select id="produk" name="produk_id" class="form-select">
                                <?php
                                foreach ($rsproduk as $rowproduk) {
                                ?>
                                    <option value="<?= $rowproduk['id'] ?>"><?= $rowproduk['nama'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-4 mb-1">
                            <label for="no_hp">Nomor HP</label>
                        </div>
                        <div class="col-md-8 form-group mb-1">
                            <input type="number" id="no_hp" class="form-control" name="no_hp" placeholder="Nomor HP" />
                        </div>
                        <div class="col-md-4 mb-1">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-md-8 form-group mb-1">
                            <input type="email" id="email" class="form-control" name="email" placeholder="Email" />
                        </div>
                        <div class="col-md-4 mb-1">
                            <label for="jumlah_pesanan">Jumlah Pesanan</label>
                        </div>
                        <div class="col-md-8 form-group mb-1">
                            <input type="text" id="jumlah_pesanan" class="form-control" name="jumlah_pesanan" placeholder="Jumlah Pesanan" />
                        </div>
                        <div class="col-md-4 mb-1">
                            <label for="deskripsi">Deskripsi</label>
                        </div>
                        <div class="col-md-8 form-group mb-1">
                            <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" placeholder="Deskripsi"></textarea>
                            <!-- <input type="text" id="deskripsi" class="form-control" name="deskripsi" placeholder="Deskripsi" /> -->
                        </div>
                        <div class="col-sm-12 d-flex justify-content-end">
                        <a href="pesanan_diterima.php" class="btn btn-info" role="button">Simpan</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>