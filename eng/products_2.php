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
            <h1 class="title wow fadeInUp" data-wow-delay="0s">CNC Lathe</h1>
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
              <a href="products.php" itemprop="item">
                <span itemprop="name">Products</span>
              </a>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">CNC Lathe</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">

        <section>
          <div class="contentBox">

            <div class="container">

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

            <div class="description">
              <div class="container">Selica CNC is your reliable distributor of high-quality CNC machinery, offering a diverse range of advanced solutions tailored to meet the needs of various industries. We provide cutting-edge CNC lathes, milling machines, and automated systems from leading manufacturers, ensuring top-notch performance, precision, and durability. Our commitment to quality and customer satisfaction drives us to offer only the best products that enhance production efficiency and deliver superior results. Whether you’re in aerospace, automotive, or general manufacturing, Selica CNC connects you with the perfect equipment to elevate your operations. Explore our product range and trust Selica CNC for all your machinery needs.
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