<?php 

get_header(); 
pageBanner(array(
  'title' => 'All Events',
  'subtitle' => "See what is going on in Bird's World"
));
?>



  <div class="container container--narrow page-section">
  <?php 
    while(have_posts()) {
      the_post(); 
      get_template_part('template-parts/content-event');
      
     }
    echo paginate_links();

  ?>

<hr class="section-break">

<p>Looking for a recap of past events, or other things the birds have done? <a href="<?php echo site_url('/past-bird-events'); ?>">Check out bird's past events page.</a></p>
  </div>


<?php get_footer();


?>