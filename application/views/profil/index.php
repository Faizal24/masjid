<script>
	$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});
</script>

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
                            <li class="current"><a href="profil"><div>Profil</div></a></li>
                            <li><a href="organisasi"><div>Organisasi</div></a></li>
                            <li><a href="kemudahan"><div>Kemudahan</div></a></li>
                            <li><a href="#"><div>Perkhidmatan</div></a>
                                <ul>
                                    <li><a href="jenazah"><div>Pengurusan<br>Jenazah</div></a></li>
                                    <li><a href="jurunikah"><div>Perkhidmatan<br>Jurunikah</div></a></li>
                                </ul>
                            </li>
                            <li><a href="jadual"><div>Takwim</div></a></li>
                            <li><a href="maahadtahfiz"><div>Maahad Tahfiz</div></a></li>
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
                        <div class="swiper-slide dark" style="background-image: url('images/masjid/profil_bg.png');">
                            <div class="container clearfix">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-caption-animate="fadeInUp">Masjid Pangsun</h2>
                                    <p data-caption-animate="fadeInUp" data-caption-delay="200"><b>Masjid di kawasan kampong pendalaman & terletak paling hujung di daerah Hulu Langat, Selangor</b></p>
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

			<div class="content-wrap" id="perutusan">

				<div class="row common-height clearfix">

					<div class="col-sm-5 col-padding" style="background: url('images/masjid/nazir.png') center center no-repeat; background-size: cover;"></div>

					<div class="col-sm-7 col-padding">
						<div>
							<div class="heading-block">
								<span class="before-heading color">Perutusan Nazir Masjid Kg. Kuala Pangsun</span>
								<h3>Haji Ismail Bin Basar</h3>
							</div>

							<div class="row clearfix">

								<div>
									<p>Employment respond committed meaningful fight against oppression social challenges rural legal aid governance. Meaningful work, implementation, process cooperation, campaign inspire.</p>
									<p>Advancement, promising development John Lennon, our ambitions involvement underprivileged billionaire philanthropy save the world transform. Carbon rights maintain healthcare emergent, implementation inspire social change solve clean water livelihoods.</p>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>
								</div>

							</div>

						</div>
					</div>

				</div>
				<br><br><br>
				<div class="container clearfix" id="sejarah">
					
					<div>

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<center><h4>Sejarah Masjid Kg. Kuala Pangsun</h4></center>
						</div>

						<div class="row">
							<div class="col-md-4">
								<img src="images/masjid/masjidLama1.jpg">
								<br><br>
								<img src="images/masjid/masjidLama2.jpg">
							</div>
							<div class="col-md-4">
								<br><br><br>
								<p style="text-align: justify;">Didirikan di awal tahun 1970an, Masjid Kariah Kg Kuala Pangsun (atau Masjid Pangsun) terletak di kampung paling hujung dan paling hulu di daerah Hulu Langat. Lokasi masjid dibina di pinggiran sungai Langat yang sungguh nyaman dan menenangkan  dan telah melalui beberapa fasa transformasi fizikal.</p>
								<br><br><br><br><br>
								<p style="text-align: justify;"">Terkini pada tahun 2014, bangunan asal masjid telah diubahsuai dan dilengkapi dengan kompleks Maahad Tahfiz termasuk kuarters Mudir, bilik mandi jenazah, dapur dan tempat makan khusus untuk pelajar-pelajar Tahfiz, ruang parkir berbumbung, taman permainan kanak-kanak, jambatan serta dataran Masjid Pangsun dan skrin giant TV 300". Semua kemudahan ini adalah sumbangan 100% infaq orang-ramai yang ingin melihat peranan Masjid Pangsun lebih terserlah sebagai pusat perkembangan ilmu dan pembangun ummah dan bukan semata-mata tempat solat lima waktu harian sahaja.</p>
							</div>
							<div class="col-md-4">
								<img src="images/masjid/sejarah_masjid.jpg">
								<br><br>
								<img src="images/masjid/masjidBaru1.jpg">
								<br><br>
								<img src="images/masjid/masjidBaru2.jpg">
							</div>
						</div>

					</div>
				</div>
				<br><br>
				<div class="container clearfix" id="visi">

					<div class="col_one_third">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4><span>Visi</span> Masjid.</h4>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

					</div>

					<div class="col_one_third">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4><span>Misi</span> Masjid.</h4>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

					</div>

					<div class="col_one_third col_last">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4><span>Fungsi</span> Masjid.</h4>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

					</div>

				</div>
				<div class="container clearfix" id="piagam">

					<div>

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<center><h4><span>Piagam</span> Pelanggan.</h4></center>
						</div>
						<div class="col-md-8 col-md-offset-2">
							<ol>
								<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</li><br>
								<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</li><br>
								<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</li><br>
								<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</li><br>
								<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</li><br>
							</ol>
						</div>

					</div>

				</div>

				