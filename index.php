


<?php get_header(); ?>


<div class="top-img">
  <img src="<?php bloginfo('template_directory'); ?>/img/cameron.png" alt="">
    <h2><?php bloginfo('name'); ?><br>
      <small>
        <?php bloginfo('description'); ?>
      </small>
    </h2>

</div>


  <div class="about-main">
    <div class="container">


    <h2>ABOUT</h2>


  </div>



  <div class="contact-main"  id="contact">
      <h2>CONTACT</h2>
      <p class="contact-p">- お問い合わせ -</p>
      <?php echo do_shortcode( '[contact-form-7 id="36" title="コンタクトフォーム 1"]' ); ?>

    </div>
  </div>



















<?php get_footer(); ?>
