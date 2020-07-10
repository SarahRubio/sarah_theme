<?php get_header(); ?>
  <section class="page-header front-page-header" style="background-image: url('<?php echo get_theme_mod('banner_image'); ?>');">
    <h1 class="page-title" style="font-size: <?php echo get_theme_mod('fp_texts_title_size'); ?>px;">
      <?php echo get_theme_mod('fp_texts_title'); ?></h1>
    <a href="<?php echo get_theme_mod('fp_button_url'); ?>">
      <button type="button" class="call-to-action <?php echo get_theme_mod('fp_button_style'); ?>">
        <?php echo get_theme_mod('fp_button_text'); ?>
      </button>
  </a>
  </section>
  <main class="container front-content">
    <section class="custom-presentation">
      <img src="<?php echo get_theme_mod('fp_container_image'); ?>" alt="">
      <div class="custom-presentation-infos">
        <h2 class="custom-title"><?php echo get_theme_mod('fp_description_title'); ?></h2>
        <p class="custom-content">
            <?php echo get_theme_mod('fp_description_text'); ?>
        </p>
        <a href="page.html">
          <button type="button" class="call-to-action"<?php echo get_theme_mod('fp_button_description_style'); ?>">
            <?php echo get_theme_mod('fp_button_description-text'); ?>
          </button>
          
        </a>
      </div>
    </section>
    <section class="custom-blocks">
      <div class="custom-block">
        <i class="fas fa-birthday-cake fa-3x"></i>
        <h3 class="custom-title"><?php echo get_theme_mod('custom_block_1_title'); ?></h3>
        <p class="custom-content">
          <?php echo get_theme_mod('custom_block_1_text'); ?>
        </p>
      </div>
      <div class="custom-block">
        <i class="fas fa-music fa-3x"></i>
        <h3 class="custom-title"><?php echo get_theme_mod('custom_block_2_title'); ?></h3>
        <p class="custom-content">
          <?php echo get_theme_mod('custom_block_2_text'); ?>
        </p>
      </div>
      <div class="custom-block">
        <i class="fas fa-ticket-alt fa-3x"></i>
        <h3 class="custom-title"><?php echo get_theme_mod('custom_block_3_title'); ?></h3>
        <p class="custom-content">
          <?php echo get_theme_mod('custom_block_3_text'); ?>
        </p>
      </div>
    </section>
    <section class="custom-section">
      <blockquote class="star-quote <?php echo get_theme_mod('fp_quote_background'); ?>">
        <p class="quote-content">
          <?php echo get_theme_mod('fp_quote_text'); ?>
        </p>
        <cite class="quote-footer">
          <?php echo get_theme_mod('fp_quote_source'); ?>
        </cite>
      </blockquote>
    </section>
  </main>
<?php get_footer(); ?>