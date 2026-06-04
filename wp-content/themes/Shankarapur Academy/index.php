<?php
get_header(); ?>
<main class="main">
  <!-- Page Title -->
  <div class="page-title">
        <div class="container">

    <!-- Service Details 2 Section -->
    <section id="service-details-2" class="service-details-2 section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

          <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up" data-aos-delay="150">
            <div class="service-header">
              <div class="service-category">
                <span>Shankarpur Academy</span>
              </div>
              <h2><?php the_title()?></h2>
              <p class="lead">Expert diagnosis and treatment for complex neurological conditions using state-of-the-art
                technology</p>
            </div>
          </div>

        </div>

        <div class="row gy-4 align-items-center">

          <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
            <div class="service-details">

              <div class="detail-item">
                <div class="icon-wrapper">
                  <i class="bi bi-activity"></i>
                </div>
                <div class="content">
                  <h4>Neurological Assessment</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
                    totam rem aperiam.</p>
                </div>
              </div>

              <div class="detail-item">
                <div class="icon-wrapper">
                  <i class="bi bi-diagram-2"></i>
                </div>
                <div class="content">
                  <h4>Brain Imaging &amp; Diagnosis</h4>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti.</p>
                </div>
              </div>

              <div class="detail-item">
                <div class="icon-wrapper">
                  <i class="bi bi-prescription2"></i>
                </div>
                <div class="content">
                  <h4>Treatment Planning</h4>
                  <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim
                    laborum.</p>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
            <div class="service-visual">
              <img src="<?php echo get_template_directory_uri()?>/assets/img/health/neurology-2.webp" alt="Neurology Services" class="img-fluid">
            </div>
          </div>

        </div>

        <div class="row gy-4 mt-5">

        </div>

        <div class="row gy-4 mt-5">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="action-card primary">
              <div class="card-header">
                <i class="bi bi-calendar-check"></i>
                <h4><?php the_title() ?></h4>
              </div>
              <p>Book your seat in nursing course now in Shankarapur Academy</p>
              <div class="card-footer">
                <a href="#!" class="btn-action">Enroll Now</a>
                <span class="availability">Next available: Tomorrow</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="action-card secondary">
              <div class="card-header">
                <i class="bi bi-telephone"></i>
                <h4>Contact Us </h4>
              </div>
              <p>Feel free to call us for any inquiries or questions.</p>
              <div class="card-footer">
                <a href="tel:+15551234567" class="btn-action">Call Now</a>
                <span class="availability"><?php echo esc_html(get_theme_mod('topbar_phone')); ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="action-card tertiary">
              <div class="card-header">
                <i class="bi bi-file-text"></i>
                <h4>Fill the form</h4>
              </div>
              <p>We’re here to answer your questions and help you build your future.           </p>
              <div class="card-footer">
                <a href="<?php echo esc_url( get_page_link( 9 ) ); ?>" class="btn-action">Apply Now</a>
                <span class="availability">Response within 48h</span>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Service Details 2 Section -->
</main>


    <?php get_footer(); ?>