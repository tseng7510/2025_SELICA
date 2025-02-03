<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages brochuresList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_brochures.jpg" alt=""></div>
        <div class="container">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">Brochures</h1>
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
              <span itemprop="name">Media</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Brochures</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">

        <section>
          <div class="container">

            <div class="contentBox">

              <div class="infoBox">
                <div class="title">All SELICA catalogs</div>
                <div class="description">Selica is able to offer high precision and quality parts of machines. Such as CNC Lathe , CNC swiss type lathe , Vertical machining center , High speed milling machine , CNC hybrid sphere lathe for ball pin , tie rod and ball joint ,etc….</div>
              </div>

              <div class="listBox">
                <div class="swiperArrow swiper-button-prev"></div>
                <div class="swiperArrow swiper-button-next"></div>
                <div class="swiper">
                  <div class="swiper-wrapper">
                    <? for ($i = 0; $i < 6; $i++) { ?>
                      <div class="item swiper-slide">
                        <a href="brochures_detail.php">
                          <div class="pic"><img src="../images/in/b.jpg" alt=""></div>
                          <h2 class="title">Guangzhou Machinery Lathe Catalog 2023</h2>
                        </a>
                      </div>
                    <? } ?>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>

      </div>
    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>

  <script>
    const brochuresSwiper = new Swiper('.brochuresList .listBox .swiper', {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 1,
      navigation: {
        nextEl: '.brochuresList .swiper-button-next',
        prevEl: '.brochuresList .swiper-button-prev',
      },
      breakpoints: {
        550: {
          slidesPerView: 2,
        },
        767: {
          slidesPerView: 3,
        },
        1100: {
          slidesPerView: 4,
        },
      }
    });
  </script>
</body>

</html>