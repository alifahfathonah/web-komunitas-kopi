<!-- Bnner Section -->
<section class="banner-section">
    <div class="swiper-container banner-slider">
        <div class="swiper-wrapper">
            <!-- Slide Item -->
            <div class="swiper-slide"
                style="background-image: url(<?=base_url();?>assets/front-end/images/background/bg-19.jpeg);">
                <div class="content-outer">
                    <div class="content-box justify-content-center">
                        <div class="inner text-center">
                            <h4><span class="border-shape-left"></span><?=_profil()->slogan;?>
                                <span class="border-shape-right"></span>
                            </h4>
                            <h1><?=_profil()->nama;?></h1>
                            <!-- <div class="text"></div> -->
                            <!-- <div class="link-box"><a href="#"
                                    class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="swiper-slide"
                style="background-image: url(<?=base_url();?>assets/front-end/images/background/bg-20.jpg);">
                <div class="content-outer">
                    <div class="content-box justify-content-center">
                        <div class="inner text-center">
                            <!-- <div class="link-box-two"><a href="#" class="theme-btn default-btn">help the
                                    needy</a></div> -->
                            <h3>To improve learning environment in primary schools</h3>
                            <h1>Together we can make <br>a Difference</h1>
                            <!-- <div class="link-box"><a href="#"
                                    class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="swiper-slide"
                style="background-image: url(<?=base_url();?>assets/front-end/images/background/bg-21.jpg);">
                <div class="content-outer">
                    <div class="content-box justify-content-center">
                        <div class="inner text-center">
                            <h1>Healing & Caring</h1>
                            <div class="text">To improve the learning environment in primary schools by
                                <br>holistically creating world-class.
                            </div>
                            <!-- <div class="link-box"><a href="#"
                                    class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider-pagination style-two"></div>
        <div class="banner-slider-nav style-one">
            <div class="banner-slider-control banner-slider-button-prev"><span class="fa fa-angle-left"></span>
            </div>
            <div class="banner-slider-control banner-slider-button-next"><span class="fa fa-angle-right"></span>
            </div>
        </div>
    </div>
</section>
<!-- End Bnner Section -->

<!-- About Section -->
<section class="about-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-content-block">
                    <!-- <h1>Be part of a change <br>you want to see in the world</h1>
                    <h4>“Generosity consists not of the sum given, but the manner in <br>which it is bestowed.”
                    </h4> -->
                    <div class="text wow fadeInUp" data-wow-delay="200ms">
                        <?= _profil()->deskripsi; ?>
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-6">
                            <div class="link-btn wow fadeInLeft" data-wow-delay="500ms"><a href="#"
                                    class="theme-btn btn-style-two"><i class="flaticon-next"></i><span>Our
                                        Mission</span></a></div>
                            <div class="text">Beguiled and demoralized by the charms off pleasure the moments,
                                so by desire trouble.</div>
                        </div>
                        <div class="col-md-6">
                            <div class="link-btn wow fadeInRight" data-wow-delay="900ms"><a href="#"
                                    class="theme-btn btn-style-three"><i class="flaticon-next"></i><span>Our
                                        Vision</span></a></div>
                            <div class="text">The great explorer of the truth, theats masters builders off human
                                happiness no one rejects.</div>
                        </div>
                    </div>
                    <div class="link-btn-two">
                        <a href="#" class="theme-btn btn-style-one"><span>More About Us</span></a>
                    </div> -->
                </div>
            </div>
            <!-- <div class="col-lg-6">
                <div class="about-image-block">
                    <div class="logo-box">
                        <div class="image wow zoomIn" data-wow-delay="500ms"><img
                                src="<?=base_url();?>assets/front-end/images/resource/logo-icon.png" alt="">
                        </div>
                    </div>
                    <div class="image-one wow fadeInUp" data-wow-delay="200ms"><img
                            src="<?=base_url();?>assets/front-end/images/resource/image-1.jpg" alt=""></div>
                    <div class="image-two"><img
                            src="<?=base_url();?>assets/front-end/images/resource/image-2.jpg" alt=""><a
                            href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s"
                            class="overlay-link lightbox-image video-fancybox"><span
                                class="flaticon-multimedia"></span></a></div>
                    <div class="image-three wow fadeInRight" data-wow-delay="200ms"><img
                            src="<?=base_url();?>assets/front-end/images/resource/image-3.jpg" alt=""></div>
                </div>
            </div> -->
        </div>
    </div>
</section>

<!-- Causes Section -->
<section class="causes-section" id="kelas">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h1>Katalog Kelas </h1>
            <div class="text">Berikut beberapa yang akan diadakan oleh <?=_profil()->nama;?>.</div>
        </div>
        <div class="cause-carousel-wrapper">
            <div class="cause-carousel owl-theme owl-carousel owl-dots-none owl-nav-style-three">
                <?php $n=1; foreach($kelas as $row): ?>
                <!-- Cause Block One -->
                <div class="cause-block-one">
                    <div class="inner-box">
                        <div class="image"><a href="cause-details.html"><img
                                    src="<?=base_url('uploads/image/').$row['file']; ?>" alt=""></a></div>
                        <div class="lower-content">
                            <h4><a href="cause-details.html"><?= ucwords($row['nama']); ?></a></h4>
                            <div class="category"><a href="#"><span
                                        class="flaticon-book"></span><?= $row['instruktur']; ?></a>
                            </div>
                            <!-- <div class="text">Indignation and dislike men who are like beguiled and demoralized.
                            </div> -->
                            <div class="info-box">
                                <a href="#"><span>Harga :</span>
                                    <?= 'Rp. '.number_format($row['harga'],0,'','.'); ?></a>
                            </div>
                            <!--Progress Levels-->
                            <div class="progress-levels">

                                <!--Skill Box-->
                                <div class="progress-box wow fadeInRight" data-wow-delay="100ms"
                                    data-wow-duration="1500ms">
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="bar-fill" data-percent="60">
                                                    <div class="percent"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text">Peserta Kelas :
                                <?= $row['jumlah'].' dari '.$row['jumlah'].' Orang'; ?></div>
                            <div class="bottom-content">
                                <div class="link-btn"><a href="<?=base_url('website/detail_kelas/').$row['idkelas'];?>"
                                        class="theme-btn btn-style-one"><span>Lihat
                                            Kelas</span></a></div>
                                <!-- <div class="share-icon post-share-icon">
                                    <div class="share-btn"><i class="flaticon-share"></i></div>
                                    <ul>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=#url"
                                                target="_blank"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="https://www.instagram.com/sharer/sharer.php?u=#url"
                                                target="_blank"><span class="fa fa-instagram"></span></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section" id="member">
    <div class="auto-container">
        <div class="row m-0 justify-content-md-between align-items-end">
            <div class="sec-title light">
                <h1>Member Kelas</h1>
                <div class="text">Berikut ini merupakan member yang telah mengikuti kelas di
                    <?=_profil()->nama;?>
                </div>
            </div>
            <!--Link Btn-->
            <div class="link-btn mb-50">
                <a href="<?=base_url('website/all_member');?>" class="theme-btn btn-style-one"><span>Lihat Semua
                        Member</span></a>
            </div>
        </div>
        <div class="wrapper-box">
            <div class="row">
                <?php $n=1; foreach($member as $row): ?>
                <!-- Team Blokc One -->
                <div class="col-lg-4 team-block-one mt-5">
                    <div class="inner-box wow fadeInDown" data-wow-delay="200ms">
                        <!-- <div class="image"><a href="#"><img
                                    src="<?=base_url();?>assets/front-end/images/resource/team-1.jpg"
                                    alt=""></a></div> -->
                        <div class="lower-content">
                            <h4> <a href="#"><?=$row['nama_lengkap'];?></a></h4>
                            <div class="designation"><?=hidePhoneNumber($row['no_hp']);?></div>
                        </div>
                        <ul class="social-icon-two">
                            <li><a href="mailto:<?=$row['email'];?>"><span class="fa fa-envelope"></span></a>
                            </li>
                            <!-- <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-skype"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li> -->
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Client section -->
<section class="client-section">
    <div class="auto-container">
        <div class="sponsors-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
            <!-- <div class="image" data-toggle="tooltip" data-placement="top" title="media partner"><a href="#"><img
                        src="<?=base_url();?>assets/front-end/images/clients/client-1.png" alt=""></a></div>
            <div class="image" data-toggle="tooltip" data-placement="top" title="media partner"><a href="#"><img
                        src="<?=base_url();?>assets/front-end/images/clients/client-2.png" alt=""></a></div>
            <div class="image" data-toggle="tooltip" data-placement="top" title="media partner"><a href="#"><img
                        src="<?=base_url();?>assets/front-end/images/clients/client-3.png" alt=""></a></div>
            <div class="image" data-toggle="tooltip" data-placement="top" title="media partner"><a href="#"><img
                        src="<?=base_url();?>assets/front-end/images/clients/client-4.png" alt=""></a></div>
            <div class="image" data-toggle="tooltip" data-placement="top" title="media partner"><a href="#"><img
                        src="<?=base_url();?>assets/front-end/images/clients/client-5.png" alt=""></a></div> -->
        </div>
    </div>
</section>