<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages contactPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_contact.jpg" alt=""></div>
        <div class="container">
          <div class="pageTitleBox">
            <h1 class="title wow fadeInUp" data-wow-delay="0s">Contact</h1>
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
              <span itemprop="name">Contact</span>
              <meta itemprop="position" content="2">
            </li>
          </ul>
        </div>
      </div>
      <div class="mainBox">

        <section>
          <div class="inquiry">
            <div class="container">
              <div class="listBox wow fadeInUp" data-wow-delay="0.2s">
                <div class="item">
                  <div class="titleF">Request a Quote</div>
                  <a href="products_detail.php">
                    <div class="picBox">
                      <div class="pic"><img src="../images/index/p.png" alt=""></div>
                    </div>
                    <div class="infoBox">
                      <div class="title">CNC Lathe SH-700/900</div>
                    </div>
                    <div class="del"></div>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="bottomBox">
            <div class="container">
              <div class="infoBox wow fadeInUp" data-wow-delay="0.2s">
                <div class="title">Contact Us</div>
                <div class="notice">We appreciate your visit of our website. If you have any inquiry needs about our products, technology, or services, please contact us via the channel below.</div>
              </div>
              <form class="formBox">
                <ul>
                  <li class="inputItem wow fadeInUp required">
                    <label for="type">Company</label>
                    <input type="text" class="inputControl" id="company">
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <label for="company">Name</label>
                    <input type="text" class="inputControl" id="name">
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <label for="email">E-Mail</label>
                    <input type="text" class="inputControl" id="email">
                  </li>
                  <li class="inputItem wow fadeInUp">
                    <label for="tel">Tel</label>
                    <input type="text" class="inputControl" id="tel">
                  </li>
                  <li class="inputItem full wow fadeInUp">
                    <label for="type">Address</label>
                    <input type="text" class="inputControl" id="address">
                  </li>
                  <li class="textareaItem full wow fadeInUp">
                    <label for="message">Message</label>
                    <textarea class="textareaControl" name="message" id="message" cols="30" rows="5"></textarea>
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <label for="password">Code</label>
                    <input type="password" class="inputControl" id="password">
                    <span class="checkImg"><img src="../images/check_img.jpg"></span>
                    <button class="reBtn"></button>
                  </li>
                </ul>
                <div class="pageBtnBox wow fadeInUp">
                  <button class="send" type="button" onclick="javascript:location.href='contact_ok.php'">Send Message</button>
                </div>
              </form>
            </div>
          </div>

          <div class="topContent">
            <div class="container wow fadeInLeft" data-wow-delay="0.2s">
              <div class="box">
                <div class="title">SELICA<br />Information</div>
                <div class="info">
                  <ul>
                    <li class="address"><span>ADD :</span>12F.-2, No. 6, Ln. 256, Sec. 2, Xitun Rd., Xitun Dist., Taichung City 407, Taiwan</li>
                    <li class="tel"><span>TEL :</span><a href="tel:+886427082112">+886-4-27082112</a></li>
                    <li class="fax"><span>FAX :</span>+886-4-27082113</li>
                    <li class="mail"><span>E-Mail :</span><a href="mailto:info@selica.com.tw">info@selica.com.tw</a></li>
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
</body>

</html>