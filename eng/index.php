<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="mainBox">
        <div class="banner">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="pic">
                  <img src="../images/index/banner.jpg" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="videoContainer">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/eJK9Y5I-9os?si=2gDtRNbL9XkIMs_D?controls=0&autoplay=1&mute=1&" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

        <section class="productBox">
          <div class="container wow fadeInLeft" data-wow-delay="0s">
            <div class="swiper">
              <div class="swiper-wrapper">
                <? for ($i = 0; $i < 2; $i++) { ?>
                  <div class="swiper-slide">
                    <div class="item">
                      <div class="pic"><img src="../images/index/p.png" alt=""></div>
                      <div class="info">
                        <div class="tag">CNC Lathe</div>
                        <h2 class="title">SH-700/900</h2>
                        <p class="description">Application: swiss type lathe, swiss type lathes, cnc swiss lathe, swiss turning machines, medical implant.</p>
                      </div>
                    </div>
                  </div>
                <? } ?>
              </div>
              <div class="controlBox">
                <a class="indexMore" href="products_list.php">READ MORE</a>
                <div class="swiperUse">
                  <div class="swiperArrow swiper-button-prev"></div>
                  <div class="swiperArrow swiper-button-next"></div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="solutionBox">
          <div class="container">
            <h2 class="blockTitle wow fadeInLeft" data-wow-delay="0s">SOLUTION</h2>
            <div class="listBox wow fadeInLeft" data-wow-delay="0.2s">
              <? for ($i = 0; $i < 2; $i++) { ?>
                <div class="item">
                  <a href="#">
                    <div class="pic"><img src="../images/index/s1.jpg" alt=""></div>
                    <h3 class="title">Automotive</h3>
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <div class="pic"><img src="../images/index/s2.jpg" alt=""></div>
                    <h3 class="title">Aerospace</h3>
                  </a>
                </div>
              <? } ?>
            </div>

          </div>
        </section>

        <section class="newsBox">
          <div class="container">
            <h2 class="blockTitle">NEWS</h2>
            <div class="listBox">
              <? for ($i = 0; $i < 2; $i++) { ?>
                <div class="item wow fadeInRight" data-wow-delay="0.2s">
                  <a href="news_detail.php">
                    <div class="pic"><img src="../images/index/n.jpg" alt=""></div>
                    <div class="infoBox">
                      <div class="info">
                        <h3 class="title">We offer the complete range of service and know-how for specific projects or customers around</h3>
                        <time>2024-08-06</time>
                      </div>
                      <div class="description">SD-32 is one of our compact CNC lathe that designed especially for small and high precision parts, as well as provides powerful processing capacity, stable quality</div>
                      <i></i>
                    </div>
                  </a>
                </div>
              <? } ?>
            </div>
            <a href="news.php" class="indexMore">READ MORE</a>
          </div>
        </section>

      </div>
    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>

  <script>
    const bannerSwiper = new Swiper('.banner .swiper', {
      loop: true,
      pagination: {
        el: '.banner .swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 3000,
        stopOnLastSlide: false,
        disableOnInteraction: true,
      },
    });

    const productSwiper = new Swiper('.productBox .swiper', {
      loop: true,
      navigation: {
        nextEl: '.productBox .swiper-button-next',
        prevEl: '.productBox .swiper-button-prev',
      },
    });
  </script>
</body>

</html>