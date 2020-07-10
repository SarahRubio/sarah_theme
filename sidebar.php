<aside class="sidebar <?php if(get_theme_mod('sidebar-hidden')) : echo 'hidden'; endif; ?>">
  <?php
    if(is_active_sidebar('widgets-sidebar')) :
      dynamic_sidebar('widgets-sidebar');
    endif;
   ?>
</aside>
