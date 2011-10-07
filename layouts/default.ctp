<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php echo $title_for_layout; ?></title>
  <?php
    echo $this->Layout->meta();
    echo $this->Layout->feed();
    echo $this->Html->css(array(
      'reset',
      '960',
      'theme',
    ));
    echo $this->Layout->js();
    echo $this->Html->script(array(
      'jquery-1.6.2',
      'modernizr-2.0.6.min',
      'theme'
    ));
    echo $scripts_for_layout;
  ?>
</head>
<body>

  <div id="outer">
    <div id="inner">
    
      <header>
        <h1><?php echo $this->Html->link(Configure::read('Site.title'), '/'); ?></h1>
        <nav><?php echo $this->Layout->menu('main', array('dropdown' => true)); ?></nav>
      </header>
      
      <div id="main" role="main">
        <?php
          echo $this->Layout->sessionFlash();
          echo $content_for_layout;
        ?>
      </div>
      
      <footer>
        <p>Footer</p>
      </footer>
    
    </div>
  </div>

  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>