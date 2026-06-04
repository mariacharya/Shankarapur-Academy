<?php
/**
 * single.php - Template for displaying single posts
 */
get_header(); ?>

  <!-- Page Title -->
  <div class="page-title">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1 class="heading-title"><?php the_title(); ?></h1>
            <p class="mb-0"><?php the_excerpt(); ?></p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li class="current"><?php the_title(); ?></li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Services Section -->
  <section id="services" class="services section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">

        <?php
        $args = array(
          'post_type'      => 'post',
          'category_name'  => 'newsandnotice',   // ← category slug
          'posts_per_page' => -1,               // -1 = show all posts
          'post_status'    => 'publish',
          'orderby'        => 'date',
          'order'          => 'DESC',
        );

        $services_query = new WP_Query( $args );
        ?>

        <?php if ( $services_query->have_posts() ) : ?>

          <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item">

                <!-- Dynamic Featured Image -->
                <div class="service-image">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'medium', [
                      'class' => 'img-fluid',
                      'alt'   => get_the_title(),
                    ] ); ?>
                  <?php else : ?>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/health/cardiology-2.webp"
                         alt="<?php echo esc_attr( get_the_title() ); ?>"
                         class="img-fluid">
                  <?php endif; ?>

                  <div class="service-overlay">
                    <i class="fas fa-heartbeat"></i>
                  </div>
                </div>

                <div class="service-content">

                  <!-- Dynamic Title -->
                  <h3><?php the_title(); ?></h3>

                  <!-- Dynamic Excerpt -->
                  <p><?php the_excerpt(); ?></p>

                  <!-- Dynamic Feature Items -->
                  <?php
                  $features = get_post_meta( get_the_ID(), 'service_features', true );
                  if ( $features ) : ?>
                    <div class="service-features">
                      <?php foreach ( explode( ',', $features ) as $feature ) : ?>
                        <span class="feature-item">
                          <i class="fas fa-check"></i>
                          <?php echo esc_html( trim( $feature ) ); ?>
                        </span>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>

                  <!-- Dynamic Read More Link -->
                  <a href="<?php the_permalink(); ?>" class="service-btn">
                    <span>Read More</span>
                    <i class="fas fa-arrow-right"></i>
                  </a>

                </div>
              </div>
            </div><!-- End Service Item -->

          <?php endwhile;
          wp_reset_postdata(); ?>

        <?php else : ?>
          <p>No posts found in this category.</p>
        <?php endif; ?>

      </div>
    </div>
  </section><!-- /Services Section -->

<?php get_footer(); ?>