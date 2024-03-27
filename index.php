    <?php include('assets/vapors/asciitag.php'); ?>

<!DOCTYPE html>
<html lang="en">

    <?php include('assets/vapors/head.php'); ?>

<body>
	
<!--
# ///////////////
# HEADER
# ///////////////
-->
      
  <header id="header" class="header-tops">
    <div class="container">
		
      <h1><a href="/.">SVDE</a></h1>
      <!-- uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>	i am a <span>musician/sound designer/producer</span><br><br>
		  	<span>programmer/database developer</span><br><br>
			<span>graphic designer</span><br><br>
				  & a slew of other things</h2>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">home</a></li>
          <li><a href="#bio">bio</a></li>
          <!--li><a href="#resume">resume</a></li-->
          <!--li><a href="#services">services</a></li-->
          <!--li><a href="#works">works</a></li-->
          <li><a href="#contact">contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

<!--
# ///////////////
# REMOVED-SOCIAL
# ///////////////
-->

      <!--div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div-->

    </div>
  </header>

<!--
# ///////////////
# BIO
# ///////////////
-->

  <section id="bio" class="bio">

    <!-- ======= bio ======= -->
    <div class="bio container">

      <div class="section-title">
        <h2>bio</h2>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>SOUND / DESIGN / CODE / ART / OVERTHINKING</h3>
          <div class="row">
            <div class="col-lg-6">
        </div>
          </div>

          <p>
            i do a lot of different things. this is a repository for those things. <br>
            this site is heavily under construction.
          </p>
            
        <h3> L I N K S </h3>
            <ul>
                <li>AUDIO</li>
                    <li><i class="icofont-rounded-right"><a href="https://soundcloud.com/svdeblk" target=_blank>soundcloud</a></i></li>
                    <li><i class="icofont-rounded-right"><a href="https://svde.bandcamp.com"  target=_blank>bandcamp</a></i></li>
                <li>GRAPHIC DESIGN / CRAFT</li>
                    <li><i class="icofont-rounded-right"><a href="https://preyforday.com"  target=_blank>prey for day</a></i></li>
                <li>WRITING</li>
                        <li><i class="icofont-rounded-right"><a href="https://decomprosed.com"  target=_blank>decomprosed</a></i></li>
            </ul>
        </div>
      </div>

    </div>

  </section>

<!--
# ///////////////
# CONTACT
# ///////////////
-->

  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>get in touch</h2>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>email</h3>
            <p>svde.blk@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-hash"></i>
            <h3>socially distant</h3>
                <div class="social-links">
                <a href="https://twitter.com/SVDEBLK" class="twitter" target=_blank><i class="icofont-twitter"></i></a>
                <a href="https://www.instagram.com/svde.rip/" class="instagram" target=_blank><i class="icofont-instagram"></i></a>
                <a href="https://soundcloud.com/svde" class="soundcloud" target=_blank><i class="custom-icofont-soundcloud"><img src="assets/img/icofont/icofont-soundcloud.ico"  class="icocustom"></i></a>
                <a href="https://svde.bandcamp.com" class="bandcamp" target=_blank><i class="custom-icofont-bandcamp"><img src="assets/img/icofont/icofont-bandcamp.ico" class="icocustom"></i></a>

                </div>
          </div>
        </div>
      </div>

<!--
# ///////////////
# CONTACT FORM
# ///////////////
-->

      <form action="assets/forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="form-row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="your name" data-rule="minlen:4" data-msg="please enter at least 4 chars" />
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="your email" data-rule="email" data-msg="please enter a valid email" />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="subject" data-rule="minlen:4" data-msg="please enter at least 8 chars of subject" />
          <div class="validate"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="please write something for us" placeholder="message"></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
          <div class="loading">loading</div>
          <div class="error-message"></div>
        </div>
        <div class="text-center"><button type="submit">send message</button></div>

      </form>

    </div>
  </section>

<!--
# ///////////////
# FOOTER
# ///////////////
-->

  <div class="footer">
    designed without any regard for my mental health
  </div>

<!--
# ///////////////
# JS-VENDOR
# ///////////////
-->

    <?php include('assets/vapors/vendor.php'); ?>

<!--
# ///////////////
# JS
# ///////////////
-->

  <script src="assets/js/main.js"></script>

</body>

</html>
