  <!-- Navigation -->
    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo site_url('home')?>">FKM ANDALUSIA</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#agenda">Agenda</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Kegiatan</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="<?php echo site_url('gemaramadhan')?>"> Gema Ramadhan </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Selamat datang di Forum Keluarga Muslim Andaluisa!</div>
                <div class="intro-heading">Berkumpul Bersama Sebagai Keluarga, Berjuang Bersama Menuju Surga</div>
                <a href="#agenda" class="page-scroll btn btn-xl">Show me details</a>
            </div>
        </div>
    </header>
<section id="agenda">
    	<div class="block-items">
    		<div class="container">
          <h2 style="text-align:center" class="section-heading">Agenda</h2>
          <h3 class="section-subheading text-muted" style="text-align: center">Apa saja sih agenda FKM Andalusia?</h3>
    			<ul class="row featured-job">
            <?php
            foreach ($agenda as $key) {
              $title=$key['title'];
              $description=$key['description'];
              $time=$key['time'];
              ?>

    				<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 wow fadeInUp">
    					<div class="inner">
    						<div class="vote">
    							<div class="rate-it star" data-score="3.5"></div>
    						</div>
    						<a href="<?php echo site_url("index.php/home/detail")?> "><img src="img/kegiatan/kajian.JPG" alt=""></a>
    						<h2 class="name-job"><a href="<?php echo site_url("index.php/home/detail")?>"><?php echo $title ?></a></h2>
                <p class="h2cus"><?php echo $description ?></p>
    						<div class="price">
    							<span ><?php echo $time ?><sup></sup></span>
    						</div>
    					</div>
    				</li>

            <?php } ?>
          </ul>
        </div>
      </div>
</section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kegiatan</h2>
                    <h3 class="section-subheading text-muted">Apa saja sih kegiatan yang pernah dilakukan oleh FKM Andalusia?</h3>
                </div>
            </div>
            <div class="row">
              <!--1. gema ramadhan 1-->
              <div class="col-md-4 col-sm-6 portfolio-item">
                  <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                      <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                              <i class="fa fa-plus fa-3x"></i>
                          </div>
                      </div>
                      <img src="img/kegiatan/gema.JPG" class="img-responsive" alt="">
                  </a>
                  <div class="portfolio-caption">
                      <h4>Gema Ramadhan 1</h4>
                      <p class="text-muted">27 Juni 2016</p>
                  </div>
              </div>
              <!--2. Muktamar-->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/kegiatan/muktamar/muktamar1.JPG" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Mukhtamar</h4>
                        <p class="text-muted"> 3-4 Oktober 2015</p>
                    </div>
                </div>
                <!--3. Santuan anak Yatim -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/kegiatan/santuan/santuan.JPG" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Santunan Anak Yatim</h4>
                        <p class="text-muted">22 Oktober 2015</p>
                    </div>
                </div>
                <!--4. LDK-->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/kegiatan/ldk/ldk2.JPG" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>LDK</h4>
                        <p class="text-muted">22 November 2015</p>
                    </div>
                </div>
                <!--5. Rihlah-->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/kegiatan/rihlah/rihlah2.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Rihlah</h4>
                        <p class="text-muted">3 April 2016</p>
                    </div>
                </div>
                <!--6. Fosil-->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/kegiatan/muktamar/muktamar5.JPG" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>FOSIL (Forum Silaturahmi)</h4>
                        <p class="text-muted">10 April 2016</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Mari kita lebih Mengenal Apa itu FKM Andalusia</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/logo.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2013-2014</h4>
                                    <h4 class="subheading">Proses Pendirian FKM Andalusia</h4>
                                </div>
                                <div class="timeline-body">
                                  <p class="text-muted">Pada masa ini proses pendirian FKM Andalusia berlangsung, dimana pada mulainya FKM Andalusia hanya kajian biasa yang dilakukan oleh sekelompok mahasiswa muslim Surya University, namun pada akhirnya mereka sepakat untuk mendirikan sebuah organisasi </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/logo.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>February 2014</h4>
                                    <h4 class="subheading">FKM Andalusia resmi didirikan</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Tepatnya Pada tanggal 1 February 2014 secara resmi FKM Andalusia di dirikan sebagai sebuah organisasi yang bertujuan sebagai tempat silahturahmi antar mahasiswa muslim Surya University</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Team</h2>
                    <h3 class="section-subheading text-muted">Kepengurusan FKM Andalusia terdiri dari beberapa team yaitu :</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="team-member">
                        <a id="bph" onclick="ajax_load_page_bph()" class="portfolio-link">
                        <img src="img/kegiatan/muktamar/muktamar5.JPG" class="img-responsive img-rounded" alt="">
                        </a>
                        <h4>Badan Pengurus Harian</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                     <a id="keilmuan" class="portfolio-link">
                        <img src="img/kegiatan/muktamar/muktamar5.JPG" class="img-responsive img-rounded" alt="">
                     </a>
                        <h4>Keilmuan</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <a href="#" onclick="" class="portfolio-link">
                        <img src="img/kegiatan/muktamar/muktamar5.JPG" class="img-responsive img-rounded" alt="">
                        </a>
                        <h4>Kaderisasi</h4>
                        <p class="text-muted">L</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <a href="#" onclick="" class="portfolio-link">
                        <img src="img/kegiatan/muktamar/muktamar5.JPG" class="img-responsive img-rounded" alt="">
                        </a>
                        <h4>Media</h4>
                    <p class="text-muted"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="keterangan">
                    <img src="img/pengurus.JPG" class="img-responsive img-rounded" alt="pengurus">
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logo.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2014</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-bicycle"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 Muktamar -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Muktamar 1 FKM Andalusia</h2>
                            <!--Show Picture on slide mode-->
                            <div id="Muktamar" class="carousel slide" data-ride="carousel">
                              <!-- Indicators-->
                              <ol class="carousel-indicators">
                                <li data-target="#Muktamar" data-slide-to="0" class="active"></li>
                                <li data-target="#Muktamar" data-slide-to="1"></li>
                                <li data-target="#Muktamar" data-slide-to="2"></li>
                                <li data-target="#Muktamar" data-slide-to="3"></li>
                                <li data-target="#Muktamar" data-slide-to="5"></li>
                                <li data-target="#Muktamar" data-slide-to="4"></li>
                              </ol>

                              <div class="carousel-inner" role="listbox">
                                <!-- photo 1-->
                                <div class="item active">
                                  <img src="img/kegiatan/muktamar/muktamar1.JPG" alt="Muktamar 1">
                                  <div class="carousel-caption">
                                    <h3>Rihlah</h3>
                                    <p>Menjelajah Air Terjun</p>
                                  </div>
                                </div>
                                <!--photo 2-->
                                <div class="item">
                                  <img src="img/kegiatan/muktamar/muktamar2.JPG" alt="Muktamar 1">
                                  <div class="carousel-caption">
                                    <h3>Rihlah</h3>
                                    <p>Menjelajah Air Terjun</p>
                                  </div>
                                </div>
                                <!--Photo 3-->
                                <div class="item">
                                  <img src="img/kegiatan/muktamar/muktamar3.JPG" alt="Muktamar 1">
                                  <div class="carousel-caption">
                                    <h3>Rihlah</h3>
                                    <p>............</p>
                                  </div>
                                </div>
                                <!--Photo 4-->
                                <div class="item">
                                  <img src="img/kegiatan/muktamar/muktamar4.JPG" alt="Muktamar 1">
                                  <div class="carousel-caption">
                                    <h3>Rihlah</h3>
                                    <p>............</p>
                                  </div>
                                </div>
                                <!--Photo 5-->
                                <div class="item">
                                  <img src="img/kegiatan/muktamar/muktamar5.JPG" alt="Muktamar 1">
                                  <div class="carousel-caption">
                                    <h3>Rihlah</h3>
                                    <p>............</p>
                                  </div>
                                </div>
                                <!--Photo 6-->
                                <div class="item">
                                  <img src="img/kegiatan/muktamar/muktamar5.JPG" alt="Muktamar 1">
                                  <div class="carousel-caption">
                                    <h3>Rihlah</h3>
                                    <p>............</p>
                                  </div>
                                </div>
                              </div> <!-- end of carousel-inner -->

                              <!-- Left and right controls-->
                              <a class="left carousel-control" href="#Muktamar" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#Muktamar" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>

                            <p class="item-intro text-muted">Menjadi Bagian dari Batu-Bata Peradaban</p>
                            <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                            <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                            <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                            <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 Rihlah -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>RIHLAH TIM FKM ANDALUSIA</h2>
                            <p class="item-intro text-muted">Merajut Indahnya Ukhuwah, Merapatkan Barisan Dakwah</p>

                            <!--Show Picture on slide mode-->
                            <div id="Rihlah_picture" class="carousel slide" data-ride="carousel">
                              <!-- Indicators-->
                              <ol class="carousel-indicators">
                                <li data-target="#Rihlah_picture" data-slide-to="0" class="active"></li>
                                <li data-target="#Rihlah_picture" data-slide-to="1"></li>
                                <li data-target="#Rihlah_picture" data-slide-to="2"></li>
                                <li data-target="#Rihlah_picture" data-slide-to="3"></li>
                                <li data-target="#Rihlah_picture" data-slide-to="4"></li>
                                <li data-target="#Rihlah_picture" data-slide-to="5"></li>
                              </ol>

                              <div class="carousel-inner" role="listbox">
                                <!-- photo 1-->
                                <div class="item active">
                                  <img src="img/kegiatan/rihlah/rihlah1.jpg" alt="Rihlah 1">
                                  <div class="carousel-caption">
                                    <h3>Rihlah</h3>
                                    <p>Menjelajah Air Terjun</p>
                                  </div>
                                </div>
                                <!--photo 2-->
                                <div class="item">
                                  <img src="img/kegiatan/rihlah/rihlah2.jpg" alt="Rihlah 1">
                                  <div class="carousel-caption">
                                    <h3>Rihlah</h3>
                                    <p>Menjelajah Air Terjun</p>
                                  </div>
                                </div>
                                <!--Photo 3-->
                                <div class="item">
                                  <img src="img/kegiatan/rihlah/rihlah3.jpg" alt="rihlah 3">
                                  <div class="carousel-caption">
                                    <h3>Rihlah</h3>
                                    <p>............</p>
                                  </div>
                                </div>
                                <!--Photo 4-->
                                <div class="item">
                                  <img src="img/kegiatan/rihlah/rihlah4.jpg" alt="rihlah 4">
                                  <div class="carousel-caption">
                                    <h3>Rihlah</h3>
                                    <p>............</p>
                                  </div>
                                </div>
                                <!--Photo 5-->
                                <div class="item">
                                  <img src="img/kegiatan/rihlah/rihlah5.jpg" alt="rihlah 5">
                                  <div class="carousel-caption">
                                    <h3>Rihlah</h3>
                                    <p>............</p>
                                  </div>
                                </div>
                                <!--Photo 6-->
                                <div class="item">
                                  <img src="img/kegiatan/rihlah/rihlah6.jpg" alt="rihlah 6">
                                  <div class="carousel-caption">
                                    <h3>Rihlah</h3>
                                    <p>............</p>
                                  </div>
                                </div>
                              </div> <!-- end of carousel-inner -->

                              <!-- Left and right controls-->
                              <a class="left carousel-control" href="#Rihlah_picture" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#Rihlah_picture" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                            <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                            <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
