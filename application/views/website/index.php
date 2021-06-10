<!DOCTYPE html>
<html lang="en">

<!-- Goodsoul_html/index.html  20 Nov 2019 03:27:59 GMT -->

<head>
    <meta charset="utf-8">
    <title><?=_profil()->nama;?></title>

    <link rel="shortcut icon" href="<?=base_url();?>assets/img/logo.png" type="image/x-icon">
    <link rel="icon" href="<?=base_url();?>assets/img/logo.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Prata|Rubik:300,400,500,700&amp;display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="<?=base_url();?>assets/front-end/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/front-end/css/jquery-ui.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/front-end/css/swiper.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/front-end/css/flaticon.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/front-end/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/front-end/css/animate.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/front-end/css/custom-animate.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/front-end/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/front-end/css/owl.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/front-end/css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/front-end/css/responsive.css" rel="stylesheet">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <?php if($this->session->flashdata('success')):?>
    <div class="flash-data-berhasil" data-berhasil="<?= $this->session->flashdata('success'); ?>"></div>
    <?php endif;?>
    <?php if($this->session->flashdata('error')):?>
    <div class="flash-data-gagal" data-gagal="<?= $this->session->flashdata('error'); ?>"></div>
    <?php endif;?>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader"></div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>

        <!-- Main Header-->
        <header class="main-header">
            <!-- Top bar -->
            <div class="top-bar theme-bg">
                <div class="auto-container">
                    <div class="wrapper-box">
                        <div class="left-content">
                            <!-- <div class="language-switcher">
                                <div class="languages">
                                    <span class="current" title="English">En</span>
                                    <span class="hover">English</span>
                                    <ul>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Hindi</a></li>
                                        <li><a href="#">Tamil</a></li>
                                        <li><a href="#">Kannada</a></li>
                                        <li><a href="#">Gujarathi</a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <div class="text"><?=_profil()->slogan;?></div>
                        </div>
                        <div class="right-content">
                            <ul class="contact-info">
                                <li><span class="flaticon-mail"></span><a
                                        href="mailto:<?=_profil()->email;?>"><?=_profil()->email;?></a></li>
                                <li><span class="flaticon-phone"></span><a
                                        href="tel:<?=_profil()->no_telp;?>"><?=_profil()->no_telp;?></a></li>
                                <?php if(_session('username')): ?>
                                <li><span class="flaticon-user"></span><a
                                        href="<?=base_url('menu');?>"><?= _session('username'); ?></a>
                                </li>
                                <?php endif; ?>
                            </ul>
                            <ul class="social-icon-one">
                                <li><a href="<?=_profil()->facebook;?>"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="<?=_profil()->instagram;?>"><span class="fa fa-instagram"></span></a></li>
                                <li><a href="<?=_profil()->youtube;?>"><span class="fa fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="wrapper-box">
                        <div class="logo-column">
                            <div class="logo-box">
                                <div class="logo"><a href="<?=base_url();?>"><img
                                            src="<?=base_url();?>assets/img/logo.png" alt="" title="" width="70"></a>
                                </div>
                            </div>
                        </div>
                        <div class="right-column">
                            <div class="option-wrapper">
                                <div class="nav-outer">

                                    <!-- Main Menu -->
                                    <nav class="main-menu navbar-expand-xl navbar-dark">

                                        <div class="collapse navbar-collapse">
                                            <ul class="navigation">
                                                <li <?=isset($mHome)?'class="current"':'';?>><a
                                                        href="<?=base_url();?>">Home</a>
                                                </li>
                                                <li <?=isset($mDetailKelas)?'class="current"':'';?>><a
                                                        href="<?=isset($mDetailKelas) || isset($mAllMember)?'#"':'#kelas';?>">Kelas</a>
                                                </li>
                                                <li <?=isset($mAllMember)?'class="current"':'';?>><a
                                                        href="<?=isset($mDetailKelas) || isset($mAllMember)?'#"':'#member';?>">Member</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav><!-- Main Menu End-->
                                </div>
                                <!--Search Box-->
                                <!-- <div class="search-box-outer">
                                    <div class="dropdown">
                                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                                class="fa fa-search"></span></button>
                                        <ul class="dropdown-menu pull-right search-panel"
                                            aria-labelledby="dropdownMenu3">
                                            <li class="panel-outer">
                                                <div class="form-container">
                                                    <form method="post"
                                                        action="http://steelthemes.com/demo/html/Goodsoul_html/blog.html">
                                                        <div class="form-group">
                                                            <input type="search" name="field-name" value=""
                                                                placeholder="Search...." required="">
                                                            <button type="submit" class="search-btn"><span
                                                                    class="fa fa-search"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cart-btn">
                                    <div class="cart-icon"><span class="flaticon-bag"></span><span
                                            class="item-count">0</span></div>
                                </div>
                                <div class="navbar-btn-wrap">
                                    <button class="anim-menu-btn">
                                        <i class="flaticon-menu"></i>
                                    </button>
                                </div> -->
                                <div class="link-btn">
                                    <?php if(!_session('username')): ?>
                                    <a href="<?=base_url('login');?>"
                                        class="theme-btn btn-style-one"><span>Login</span></a>
                                    <?php else: ?>
                                    <a href="#" onclick="exit()"
                                        class="theme-btn btn-style-four"><span>Logout</span></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!--End Header Upper-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="wrapper-box">
                        <div class="logo-column">
                            <div class="logo-box">
                                <div class="logo"><a href="<?=base_url();?>"><img
                                            src="<?=base_url();?>assets/img/logo.png" alt="" title="" width="60"> <b
                                            style="font-size:16pt;"><?= _profil()->nama; ?></b></a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-column">
                            <div class="nav-outer">

                                <div class="nav-inner">

                                    <!-- Main Menu -->
                                    <nav class="main-menu navbar-expand-xl navbar-dark">

                                        <div class="collapse navbar-collapse">
                                            <ul class="navigation">
                                            </ul>
                                        </div>
                                    </nav><!-- Main Menu End-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu  -->
            <div class="mobile-menu style-one">
                <div class="menu-box">
                    <div class="logo"><a href="<?=base_url();?>"><img src="<?=base_url();?>assets/img/logo.png" alt=""
                                width="40"></a>
                    </div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-xl navbar-dark">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="flaticon-menu"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navigation">

                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>

            </div>
            <!-- End Mobile Menu -->

            <div class="nav-overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div>
        </header>
        <!-- End Main Header -->

        <?php $this->load->view($content); ?>

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="auto-container">

                <div class="footer-bottom">
                    <div class="left-content">
                        <div class="icon"><img src="<?=base_url();?>assets/img/logo.png" alt="" width="60"></div>
                        <div class="copyright-text"><a href="templateshub.net"><?=_profil()->nama;?></a></a>

                        </div>
                    </div>
                    <div class="right-content">
                        <ul class="social-icon-three">
                            <li><a href="<?=_profil()->facebook;?>"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="<?=_profil()->instagram;?>"><span class="fa fa-instagram"></span></a></li>
                            <li><a href="<?=_profil()->youtube;?>"><span class="fa fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon flaticon-arrow"></span></div>


    </div>
    <!--End pagewrapper-->



    <!-- JS -->
    <script src="<?=base_url();?>assets/front-end/js/jquery.js"></script>
    <script src="<?=base_url();?>assets/front-end/js/popper.min.js"></script>
    <script src="<?=base_url();?>assets/front-end/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assets/front-end/js/TweenMax.min.js"></script>
    <script src="<?=base_url();?>assets/front-end/js/wow.js"></script>
    <script src="<?=base_url();?>assets/front-end/js/owl.js"></script>
    <script src="<?=base_url();?>assets/front-end/js/appear.js"></script>
    <script src="<?=base_url();?>assets/front-end/js/swiper.min.js"></script>
    <script src="<?=base_url();?>assets/front-end/js/jquery.fancybox.js"></script>
    <script src="<?=base_url();?>assets/front-end/js/menu-nav-btn.js"></script>
    <script src="<?=base_url();?>assets/front-end/js/jquery-ui.js"></script>
    <script src="<?=base_url();?>assets/front-end/js/knob.js"></script>
    <!-- Custom JS -->
    <script src="<?=base_url();?>assets/front-end/js/script.js"></script>
    <script src="<?=base_url();?>assets/vendor/sweet-alert/sweetalert2.all.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/sweet-alert.js"></script>
    </script>
    <script type="text/javascript">
    function exit() {
        Swal.fire({
            title: 'Konfirmasi Keluar',
            text: "Anda yakin ingin keluar dari aplikasi ?",
            icon: 'warning',
            allowOutsideClick: false,
            showCancelButton: true,
            cancelButtonColor: '#3085d6',
            confirmButtonColor: '#d33',
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Iya, Keluar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = "<?=base_url('menu/logout');?>";
            }
        })
    }
    </script>
</body>

<!-- Goodsoul_html/index.html  20 Nov 2019 03:27:59 GMT -->

</html>