<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url('assets/home/') ?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/home/') ?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/home/') ?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/home/') ?>css/plyr.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/home/') ?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/home/') ?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/home/') ?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/home/') ?>css/style.css" type="text/css">
</head>

<body>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                       
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.html">Homepage</a></li>
                                <li><a href="./categories.html">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <?php foreach($categories as $kategori){ ?>
                                        <li><a href=""><?= $kategori['categoriesName'] ?></a></li>
                                        <?php  }?>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <?php if($this->session->userdata('level')==NULL){ ?>
                            <a href="<?= base_url('Auth') ?>"><span class="icon_profile"></span></a>
                        <?php }else{?>
                            <a href="<?= base_url('Auth/logout') ?>"><button class="btn btn-danger">Logout</button></a>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Daftar Buku</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach($books as $buku){ ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/cover/'.$buku['cover']) ?>">
                                        <div class="ep">--</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Categories</li>
                                        </ul>
                                        <h5><a href="<?= $buku['booksID'] ?>"><?= $buku['title'] ?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>

                </div>
              
            </div>
        </div>
    </div>  
</div>
</div>
</div>
</div>
</section>
<!-- Product Section End -->

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href=""><img src="img/logo.png" alt=""></a>
                </div>
            </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->
<!-- Js Plugins -->
<script src="<?= base_url('assets/home/') ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/home/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/home/') ?>js/player.js"></script>
<script src="<?= base_url('assets/home/') ?>js/jquery.nice-select.min.js"></script>
<script src="<?= base_url('assets/home/') ?>js/mixitup.min.js"></script>
<script src="<?= base_url('assets/home/') ?>js/jquery.slicknav.js"></script>
<script src="<?= base_url('assets/home/') ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/home/') ?>js/main.js"></script>


</body>

</html>