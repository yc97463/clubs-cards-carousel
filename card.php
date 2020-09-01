<?
    $data = json_decode( file_get_contents('clubs.json') , true );
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
    <link rel="stylesheet" href="style.css?<?php echo rand();?>">
    <style>
        *, section, body {
            background: rgba(255,255,255,0);
        }
        ::-webkit-scrollbar {
            width: 10px;
          }
        ::-webkit-scrollbar-track {
            /*background: #f1f1f1; */
            background: rgba(255,255,255,0);
            transition: left 1s ease-in-out, background 1s ease-out 1s;
        }
        ::-webkit-scrollbar-thumb {
            background: #b1a18b; 
        }
    </style>
  </head>
  <body>
      <?php if($_GET['mode']!="iframe"){?>
  <section class="section">
    <div class="container">
      <h1 class="title">
        Hello World
      </h1>
      <p class="subtitle">
        My first website with <strong>Bulma</strong>!
      </p>
    </div>
  </section>
  <?php ;}else{?>
  <section class="section">
    <div class="container">
      <p class="subtitle">
        <a class="button is-small" href="?mode=iframe&type=">所有類別<span id="dis">卡片</span></a>
        <a class="button is-small" href="?mode=iframe&type=學術類">學術<span id="dis">類</span></a>
        <a class="button is-small" href="?mode=iframe&type=藝文類">藝文<span id="dis">類</span></a>
        <a class="button is-small" href="?mode=iframe&type=運動類">運動<span id="dis">類</span></a>
        <a class="button is-small" href="?mode=iframe&type=康樂類">康樂<span id="dis">類</span></a>
        <a class="button is-small" href="?mode=iframe&type=服務類">服務<span id="dis">類</span></a>
      </p>
    </div>
  </section>
  <section id="scrollbr">
    <div class="row">
      <div class="large-12 columns">
        <div class="owl-carousel owl-theme">
            <?php foreach ($data as $item) { ?>
            <?php if($item['title']){?>
            <?php //if($item['tag']==$_GET['type']){include('cd.php');}else{include('cd.php');};?>
            <?php if($_GET['type']==null){include('cd.php');}elseif($item['tag']==$_GET['type']){include('cd.php');};?>
            <? //include('cd.php'); ?>
            <?php ;};?>
            <?php ;};?>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
          loop: true,
          random: true,
          autoplay:true,
          autoplayTimeout:5000,
          autoplayHoverPause:true,
          responsiveClass: true,
          responsive: {
            0: {
              items: 1,
              nav: true
            },
            600: {
              items: 2,
              nav: false
            },
            1000: {
              items: 3,
              nav: true,
              loop: false,
              margin: 20
            }
          }
        })
      })
    </script>
  </section>
  <?php ;};?>
  </body>