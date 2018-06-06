<!-- we built this page off of the content from single-event.php-->



<!-- wordpress will look for the name of my post type, with a "single-" in
front of it, to look for to use as formatting for a new post tyoe -->
<?php
get_header();// gets the contents of header.php



// how many times do we want to repeat this while loop? - as long as we have posts.
  while(have_posts()) {
    the_post(); ?>

    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg')?>);"></div>
        <div class="page-banner__content container container--narrow">
          <h1 class="page-banner__title"><?php the_title(); ?>
          </h1>
          <div class="page-banner__intro">
            <p>DON'T FORGET TO REPLACE THIS TEXTx LATER</p>
          </div>
        </div>
      </div>

      <div class="container container--narrow page-section">


      <div class="generic-content">
        <div class="metabox metabox--position-up metabox--with-home-link">

          <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('program'); ?>">
            <i class="fa fa-trophy" aria-hidden="true"></i> All Programs</a>
            <span class="metabox__main"><?php the_title(); ?></span>
          </p>

        </div>
        <?php the_content(); ?>

      </div>


      </div>

<?php  }
get_footer();// gets the contents of footer.php

 ?>