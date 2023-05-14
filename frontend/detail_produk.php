<?php
require_once 'header.php';
?>

<div class="container" data-aos="fade-up">

    <header class="section-header">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Detail Produk</h2>
    </header>

    <?php
    require_once 'dbkoneksi.php';
    $_id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    ?>

    <div class="row">
        <div class="col-lg-4 col-12">
            <img src="" width="300">
        </div>
        <div class="col-lg-8 col-12">
        <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td><?= $row['nama'] ?></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><?= $row['harga_jual'] ?></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td><?= $row['stok'] ?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><?= $row['deskripsi'] ?></td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td><?= $row['kategori_produk_id'] ?></td>
                    </tr>
                </tbody>
            </table>
            <a href="index.php" class="btn btn-danger">Kembali</a>
            <a href="form_pesanan.php" class="btn btn-primary">Beli Produk</a>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>
