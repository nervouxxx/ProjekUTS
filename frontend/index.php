<?php 
require_once 'header.php';

?>


<section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Produk</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                
                <?php
            require_once "dbkoneksi.php";
            $sql = "SELECT produk.*, kategori_produk.nama AS kategori FROM produk
          INNER JOIN kategori_produk ON kategori_produk.id = produk.kategori_produk_id";
            $st = $dbh->query($sql);
            $st->execute();
            $row = $st->fetchAll();

            ?>

                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                    <?php foreach ($row as $prod) : ?>
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                <h3><?= $prod['nama'];  ?></h3>
                        <p><?= $prod['kategori'];  ?></p>  
                        <a href="detail_produk.php?id=<?= $prod['id'] ?>" class="readmore stretched-link"> <span>Klik</span> <i class="bi bi-arrow-right"></i></a> 
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/tasonline.png.png" alt="" />
                        </div>
                        <?php endforeach; ?>
                    </div>
                   
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section-->


        <?php 
        require_once 'footer.php';
        ?>
       