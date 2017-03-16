


<?php get_header(); ?>


<div class="top-img">
  <img src="<?php bloginfo('template_directory'); ?>/img/cameron.png" alt="">
    <h2><?php bloginfo('name'); ?><br>
      <small>
        <?php bloginfo('description'); ?>
      </small>
    </h2>

</div>


  <div class="about-main" id="about">
    <div class="container">
      <h2>ABOUT</h2>
      <p>- 私たちについて -</p>

      <table class="table">
        <tbody>
          <tr>
            <td class="td1">社名</td>
            <td class="td2">Bass, inc</td>
          </tr>

          <tr>
            <td class="td1">代表者</td>
            <td class="td2">小林武<a href="https://twitter.com" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></td>
          </tr>

          <tr>
            <td class="td1">本社所在地</td>
            <td class="td2">滋賀県守山市</td>
          </tr>

          <tr>
            <td class="td1">事業内容</td>
            <td class="td2">運搬、配送、設営など</td>
          </tr>

          <tr>
            <td class="td1">メールアドレス</td>
            <td class="td2">info@gmail.com</td>
          </tr>

        </tbody>
      </table>


  </div>
</div>


  <div class="contact-main"  id="contact">
      <h2>CONTACT</h2>
      <p class="contact-p">- お問い合わせ -</p>
      <?php echo do_shortcode( '[contact-form-7 id="36" title="コンタクトフォーム 1"]' ); ?>

  </div>






<?php get_footer(); ?>
