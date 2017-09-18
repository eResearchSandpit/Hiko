<!-- Archive emplate used for the Projects custom post type -->

<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <h1><?php the_archive_title(); ?></h1>

      <!-- The Loop through posts -->
      <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'projects' ); ?>

      <?php endwhile; else : ?>

        <?php get_template_part('template-parts/content', 'none'); ?>

      <?php endif; ?>

      <?php echo paginate_links(); ?>

      <p>Template: archive-projects.php</p>

    </main>

  </div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
