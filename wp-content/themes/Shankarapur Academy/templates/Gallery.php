  <?php get_header();?>

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Gallery</h1>
              <p class="mb-0">
              Explore the memories, activities, and achievements of our students and campus life.

              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Gallery</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

  
<!-- Gallery Section -->
<section id="gallery" class="gallery section">

  <!-- Inline styles for uniform image size -->
  <style>
    .gallery-item {
      aspect-ratio: 4 / 3;
      overflow: hidden;
    }

    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      display: block;
      transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
      transform: scale(1.05);
    }
  </style>

  <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4 justify-content-center">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php $images = get_all_images_from_content( get_the_ID() ); ?>

        <?php if ( ! empty( $images ) ) : ?>

          <?php foreach ( $images as $image_url ) : ?>

            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery-item h-100">

                <img src="<?php echo esc_url( $image_url ); ?>"
                     alt="<?php echo esc_attr( get_the_title() ); ?>"
                     class="img-fluid">

                <div class="gallery-links d-flex align-items-center justify-content-center">

                  <a href="<?php echo esc_url( $image_url ); ?>"
                     title="<?php echo esc_attr( get_the_title() ); ?>"
                     class="glightbox preview-link">
                    <i class="bi bi-arrows-angle-expand"></i>
                  </a>

                  <a href="<?php echo esc_url( get_permalink() ); ?>" class="details-link">
                    <i class="bi bi-link-45deg"></i>
                  </a>

                </div>

              </div>
            </div><!-- End Gallery Item -->

          <?php endforeach; ?>

        <?php endif; ?>

      <?php endwhile; ?>

    </div>

  </div>

</section><!-- /Gallery Section -->
<?php get_footer(); ?>
