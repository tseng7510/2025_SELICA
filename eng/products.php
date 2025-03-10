<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_products.jpg" alt=""></div>
        <div class="container">
          <div class="pageTitleBox">
            <h1 class="title wow fadeInUp" data-wow-delay="0s">Products</h1>
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
              <span itemprop="name">Products</span>
              <meta itemprop="position" content="2">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">

        <section>
          <div class="contentBox">

            <div class="container">
              <div class="products wow fadeInUp" data-wow-delay="0.2s">
                <div class="listBox">

                  <div class="item">
                    <a href="products_2.php">
                      <div class="picBox">
                        <div class="pic"><img src="../images/in/p1.jpg" alt=""></div>
                      </div>
                      <h2 class="title">CNC Lathe</h2>
                    </a>
                  </div>
                  <div class="item">
                    <a href="products_2.php">
                      <div class="picBox">
                        <div class="pic"><img src="../images/in/p2.jpg" alt=""></div>
                      </div>
                      <h2 class="title">Vertical Machine Center</h2>
                    </a>
                  </div>
                  <div class="item">
                    <a href="products_2.php">
                      <div class="picBox">
                        <div class="pic"><img src="../images/in/p3.jpg" alt=""></div>
                      </div>
                      <h2 class="title">High Speed Milling Machine</h2>
                    </a>
                  </div>
                  <div class="item">
                    <a href="products_2.php">
                      <div class="picBox">
                        <div class="pic"><img src="../images/in/p4.jpg" alt=""></div>
                      </div>
                      <h2 class="title">Hybrid Sphere CNC Lathe</h2>
                    </a>
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
</body>

</html>