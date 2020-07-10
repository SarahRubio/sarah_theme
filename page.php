<?php get_header(); ?>
  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <section class="page-header" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
          <h1 class="page-title"><?php the_title(); ?></h1>
        </section>
        <main class="container site-content">
          <article class="entry page">
            <section class="entry-content">
              <?php the_content(); ?>
            </section>
          </article>
        </main>
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>