{{--
  Title: Sliders
  Description: Sliders
  Category: common
  Icon: admin-comments
  Keywords:
  Mode: edit
  Align: left
  PostTypes:
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: true
--}}

@php
  $slider = get_field('select_slider');
@endphp

@php
if ($slider == 'referenzen-slider'):



  $loop = new WP_Query( array(
      'post_type' => 'referenzen',
      'posts_per_page' => -1
    )
  );


  while ( $loop->have_posts() ) : $loop->the_post();

    echo "shatkoCPT";

  endwhile;
  wp_reset_query();


  @endphp
  <div class="referenzen-slider">
    <div class="test-slider">




    </div>
  </div>
  @php

elseif ($slider == 'expertise-slider'):
  @endphp
    <h1>expertise-slider</h1>
  @php

else :
  echo 'no sliders for now...';
endif;
@endphp
