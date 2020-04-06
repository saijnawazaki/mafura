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

    <div class="container-fluid">
      <div class="headerbox-t">
        <div>
          <ol class="breadcrumb mt-0 mb-0 pl-0 pt-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
          </ol>
        </div>

      </div>
      <div class="headerbox-b">
        <div class="content-box-header">
          <h1 class="content-box-title">Title Page</h1>
          <div class="content-box-more">
            <a href="#">
              <svg id="i-ellipsis-horizontal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                  <circle cx="7" cy="16" r="2" />
                  <circle cx="16" cy="16" r="2" />
                  <circle cx="25" cy="16" r="2" />
              </svg>
            </a>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12 col-lg-12">


        </div>
        <div class="col-sm-12 col-lg-12">
          <div class="content-box-header-secondary">
            Created by saijnawazaki.
          </div>
        </div>
        <div class="col-12 col-lg-3 mt-3">
          <?php
          for($x = 0; $x <= 100; $x++)
          {
            echo $x.'<br>';
          }
          ?>
        </div>
        <div class="col-12 col-lg-9">
          LIST
        </div>
      </div>

    </div>
    <?php
    include ('path/footer.php');
    ?>
    <script src="../dist/mafura.js"></script>

  </body>
</html>
