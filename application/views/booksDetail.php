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
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-3 col-md-8 col-sm-8">
                                <div class="section-title">
                                    
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 col-sm-4">
                                <div class="btn__all">  
                                <h4 class="text-white"><?= $details->synopsis ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/cover/'.$details->cover) ?>">
                                        <div class="ep">--</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Author :<?= $details->author ?></li> <br>
                                            <li>Release (Year) :<?= $details->releaseYear ?></li>
                                        </ul> <br>
                                        <form action="<?= base_url('Home/borrow/'.$details->booksID) ?>" method="POST">
                                            <input type="hidden" name="username" value="<?= $this->session->userdata('userID') ?>">
                                            <input type="hidden" name="title" value="<?= $details->booksID ?>">
                                            <!-- input date sekarang -->
                                            <button class="btn btn-info" onClick="return confirm('Confirm Borrowing?')">Borrow</button>
                                        </form>
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