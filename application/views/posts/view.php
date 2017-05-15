<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/swiper.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <!-- Bootstrap Data Table Plugin -->
    <link rel="stylesheet" href="css/components/bs-datatable.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>Masjid Kg. Kuala Pangsun</title>

</head>


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
                            <li><a href="profil"><div>Profil</div></a></li>
                            <li class="current"><a href="organisasi"><div>Organisasi</div></a></li>
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

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin clearfix">

						<div class="single-post nobottommargin">

							<!-- Single Post
							============================================= -->
							<div class="entry clearfix">

								<!-- Entry Title
								============================================= -->
								<div class="entry-title">
									<h2><?php echo $post['title']; ?></h2>
								</div><!-- .entry-title end -->

								<!-- Entry Meta
								============================================= -->
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> <?php echo $post['date']; ?></li>
									<li><a href="#"><i class="icon-user"></i> admin</a></li>
									<!-- <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
									<li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li>
									<li><a href="#"><i class="icon-camera-retro"></i></a></li> -->
								</ul><!-- .entry-meta end -->

								<!-- Entry Image
								============================================= -->
								<div class="entry-image">
									<a href="#"><img class="thumbnail" src="<?php echo base_url(); ?>admin/uploads/images/<?php echo $post['picture']?>" alt="Blog Single" style="height:300px;width:300px;"></a>
								</div><!-- .entry-image end -->

								<!-- Entry Content
								============================================= -->
								<div class="entry-content notopmargin">

									<!-- <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

									<p>Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Curabitur blandit tempus porttitor</a>. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>

									<blockquote><p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p></blockquote>

									<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>

									<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. <a href="#">Nullam quis risus eget urna</a> mollis ornare vel eu leo. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

<pre>
#header-inner {
	width: 940px;
	margin: 0 auto;
	padding-top: 40px;
}</pre>

									<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

									<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p> -->
									<!-- Post Single - Content End -->

								</div>
							</div><!-- .entry end -->

							<!-- Post Navigation
							============================================= -->
							<div class="post-navigation clearfix">

								<div class="col_half nobottommargin">
									<a href="<?php echo base_url() ?>">&lArr; Go Back</a>
								</div>

							</div><!-- .post-navigation end -->

						</div>

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
<!-- 					<div class="sidebar nobottommargin col_last clearfix">
						<div class="sidebar-widgets-wrap">
							<div class="widget clearfix">

								<h4>Waktu Solat</h4>
								<iframe src="http://www.islamicfinder.org/prayer_service.php?country=malaysia&city=hulu_langat&state=&zipcode=&latitude=3.2092276&longitude=101.8757772&timezone=8&HanfiShafi=1&pmethod=1&fajrTwilight1=10&fajrTwilight2=10&ishaTwilight=10&ishaInterval=30&dhuhrInterval=1&maghribInterval=1&dayLight=0&page_background=&table_background=&table_lines=&text_color=&link_color=&prayerFajr=&prayerSunrise=&prayerDhuhr=&prayerAsr=&prayerMaghrib=&prayerIsha=&lang=" frameborder=0 width=175 height=350 marginwidth=0 marginheight=0 scrolling="no"> </iframe>

							</div>

						</div>

					</div> --><!-- .sidebar end -->

				</div> 
				               <div class="section nobottommargin">
                    <div class="container clear-bottommargin clearfix">

                        <div class="row topmargin-sm clearfix">

                            <div class="bottommargin">
                                <div class="row bottommargin">
                                    <center><font size="4">SAHAM AKHIRAT ANDA - RAYUAN INFAQ UNTUK TABUNG MASJID PANGSUN MELALUI PAY PAL DENGAN KAD VISA ATAU MASTER CARD TERUS KE AKAUN "MASJID KG KUALA PANSOON" DI RHB ISLAMIC BANK BERHAD</font></center>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-3">
                                        <center>
                                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                                    <input type="hidden" name="cmd" value="_s-xclick" />
                                                    <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                                                    " />
                                                    <input type="image" src="images/masjid/paypal.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" />
                                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" />
                                                </form>
                                            </center>
                                    </div>
                                    <div class="col-md-2">
                                        <center>
                                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                                    <input type="hidden" name="cmd" value="_s-xclick" />
                                                    <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                                                    " />
                                                    <input type="image" src="images/masjid/paypal.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" />
                                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" />
                                                </form>
                                            </center>
                                    </div>
                                    <div class="col-md-2">
                                        <center>
                                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                                    <input type="hidden" name="cmd" value="_s-xclick" />
                                                    <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                                                    " />
                                                    <input type="image" src="images/masjid/paypal.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" />
                                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" />
                                                </form>
                                            </center>
                                    </div>
                                </div>
                                <div class="row">
                                    <center><font size="4"><p>AKAUN MASJID : RHB ISLAMIC BANK.  No. A/k : <b>26209000009609</b>  .<br>SUMBANGAN CEK/WANG POS ATAS NAMA : " <b>MASJID KG KUALA PANSOON</b> "</p></font></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container clearfix" style="text-align: center;">

                    <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6">

                        <div class="oc-item"><a href="#"><img src="images/masjid/zakat.png" alt="Clients"><span style="text-align: center;">Lembaga Zakat Selangor</span></a></div>
                        <div class="oc-item"><a href="#"><img src="images/masjid/tabunghaji.png" alt="Clients"><span style="text-align: center;">Lembaga Tabung Haji</span></a></div>
                        <div class="oc-item"><a href="#"><img src="images/masjid/jais.png" alt="Clients"><span style="text-align: center;">Jabatan Agama Islam Selangor</span></a></div>
                        <div class="oc-item"><a href="#"><img src="images/masjid/mais.png" alt="Clients"><span style="text-align: center;">Majlis Agama Islam Selangor</span></a></div>
                        <div class="oc-item"><a href="#"><img src="images/masjid/selangor.png" alt="Clients"><span style="text-align: center;">Kerajaan Negeri Selangor</span></a></div>

                    </div>


                </div>

            </div>

        </section><!-- #content end -->

<!-- Footer
        ============================================= -->
        <footer id="footer" class="dark">

            <div class="container">

                <!-- Footer Widgets
                ============================================= -->
                <div class="footer-widgets-wrap clearfix" style="text-align: center;">

                        <h4>Soalan Lazim &nbsp | &nbsp Hak Cipta &nbsp | &nbsp Peta Laman</h4>
                        <h4>Hakcipta Terpelihara © <?php echo date('Y'); ?> Masjid Kg. Kuala Pangsun<br>Tel : 019-2338393 / 012-6913697<br>Last Update : <?php echo date('l d M Y'); ?></h4>
                        <!-- <?php echo date('Y'); ?> -->

                </div><!-- .footer-widgets-wrap end -->

            </div>

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="js/functions.js"></script>

    <!-- Bootstrap Data Table Plugin -->
    <script type="text/javascript" src="js/components/bs-datatable.js"></script>

    <script>

        $(document).ready(function() {
            $('#datatable1').dataTable();
        });

    </script>

    <!--Map-->
    <script>
      function initMap() {
        var uluru = {lat: 3.2092276, lng: 101.8757772};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0oza8YJ8SkOeSk8ouuSJf932cMrUj-LE&callback=initMap">
    </script>

</body>
</html>