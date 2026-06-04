<?php get_header(); ?>
<main class="main">
  <!-- Start Bannersection -->
<?php get_template_part('templates/Banner'); ?>
 <!-- End Bannersection -->

  <!-- Start Aboutsection -->
<?php get_template_part('templates/About-us'); ?>
 <!-- End Aboutsection -->

   <!-- Start Facultysection -->
<?php get_template_part('templates/Faculty'); ?>
 <!-- End Facultysection -->

 
 <div class="container-fluid map-container" data-aos="fade-up" data-aos-delay="200">
        <div class="map-overlay"></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.914721642582!2d85.32246587512219!3d27.65811002766199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb17e112014393%3A0xac190aaac5739c07!2sShankarapur%20Academy!5e0!3m2!1sen!2snp!4v1779946409577!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

<?php get_footer();?>