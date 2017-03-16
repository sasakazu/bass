

<?php get_template_part( 'info-header' ); ?>

  <div class="info">

    <h2>- お知らせ -</h2>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="container">

    <div class="info-main">

      <p class="info-date"><?php the_date(); ?></p>

      <h1 class="info-title"><?php the_title(); ?></h1>
      <p class="info-p"><?php the_content(); ?></p>

    <hr>
  </div>
</div>



  <?php endwhile; endif; ?>


</div>


<?php get_footer(); ?>
