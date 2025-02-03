<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/solution.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages solutionList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_solution.jpg" alt=""></div>
        <div class="container">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">Solutions</h1>
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
          </ul>
        </div>
      </div>

      <div class="mainBox">

        <section>
          <div class="container">

            <div class="contentBox">
              <div class="listBox">

                <? for ($i = 0; $i < 6; $i++) { ?>
                  <div class="item">
                    <a href="solution_detail.php">
                      <div class="picBox">
                        <div class="pic"><img src="../images/index/s1.jpg" alt=""></div>
                        <h3 class="title">Automotive</h3>
                      </div>
                      <div class="description">Selica is able to offer high precision and quality parts of machines. Such as CNC Lathe , CNC swiss type lathe , Vertical machining center….</div>
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
</body>

</html>