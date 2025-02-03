<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/solution.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages solutionDetail">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_solution.jpg" alt=""></div>
        <div class="container">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <div class="title">Solutions</div>
          </div>
        </div>
      </div>

      <div class="breadcrumbBox">
        <div class="container">
          <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <a href="index.php" itemprop="item">
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Solutions</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Automotive</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">

        <section>
          <div class="container">

            <div class="contentBox">

              <div class="topBox">
                <h1 class="title">Automotive</h1>
                <div class="infoBox">
                  <div class="col description">Pursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AcExtreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme EPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme </div>
                  <div class="col pic acBoxDown"><img src="../images/in/s.jpg" alt=""></div>
                </div>
              </div>
            </div>
          </div>

          <div class="productBox">
            <div class="subTitle">Recommended Machine</div>

            <div class="swiperArrow swiper-button-prev"></div>
            <div class="swiper">
              <div class="swiper-wrapper">
                <? for ($i = 0; $i < 6; $i++) { ?>
                  <div class="item swiper-slide">
                    <a href="products_detail.php">
                      <div class="picBox">
                        <div class="pic"><img src="../images/index/p.png" alt=""></div>
                      </div>
                      <h2 class="title">Diamond 32 Series</h2>
                    </a>
                  </div>
                <? } ?>

              </div>
            </div>

            <div class="swiperArrow swiper-button-next"></div>
          </div>
          <div class="pageBtnBox wow fadeInUp" data-wow-delay="0.2s">
            <a href="solution.php" class="back">BACK TO LIST</a>
          </div>

        </section>

      </div>
    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>

  <script>
    const brochuresSwiper = new Swiper('.solutionDetail .swiper', {
      loop: true,
      spaceBetween: 25,
      slidesPerView: 1,
      navigation: {
        nextEl: '.solutionDetail .swiper-button-next',
        prevEl: '.solutionDetail .swiper-button-prev',
      },
      breakpoints: {
        600: {
          slidesPerView: 2,
        },
        1000: {
          slidesPerView: 3,
        },
      }
    });
  </script>
</body>

</html>