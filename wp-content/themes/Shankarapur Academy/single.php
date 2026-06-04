<?php
/**
 * single.php - Template for displaying single posts
 * Dynamically renders post content, meta, author info,
 * navigation, and comments using WordPress core functions.
 */

get_header(); ?>
   <!-- Page Title -->
   <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title"><?php the_category()?> </h1>
              <p class="mb-0">
              “Building Skilled Professionals for Better Healthcare.”
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="current">Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

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
              <p class="lead"><?php the_content() ?></p>
            </div>
          </div>

        </div>

        


      </div>

    </section>

    <?php get_footer(); ?>