<?php get_header(); ?>

<main role="main" class="main-pc">
  <!--swiper-->
  <section class="container swiper-con">
    <div class="swiper-container">
      <div class="swiper-wrapper">

          <?php
          $args = array(
              'category_name' => 'swiper-banner'
          );
          $posts = get_posts($args);
          ?>
          <?php if ($posts) : ?>
              <?php foreach ($posts as $post) :
                  setup_postdata($post); ?>
              <a class="swiper-slide" href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail(); ?>
              </a>
              <?php endforeach; ?>
          <?php endif; ?>

      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </section>

    <?php
    $args = array(
        'category_name' => 'brand');
    $posts = get_posts($args);
    get_template_part('loop');
    ?>

</main>

<main role="main" class="main-sp">
  <!--commercial-->
  <section class="commercial-con">
      <?php
      $args = array(
          'category_name' => 'commercial');
      $posts = get_posts($args);
      ?>
      <?php if ($posts) : ?>
          <?php foreach ($posts as $post) :
              setup_postdata($post); ?>
          <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(); ?>
          </a>
          <?php endforeach; ?>
      <?php endif; ?>
  </section>

  <!--brand-->
  <section class="category-section">
    <header>品<br>牌<br>brand</header>
      <?php
      $args = array(
          'category_name' => 'brand',
          'showposts' => '6');
      $posts = get_posts($args);
      get_template_part('loop');
      ?>
    <section class="container no-padding swiper-con">
      <div class="swiper-container">
        <div class="swiper-wrapper">

            <?php
            $args = array(
                'category_name' => 'swiper-banner'
            );
            $posts = get_posts($args);
            ?>
            <?php if ($posts) : ?>
                <?php foreach ($posts as $post) :
                    setup_postdata($post); ?>
                <a class="swiper-slide" href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
  </section>

  <!--pack-->
  <section class="category-section">
    <header>包<br>装<br>pack</header>
      <?php
      $args = array(
          'category_name' => 'brand',
          'showposts' => '6');
      $posts = get_posts($args);
      get_template_part('loop');
      ?>
    <section class="container no-padding swiper-con">
      <div class="swiper-container">
        <div class="swiper-wrapper">

            <?php
            $args = array(
                'category_name' => 'swiper-banner-2'
            );
            $posts = get_posts($args);
            ?>
            <?php if ($posts) : ?>
                <?php foreach ($posts as $post) :
                    setup_postdata($post); ?>
                <a class="swiper-slide" href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
  </section>

  <!--sign-->
  <section class="category-section">
    <header>标<br>志<br>sign</header>
      <?php
      $args = array(
          'category_name' => 'brand',
          'showposts' => '6');
      $posts = get_posts($args);
      get_template_part('loop');
      ?>
    <section class="container no-padding swiper-con">
      <div class="swiper-container">
        <div class="swiper-wrapper">

            <?php
            $args = array(
                'category_name' => 'swiper-banner-3'
            );
            $posts = get_posts($args);
            ?>
            <?php if ($posts) : ?>
                <?php foreach ($posts as $post) :
                    setup_postdata($post); ?>
                <a class="swiper-slide" href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
  </section>

  <!--inset-->
  <section class="category-section">
    <header>插<br>画<br>inset</header>
      <?php
      $args = array(
          'category_name' => 'brand',
          'showposts' => '6');
      $posts = get_posts($args);
      get_template_part('loop');
      ?>
  </section>
</main>
<?php get_footer(); ?>
