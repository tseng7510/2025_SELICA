<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages aboutPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_about.jpg" alt=""></div>
        <div class="container">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">Company</h1>
          </div>
        </div>
      </div>

      <div class="breadcrumbBox">
        <div class="container">
          <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <a href="index.php" title="index" itemprop="item">
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Company</span>
              <meta itemprop="position" content="2">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">

        <section>
          <div class="block block1">
            <div class="container">
              <div class="content">
                <div class="infoBox wow fadeInUp" data-wow-delay="0.2s">
                  <h2 class="title">Company Profile</h2>
                  <div class="subTitle">SELICA</div>
                  <div class="editor">Selica International Co., Ltd. was established in 2010 and is a leading enterprise specializing in the manufacturing of high-precision machinery. The company boasts advanced production equipment and a professional technical team, dedicated to providing a wide range of products including CNC lathes, CNC Swiss-type lathes, vertical machining centers, high-speed milling machines, and CNC hybrid sphere lathes for ball pins, tie rods, ball joints, and more.<br /><br />
                    Selica International, with its exceptional R&D capabilities, continuously introduces innovative products to meet the needs of various industries. Upholding the business philosophy of “Quality First, Customer Foremost,” the company has earned widespread market recognition through strict quality control and comprehensive after-sales service.<br /><br />
                    In the future, Selica International will continue to drive technological advancements, aiming to become a benchmark enterprise in the global machinery manufacturing sector.</div>
                </div>
                <div class="pic wow fadeInLeft acBoxDown" data-wow-delay="0s"><img src="../images/in/a1.png" alt=""></div>
              </div>
            </div>
          </div>

          <div class="block block2">
            <div class="container">
              <div class="content">
                <div class="pic wow fadeInUp" data-wow-delay="0s"><img src="../images/in/a2.jpg" alt=""></div>
              </div>
            </div>
          </div>

          <div class="block block3">
            <div class="container">
              <h2 class="title">History</h2>
              <div class="name"><span>SELICA</span> INTERNATIONAL CO., LTD. Aerospace</div>
            </div>
            <div class="content">
              <div class="picBox">
                <div class="pic"><img src="../images/in/abg.jpg" alt=""></div>
                <div class="leftPic"><img src="../images/in/a3.jpg" alt=""></div>
              </div>
              <div class="infoBox wow fadeInUp" data-wow-delay="0.4s">
                <div class="editor">
                  <ul>
                    <li>
                      <time>2010</time>
                      <p>Company established</p>
                    </li>
                    <li>
                      <time>2011</time>
                      <p>Become agents and representing Taiwan made CNC machine tool</p>
                    </li>
                    <li>
                      <time>2013</time>
                      <p>Participate EMO 2013</p>
                    </li>
                    <li>
                      <time>2015</time>
                      <p>Participate Konmak show in Turkey<br />Participate Metalex in Thailand</p>
                    </li>
                    <li>
                      <time>2016</time>
                      <p>Develop and produce SC-32</p>
                    </li>
                    <li>
                      <time>2017</time>
                      <p>Participate EMO 2017<br />Participate TIMTOS 2017</p>
                    </li>
                    <li>
                      <time>2018</time>
                      <p>Develop and produce SBL-100T<br />Participate JIMTOF, SIMTOS and TMTS show</p>
                    </li>
                    <li>
                      <time>2019</time>
                      <p>Participate AMPA in Frankfurt<br />Participate MECSPE in Italy<br />Participate MSV NITRA in Slovakia<br />Participate TIMTOS 2019</p>
                    </li>
                    <li>
                      <time>2020</time>
                      <p>Develop and produce SD-32Y</p>
                    </li>
                    <li>
                      <time>2022</time>
                      <p>Participate TIMTOS X TMTS fair</p>
                    </li>
                    <li>
                      <time>2023</time>
                      <p>Participate EMO2023 and TIMTOS 2023</p>
                    </li>
                  </ul>
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
    $('.block01 .listBox').magnificPopup({
      delegate: 'a',
      type: 'image'
    });
  </script>
</body>

</html>