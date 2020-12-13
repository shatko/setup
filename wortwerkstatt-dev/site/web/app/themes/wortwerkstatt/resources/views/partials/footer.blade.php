<footer class="content-info">
  <div class="container">
    <nav class="nav-primary-footer">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'main-nav-footer']) !!}
      @endif
    </nav>

    <p>{{ get_field('footer_general_information', 'option')['title'] }}</p>

    @php
    if (have_rows('footer_socials', 'option')):
      while (have_rows('footer_socials', 'option')) : the_row();
        $icon = get_sub_field('social_icon');
        echo $icon;
      endwhile;
    else :
      echo 'no entries given...';
    endif;
    @endphp

    <nav class="nav-footer">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer-nav']) !!}
      @endif
    </nav>
  </div>
</footer>
