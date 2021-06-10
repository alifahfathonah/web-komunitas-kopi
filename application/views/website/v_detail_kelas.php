<!-- Page Title -->
<section class="page-title" style="background-image:url(<?=base_url();?>assets/front-end/images/background/bg-13.jpg)">
    <div class="auto-container">
        <div class="content-box">
            <h1><?= $kelas['nama']; ?></h1>
        </div>
    </div>
</section>

<!-- Cause Info -->
<div class="cause-info">
    <div class="auto-container">
        <div class="wrapper-box">
            <!-- <div class="goal"><span>Goal:</span> <br>$120000</div> -->
            <!-- <div class="progress-block">
                <div class="inner-box">
                    <div class="graph-outer">
                        <input type="text" class="dial" data-fgColor="#ed6221" data-bgColor="#f0edea" data-width="70"
                            data-height="70" data-linecap="normal" value="<?= totalPendaftar($kelas['idkelas']); ?>">
                        <div class="inner-text count-box"><span class="count-text"
                                data-stop="<?= totalPendaftar($kelas['idkelas']); ?>" data-speed="2000"></span>%
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="raised"><span>Harga :</span> <br><?= 'Rp. '.number_format($kelas['harga'],2,',','.'); ?>
            </div>
            <div class="donars"><span>Pendafar</span> <br><?= totalPendaftar($kelas['idkelas']); ?></div>
            <div class="days-left"><span>Kapasitas</span> <br><?= $kelas['jumlah']; ?></div>
        </div>
    </div>
</div>

<!-- Causes Details -->
<div class="sidebar-page-container cause-details">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8 content-column">
                <div class="sec-title mb-4">
                    <h1><?= $kelas['nama']; ?></h1>
                </div>
                <div class="image mb-50"><img src="<?=base_url();?>uploads/image/<?=$kelas['file'];?>" alt=""
                        width="100%"></div>
                <div class="sec-title mb-40">
                    <h3>Deskripsi Kelas</h3>
                    <div class="text"><?= $kelas['deskripsi']; ?>
                    </div>
                </div>
                <div class="sec-title">
                    <h3>Pelaksanaan Kelas</h3>
                    <div class="text">Mohon diperhatikan dengan teliti yah teman-teman untuk informasi pelaksanaan
                        kelasnya.</div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="feature-block-three">
                            <div class="inner-box">
                                <div class="icon-box"><span class="flaticon-lgtb-1"></span></div>
                                <div class="link"><a href="#"><i class="flaticon-next"></i>Tanggal</a></div>
                                <div class="text">Tanggal pelaksanaan kelas</div>
                                <h4><?= date('d',strtotime($kelas['tgl_awal'])); ?> -
                                    <?= date('d F Y',strtotime($kelas['tgl_akhir'])); ?></h4>
                            </div>
                        </div>
                        <div class="feature-block-three">
                            <div class="inner-box">
                                <div class="icon-box"><span class="flaticon-lgtb-1"></span></div>
                                <div class="link"><a href="#"><i class="flaticon-next"></i>Tempat</a></div>
                                <div class="text">Tempat pelaksanaan kelas</div>
                                <h4><?= $kelas['tempat']; ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-block-three">
                            <div class="inner-box">
                                <div class="icon-box"><span class="flaticon-lgtb-1"></span></div>
                                <div class="link"><a href="#"><i class="flaticon-next"></i>Waktu</a></div>
                                <div class="text">Waktu pelaksanaan kelas</div>
                                <h4><?= $kelas['jam_awal'].' - '.$kelas['jam_akhir'].' WIT'; ?></h4>
                            </div>
                        </div>
                        <div class="feature-block-three">
                            <div class="inner-box">
                                <div class="icon-box"><span class="flaticon-lgtb-1"></span></div>
                                <div class="link"><a href="#"><i class="flaticon-next"></i>Instruktur</a></div>
                                <div class="text">Instruktur kelas</div>
                                <h4><?= $kelas['instruktur']; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="share-post">
                    <div class="text"><i class="flaticon-share"></i>Share with friends</div>
                    <ul class="social-icon-seven">
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>"
                                target="_blank" class="facebook"><span class="fa fa-facebook"></span>Facebook</a></li>
                        <!-- <li><a href="#" class="twitter"><span class="fa fa-twitter"></span>Twitter</a></li> -->
                        <!-- <li><a href="#" class="pinterest"><span class="fa fa-pinterest"></span>Pinterest</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <!-- Search Widget -->
                    <!-- <div class="sidebar-title">
                        <h4>Search</h4>
                    </div>
                    <div class="sidebar-widget search-box">
                        <form method="post" action="#">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                <button type="submit"><span class="flaticon-magnifying-glass"></span></button>
                            </div>
                        </form>
                    </div> -->
                    <!-- Cause Widget -->
                    <div class="sidebar-title">
                        <h4>Kelas Terbaru</h4>
                    </div>
                    <div class="sidebar-widget case-widget">
                        <div class="single-item-carousel owl-theme owl-carousel owl-nav-none owl-dot-style-one">
                            <?php foreach($all_kelas as $row): ?>
                            <div class="cause-block-two">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="<?=base_url();?>uploads/image/<?=$row['file'];?>" alt="" height="250">
                                        <!-- <div class="overlay">
                                            <a href="cause-details.html" class="theme-btn btn-style-seven"><span>More
                                                    Details</span></a>
                                        </div> -->
                                    </div>
                                    <div class="lower-content">
                                        <!--Progress Levels-->
                                        <div class="progress-levels style-two">

                                            <!--Skill Box-->
                                            <!-- <div class="progress-box wow fadeInRight animated" data-wow-delay="100ms"
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
                                            </div> -->
                                        </div>
                                        <div class="wrapper-box">
                                            <h4><a
                                                    href="<?=base_url('website/detail_kelas/').$row['idkelas'];?>"><?= $row['nama']; ?></a>
                                            </h4>
                                            <div class="info-box">
                                                <a href="#"><span>Harga :</span>
                                                    <?= 'Rp. '.number_format($row['harga'],2,',','.'); ?></a>
                                                <!-- <a href="#"><span>Goal:</span> $100000</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- Event Widget -->
                    <div class="sidebar-title">
                        <h4>Member Kelas</h4>
                    </div>
                    <div class="sidebar-widget event-widget">
                        <?php foreach($member_kelas as $row): ?>
                        <div
                            style="background-color:white;border:1px solid gray;border-radius:5px;margin:5px;padding:10px;shadow:2px;">
                            <h6><a href="#"><?= $row['nama_lengkap']; ?></a></h6>
                            <div class="date"><?= $row['email']; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Newsletter Widget -->

                    <div class="sidebar-widget newsletter-widget-three">
                        <div class="inner-content">
                            <?php if(_session('username') && $this->session->userdata('level')=='Member'): ?>
                            <?php if(totalPendaftar($kelas['idkelas'])==$kelas['jumlah']): ?>
                            <a href="#" class="theme-btn btn-style-three text-center"><span>Maaf Kelas Ini Sudah
                                    Penuh</span></a>
                            <?php else: ?>
                            <div class="text">Bukti Pembayaran</div>
                            <form action="<?=base_url('welcome/daftar_kelas');?>" method="post"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" name="member_id" value="<?=_sessMember()->idmember;?>">
                                    <input type="hidden" name="kelas_id" value="<?=$kelas['idkelas'];?>">
                                    <input type="file" class="form-control" name="bukti_bayar" style="padding:15px;"
                                        required>
                                </div>
                                <button class="theme-btn btn-style-two text-center" type="submit"><span>Daftar
                                        Kelas</span></button>
                            </form>
                            <?php endif; ?>
                            <?php else: ?>
                            <a href="<?=base_url('login');?>" class="theme-btn btn-style-one text-center"><span>Login
                                    Dulu Untuk Mendaftar</span></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>