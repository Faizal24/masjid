<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="index.php" class="standard-logo" data-dark-logo="images/masjid/masjid_pangsun_small.png"><img src="images/masjid/masjid_pangsun_small_brown.png" alt="Masjid Logo"></a>
                        <a href="index.php" class="retina-logo" data-dark-logo="images/masjid/full/masjid_pangsun.png"><img src="images/masjid/full/masjid_pangsun_brown.png" alt="Masjid Logo"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu" class="dark">

                        <ul>
                            <li><a href="utama"><div>Utama</div></a></li>
                            <li><a href="profil"><div>Profil</div></a>
                                <ul>
                                    <li><a href="#"><div>Perutusan Nazir Masjid</div></a></li>
                                    <li><a href="#"><div>Sejarah Masjid</div></a></li>
                                    <li><a href="#"><div>Visi, Misi & Fungsi Masjid</div></a></li>
                                    <li><a href="#"><div>Piagam Pelanggan</div></a></li>
                                </ul>
                            </li>
                            <li><a href="organisasi"><div>Organisasi</div></a>
                                <ul>
                                    <li><a href="#"><div>Carta Organisasi</div></a></li>
                                    <li><a href="#"><div>Direktori Staff</div></a></li>
                                </ul>
                            </li>
                            <li><a href="kemudahan"><div>Kemudahan</div></a>
                                <ul>
                                    <li><a href="#"><div>Dewan Solat</div></a></li>
                                    <li><a href="#"><div>Dewan Serbaguna</div></a></li>
                                    <li><a href="#"><div>Pengurusan Jenazah</div></a></li>
                                    <li><a href="#"><div>Dataran Masjid Pangsun</div></a></li>
                                    <li><a href="#"><div>Perkhidmatan Jurunikah</div></a></li>
                                </ul>
                            </li>
                            <li class="current"><a href="jadual"><div>Takwim</div></a>
                                <ul>
                                    <li><a href="#"><div>Jadual Kuliah Harian</div></a></li>
                                    <li><a href="#"><div>Jadual Program Masjid</div></a></li>
                                </ul>
                            </li>
                            <li><a href="maahadtahfiz"><div>Maahad Tahfiz</div></a>
                                <ul>
                                    <li><a href="#"><div>Carta Organisasi</div></a></li>
                                    <li><a href="#"><div>Profil & Prestasi Pelajar</div></a></li>
                                </ul>
                            </li>
                            <li><a href="hubungikami"><div>Hubungi Kami</div></a></li>
                        </ul>

                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->        
        
        <section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
            <div class="slider-parallax-inner">

                <div class="swiper-container swiper-parent">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide dark" style="background-image: url('images/masjid/jadual_bg.png');">
                            <div class="container clearfix">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-caption-animate="fadeInUp">Jadual Aktiviti</h2>
                                    <p data-caption-animate="fadeInUp" data-caption-delay="200"><b>Masjid Kg. Kuala Pangsun</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                    <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
                </div>

                <a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

            </div>
        </section>

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <img src="images/masjid/kuliah_harian.jpeg">
                    <div class="line"></div>

                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent nobottommargin clearfix" style="width: 100%">
                        
                        <div class="heading-block fancy-title nobottomborder">
                            <center><h3 class="nobottommargin"><span><b>Jadual Program Masjid</b></span></h3></center>
                        </div>
                        <div id="posts" class="events small-thumbs">



                            <?php foreach($schedules as $schedule) : ?>
                                <div class="entry clearfix">
                                <div class="entry-image">
                                    <a href="#">
                                        <img src="admin/uploads/images/<?php echo $schedule['picture'] ?>" alt="Inventore voluptates velit totam ipsa tenetur">
                                       <div class="entry-date"><?php echo $schedule['day'] ?><span><?php echo $schedule['month'] ?></span></div>
                                    </a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#"><?php echo $schedule['title'] ?></a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                       <!--  <li><span class="label label-warning">Private</span></li> -->
                                        <li><a href="#"><i class="icon-time"></i><?php echo $schedule['start'] ?>  - <?php echo $schedule['end'] ?></a></li>
                                        <li><a href="#"><i class="icon-map-marker2"></i> <?php echo $schedule['place'] ?></a></li>
                                    </ul>
                                    <div class="entry-content">
                                        <p><?php echo $schedule['content'] ?></p>
                                        <!-- <a href="#" class="btn btn-default" disabled="disabled">Buy Tickets</a> <a href="#" class="btn btn-danger">Read More</a> -->
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?> 

                            

                            <!-- <div class="entry clearfix">
                                <div class="entry-image">
                                    <a href="#">
                                        <img src="images/events/thumbs/2.jpg" alt="Nemo quaerat nam beatae iusto minima vel">
                                        <div class="entry-date">16<span>Apr</span></div>
                                    </a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Nemo quaerat nam beatae iusto minima vel</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><span class="label label-danger">Urgent</span></li>
                                        <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
                                        <li><a href="#"><i class="icon-map-marker2"></i> Perth, Australia</a></li>
                                    </ul>
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blandidi fuga.</p>
                                        <a hretiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem eligenf="#" class="btn btn-info">RSVP</a> <a href="#" class="btn btn-danger">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="entry clearfix">
                                <div class="entry-image">
                                    <a href="#">
                                        <img src="images/events/thumbs/3.jpg" alt="Ducimus ipsam error fugiat harum recusandae">
                                        <div class="entry-date">3<span>May</span></div>
                                    </a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Ducimus ipsam error fugiat harum recusandae</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><span class="label label-info">Public</span></li>
                                        <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
                                        <li><a href="#"><i class="icon-map-marker2"></i> Melbourne, Australia</a></li>
                                    </ul>
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem eligendi fuga.</p>
                                        <a href="#" class="btn btn-default">Buy Tickets</a> <a href="#" class="btn btn-danger">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="entry clearfix">
                                <div class="entry-image">
                                    <a href="#">
                                        <img src="images/events/thumbs/4.jpg" alt="Nisi officia adipisci molestiae aliquam">
                                        <div class="entry-date">16<span>Jun</span></div>
                                    </a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Nisi officia adipisci molestiae aliquam</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><span class="label label-warning">Private</span></li>
                                        <li><a href="#"><i class="icon-time"></i> 12:00 - 18:00</a></li>
                                        <li><a href="#"><i class="icon-map-marker2"></i> New York</a></li>
                                    </ul>
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem eligendi fuga.</p>
                                        <a href="#" class="btn btn-info">RSVP</a> <a href="#" class="btn btn-danger">Read More</a>
                                    </div>
                                </div>
                            </div> -->

                        </div>

                    </div><!-- .postcontent end -->

                </div>