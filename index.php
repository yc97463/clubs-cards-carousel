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
  </head>
  <body>
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
  <section id="demos">
    <div class="row">
      <div class="large-12 columns">
        <div class="owl-carousel owl-theme">
            <?php foreach ($data as $item) { ?>
                <div class="item">
                    <img src="<?php echo "timthumb.php?h=150&w=200&zc=1&src=".urlencode("https://img.imych.one/photos/images/{$item['img']['url']}") ?>" class="cd_img">
                    <h4><?php echo "{$item['title']}" ?></h4>
                </div>
            <?php ;};?>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
          loop: true,
          autoplay:true,
          autoplayTimeout:1000,
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
  </body>