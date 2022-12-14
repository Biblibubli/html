

<?php
    include_once 'header.php'
?>


<link rel="stylesheet" href="css/home.css" media="screen">

<?php
    if (isset($_SESSION["userusername"])) {
        echo "<p>Welcome back, " . $_SESSION["usersnickname"] . "</p>";

    }

?>



<section class="u-clearfix u-palette-5-dark-3 u-section-1" id="carousel_cdbd">
  <img class="u-expanded-width u-image u-image-1" src="images/header.jpg" data-image-width="2998" data-image-height="1280">

  <div class="u-clearfix u-gutter-26 u-layout-wrap u-layout-wrap-1">
    <div class="u-layout">
      <div class="u-layout-row">
        <!-- Block 1 -->
        <div class="u-size-20">
          <div class="u-layout-col">
            <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-60 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1"></div>
            </div>
          </div>
        </div>
        <!-- Block 2 -->
        <div class="u-size-13">
          <div class="u-layout-col">
            <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-60 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1"></div>
            </div>
          </div>
        </div>
        <!-- Block 3 -->
        <div class="u-size-27">
          <div class="u-layout-col">
            <div class="u-align-center u-container-style u-layout-cell u-size-60 u-white u-layout-cell-3">
              <div class="u-container-layout u-container-layout-3">
                <span class="u-file-icon u-grey-15 u-icon u-icon-circle u-icon-1"><img src="images/icon_volleyball.png" alt=""></span>
                <h5 class="u-custom-font u-font-montserrat u-text u-text-1">CCBVA一周年排球黄金赛</h5>
                <p class="u-text u-text-grey-75 u-text-2">
                  
                  CCBVA在2021年9月26日开始了第一次活动，让我们用比赛的形式一起庆祝CCBVA的一周岁生日吧！<br>
                  比赛时间：2022年9月24日， 周六，上午9:00<br>
                  比赛地点：PDR (Playa Del Rey Beach)
                </p>
                <a href="games.php" class="u-active-none u-align-center u-border-1 u-border-active-grey-60 u-border-black u-border-hover-grey-60 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">去报名</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="u-clearfix u-layout-wrap u-layout-wrap-2">
    <div class="u-layout">
      <div class="u-layout-row">
        <div class="u-container-style u-layout-cell u-left-cell u-size-25 u-layout-cell-4">
          <div class="u-container-layout u-container-layout-4">
            <h1 class="u-text u-text-3">About CCBVA</h1>
          </div>
        </div>
        <div class="u-container-style u-layout-cell u-right-cell u-size-35 u-layout-cell-5">
          <div class="u-container-layout u-valign-top u-container-layout-5">
            <p class="u-text u-text-4">
              CCBVA(California Chinese Beach Volleyball Association)是基于洛杉矶地区的华人沙滩排球联盟。每周固定组织练球，不定期举行比赛。欢迎各个水平的朋友加入我们，一起享受加州的阳光，沙滩和排球比赛！
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
    include_once 'footer.php'
?>
