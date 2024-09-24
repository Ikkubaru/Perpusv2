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
    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Login</h3>
                        <form action="<?= base_url('Auth/login') ?>" method="POST">
                            <div class="input__item">
                                <input type="text" placeholder="Username" name="username">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="password" placeholder="Password" name="password">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" class="site-btn">Login Now</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Dont’t Have An Account?</h3>
                        <a href="<?= base_url('Auth/register') ?>" class="primary-btn">Register Now</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Login Section End -->

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