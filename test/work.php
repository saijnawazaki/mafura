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
      <div class="headerbox-b position-sticky-t">
        <div class="row">
          <div id="work_cover_container" class="col-1 col-lg-2 text-center">
            <div id="work_cover" class="thumbnail">
              <img src="https://repo.manastudio.id/public/work/11_diary_online_ayas.jpg">
            </div>
          </div>
          <div id="work_cover_container_header" class="col-8 col-lg-9">
            <div class="content-box-header">
              <h1 class="content-box-title">Diary Online: NekoNeko's</h1>
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
            <div id="work_cover_description">
              <div id="work_cover_description_text" class="textboxmore-body">
                <p class="mt-0">
                  原作小説の累計発行部数は、2017年4月25日の第1巻増刷発行分で国内1300万部を[4][注釈 2]、2018年8月に全世界2200万部を突破した[6]。
                  また、第1巻は電撃文庫で史上初の国内単巻発行100万部を達成している[4]。
                  2018年11月時点で、世界13ヶ国以上において翻訳版が展開されている[7]。また、アニメの視聴回数は累計7億回を突破、映像ソフトの売り上げは累計120万本を突破している[7]。さらに、コンシューマーゲームの売り上げは全世界累計430万本を突破、モバイルゲームは全世界で2500万ダウンロードを突破している[7]。
                  また2017年2月公開の劇場アニメの興行収入は、国内で25億円、全世界で43億円を超えた[8]。
                  『第12回オリコン上半期“本”ランキング 2019』ジャンル別「文庫」では、第21巻がライトノベル作品で初めて同部門の1位を獲得した[9]。さらに「ライトノベル（BOOK・文庫）」部門では、2015年から5年連続、通算6度目の同部門1位を記録した[9]。
                </p>
            </div>

            </div>
          </div>

        </div>

      </div>


      <div class="row">
        <div class="col-lg-1">
          1
        </div>
        <div class="col-lg-1">
          2
        </div>
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
    <script>
      window.addEventListener('load', function(){
        var didScroll = true;
        var currentPosition = window.pageYOffset;

        workCoverResize(currentPosition, didScroll);

        window.onscroll = function() {
          var currentPosition = window.pageYOffset;
          didScroll = true;
          workCoverResize(currentPosition, didScroll);

        }

        function workCoverResize(currentPosition, didScroll) {
          if(didScroll) {
            if (currentPosition < 1) {
              document.getElementById('work_cover_container').classList.add('col-lg-2');
              document.getElementById('work_cover_container').classList.remove('col-lg-1');
              document.getElementById('work_cover_container_header').classList.add('col-lg-9');
              document.getElementById('work_cover_container_header').classList.remove('col-lg-10');

              document.getElementById('work_cover_container').classList.add('col-12');
              document.getElementById('work_cover_container').classList.remove('col-1');
              document.getElementById('work_cover_container_header').classList.add('col-12');
              document.getElementById('work_cover_container_header').classList.remove('col-8');

              document.getElementById('work_cover').classList.add('thumbnail');
              document.getElementById('work_cover').classList.remove('thumbnail-s');
              document.getElementById('work_cover_description').style.display = 'block';

            } else {
              document.getElementById('work_cover_container').classList.add('col-lg-1');
              document.getElementById('work_cover_container').classList.remove('col-lg-2');
              document.getElementById('work_cover_container_header').classList.add('col-lg-10');
              document.getElementById('work_cover_container_header').classList.remove('col-lg-9');

              document.getElementById('work_cover_container').classList.add('col-1');
              document.getElementById('work_cover_container').classList.remove('col-12');
              document.getElementById('work_cover_container_header').classList.add('col-8');
              document.getElementById('work_cover_container_header').classList.remove('col-12');

              document.getElementById('work_cover').classList.add('thumbnail-s');
              document.getElementById('work_cover').classList.remove('thumbnail');
              document.getElementById('work_cover_description').style.display = 'none';

            }
            didScroll = false;
          }
        }
      });


    </script>
  </body>
</html>
