<?php get_header(); ?>
  <!-- Page Title -->
  <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Contact</h1>
              <p class="mb-0">
              Get in touch with us today and take the first step toward your successful career.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-5">
          <div class="col-lg-5">
            <div class="contact-info-wrapper">
              <div class="contact-info-item" data-aos="fade-up" data-aos-delay="100">
                <div class="info-icon">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="info-content">
                  <h3>Our Address</h3>
                  <p><?php echo esc_html(get_theme_mod('topbar_address')); ?></p>
                </div>
              </div>

              <div class="contact-info-item" data-aos="fade-up" data-aos-delay="200">
                <div class="info-icon">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="info-content">
                  <h3>Email Address</h3>
                  <p><?php echo esc_html(get_theme_mod('topbar_email')); ?></p>
                </div>
              </div>

              <div class="contact-info-item" data-aos="fade-up" data-aos-delay="300">
                <div class="info-icon">
                  <i class="bi bi-headset"></i>
                </div>
                <div class="info-content">
                  <h3>Call us</h3>
                  <p><?php echo esc_html(get_theme_mod('topbar_phone')); ?></p>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="contact-form-card" data-aos="fade-up" data-aos-delay="200">
              <h2>Send us a Message</h2>
              <p class="mb-4">Have questions or want to learn more? Reach out to us and our team will get back to you
                shortly.</p>

                <?php  echo do_shortcode('[contact-form-7 id="55e1708" title="Contact form 1"]'); ?>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid map-container" data-aos="fade-up" data-aos-delay="200">
        <div class="map-overlay"></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.914721642582!2d85.32246587512219!3d27.65811002766199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb17e112014393%3A0xac190aaac5739c07!2sShankarapur%20Academy!5e0!3m2!1sen!2snp!4v1779946409577!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

    </section><!-- /Contact Section -->

<?php get_footer(); ?>