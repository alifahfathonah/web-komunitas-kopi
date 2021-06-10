<!-- Page Title -->
<section class="page-title" style="background-image:url(<?=base_url();?>assets/front-end/images/background/bg-13.jpg)">
    <div class="auto-container">
        <div class="content-box">
            <h1>All Member <?= _profil()->nama; ?></h1>
        </div>
    </div>
</section>


<!-- Causes Details -->
<div class="sidebar-page-container cause-details">
    <div class="auto-container">
        <div class="row">
            <?php $n=1; foreach($member as $row): ?>
            <!-- Team Blokc One -->
            <div class="col-lg-4 team-block-one mt-5">
                <div class="inner-box wow fadeInDown" data-wow-delay="200ms" style="border:1px solid black;">
                    <div class="lower-content" style="border-top:1px solid gray;">
                        <h4> <a href="#"><?=$row['nama_lengkap'];?></a></h4>
                        <div class="designation"><?=hidePhoneNumber($row['no_hp']);?></div>
                    </div>
                    <ul class="social-icon-two">
                        <li><a href="mailto:<?=$row['email'];?>"><span class="fa fa-envelope"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>