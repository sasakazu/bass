<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
    <script src="https://use.fontawesome.com/2c5b8ace6a.js"></script>

    <?php wp_head(); ?>


    <script>
    //スムーズスクロール
    jQuery(function(){
       // #で始まるアンカーをクリックした場合に処理
       jQuery('a[href^=#]').click(function() {
    	  // スクロールの速度
    	  var speed = 400; // ミリ秒
    	  // アンカーの値取得
    	  var href= jQuery(this).attr("href");
    	  // 移動先を取得
    	  var target = jQuery(href == "#" || href == "" ? 'html' : href);
    	  // 移動先を数値で取得
    	  var position = target.offset().top;
    	  // スムーススクロール
    	  jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
    	  return false;
       });
    });
    </script>


  </head>

  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Bass, inc.</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
