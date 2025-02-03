<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsList2">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_products.jpg" alt=""></div>
        <div class="container">
          <div class="pageTitleBox">
            <h1 class="title wow fadeInUp" data-wow-delay="0s">Products Filter</h1>
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
              <span itemprop="name">Products Filter</span>
              <meta itemprop="position" content="2">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">

        <section>
          <div class="contentBox">

            <div class="container">

              <div class="topResults">
                <div class="results">Search Results : <span>OOOO</span></div>
                <div class="item">6 items</div>
              </div>

              <div class="listBox">
                <? for ($i = 0; $i < 12; $i++) { ?>
                  <div class="item wow fadeInUp" data-wow-delay="0s">
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
          </div>
        </section>
      </div>

    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>

  <script>
    $('.mainMenu > ul > li').eq(0).addClass('active');
  </script>
</body>

</html>