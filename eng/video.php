<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages videoList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_video.jpg" alt=""></div>
        <div class="container">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <div class="title">Video</div>
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
              <span itemprop="name">Video</span>
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
                <h1 class="title">Selica HM 65T, mold making, build-in high speed spindle, double column machining center.</h1>
                <div class="video">
                  <div class="videoContainer"><iframe width="560" height="315" src="https://www.youtube.com/embed/1q_o5-vq0N4?si=8Teoo6Rsz8wYi-Qn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
                </div>
              </div>
            </div>
          </div>

          <div class="listBox">

            <div class="swiperArrow swiper-button-prev"></div>
            <div class="swiper">
              <div class="swiper-wrapper">
                <? for ($i = 0; $i < 6; $i++) { ?>
                  <div class="swiper-slide">
                    <button class="item" data-src='<iframe width="560" height="315" src="https://www.youtube.com/embed/x3f3H3JYYss?si=8yy9V6RQ0MO7pSTg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin allowfullscreen></iframe>'" data-alt=" Selica HM 65T, mold making, build-in high speed spindle, double column machining center.">
                      <div class="picBox">
                        <div class="pic"><img src="../images/in/v.jpg" alt=""></div>
                      </div>
                      <h2 class="title">Diamond 32 Series</h2>
                    </button>
                  </div>
                  <div class="swiper-slide">
                    <button class="item" data-src='<iframe width="560" height="315" src="https://www.youtube.com/embed/eJK9Y5I-9os?si=HseLgT7NjaLLHfAm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>' data-alt="">
                      <div class="picBox">
                        <div class="pic"><img src="../images/in/v.jpg" alt=""></div>
                      </div>
                      <h2 class="title">Diamond 32 Series</h2>
                    </button>
                  </div>
                <? } ?>

              </div>
            </div>

            <div class="swiperArrow swiper-button-next"></div>
          </div>

        </section>

      </div>
    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>

  <script>
    const brochuresSwiper = new Swiper('.videoList .swiper', {
      loop: true,
      spaceBetween: 16,
      slidesPerView: 2,
      navigation: {
        nextEl: '.videoList .swiper-button-next',
        prevEl: '.videoList .swiper-button-prev',
      },
      breakpoints: {
        500: {
          slidesPerView: 2,
        },
        700: {
          slidesPerView: 3,
        },
        1000: {
          slidesPerView: 4,
        },
        1440: {
          slidesPerView: 5,
        },
      }
    });
    const videoTitle = document.querySelector('.videoList .topBox .title')
    const videoBox = document.querySelector('.videoList .videoContainer iframe')
    const videoItem = document.querySelectorAll('.videoList .swiper .item')
    videoItem.forEach((item, index) => {
      item.addEventListener('click', () => {
        const thisSrc = item.dataset.src;
        const parts = thisSrc.split('src="');
        const src = parts[1].split('"')[0];
        videoBox.setAttribute('src', `${src}`);
        const thisAlt = item.dataset.alt;
        videoTitle.textContent = thisAlt;
      })
    })
  </script>
</body>

</html>