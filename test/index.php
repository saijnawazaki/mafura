<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../dist/mafura.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css" integrity="sha256-IKIuKgYQ+ogofw+KAz4fjF+zq7fwoNUnEVts493jKKE=" crossorigin="anonymous" />
    <title>Mafura - Test</title>
  </head>
  <body>
    <?php
    include ('path/header.php');
    ?>
    <div id="carousel">
      <div class="carousel-cell" style="background-image:url(https://repo.manastudio.id/manastudio/artwork/rekiyagami_girl_sky.jpg);">
        <div class="carousel-cell-caption">Static banner 1</div>

      </div>
      <div class="carousel-cell" style="background-image:url(https://repo.manastudio.id/manastudio/artwork/saijnawazaki_manusia_aneh_aldo_hana.jpg);">
        <div class="carousel-cell-caption">Static banner 1</div>

      </div>
      <div class="carousel-cell" style="background-image:url(https://repo.manastudio.id/manastudio/artwork/rekiyagami_girl_sky.jpg);">
        <div class="carousel-cell-caption">Static banner 1</div>

      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-4">
          <div class="content-box">
            <div class="content-box-header">
              <h1 class="content-box-title">Works</h1>
              <div class="content-box-more">
                <a href="#">
                  <svg id="i-arrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                      <path d="M22 6 L30 16 22 26 M30 16 L2 16" />
                  </svg>
                </a>
              </div>
            </div>

            <div class="content-box-body">
              HELO
            </div>
          </div>
        </div>
      </div>
        <h1>Hello, world!</h1>
        <hr>
        <?php
        for($x = 0; $x <= 100; $x++)
        {
          echo $x.'<br>';
        }
        ?>
    </div>
    <?php
    include ('path/footer.php');
    ?>
    <script src="../dist/mafura.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js" integrity="sha256-3Maq7M1TC8sOke8B4gRkhfGtETqGWq+xenQO7k2mHjI=" crossorigin="anonymous"></script>
    <script>
      var flkty = new Flickity( '#carousel', {
        // options
        pageDots: false,
        wrapAround: true,
        autoPlay: 3000,
        pauseAutoPlayOnHover: true,
        lazyLoad: 2,
      });
    </script>
  </body>
</html>
