<?php

include './conn.php';

$query = 'select * FROM ameri_products';
if (!$query) {
  echo "Products is not available";
}

$result = mysqli_query($conn, $query);
$product = '';

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Ameri Foam</title>
      <link rel="stylesheet" href="../css/style.css" />
      <link rel="stylesheet" href="../css/responsive.css" />
      <link rel="stylesheet" href="../css/product.css" />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    </head>

    <body>

      <div class="wrapper">
        <header class="header">
          <div class="logo">
            <img src="../img/AmeriPackaging--Logo-C4.png" alt="" />
            <div class="header_txt">
              <span class="header_hd">Ameri Packaging</span>
              <span>
                Your Premium Provider for Take Out and Delivery
                <span class="header_txt-c">Containers</span>
              </span>
            </div>
          </div>
          <nav class="nav">
            <div class="nav_icon-x">
              <i class="fas fa-times"></i>
            </div>
            <ul>
              <li><a href="../index.html">Home</a></li>
              <li><a href="#">Foam Products</a></li>
              <li><a href="../pages/about.html">About Us</a></li>
              <li><a href="../pages/contact.html">Contact US</a></li>
              <li><a href="../php/admin.php">Add Product</a></li>
            </ul>
          </nav>
          <div class="nav_icon">
            <i class="fas fa-bars"></i>
          </div>
        </header>
        <section class="banner" style="background-image: url('../img/img_2.jpg');">
          <div class="banner_txt">
            <h1>Foam Products</h1>
            <h5>
              Offers Foam and Plastic Deli
              <span class="banner_txt-c">Containers</span> with Great Quality and
              a Variety of Sizes
            </h5>
          </div>
        </section>

        <section class="products_page">
          <!--  -->
          <?php
          if ($result->num_rows == 0) {
            $product .= "No products";
          }elseif($result->num_rows > 0){
            while ($data = mysqli_fetch_assoc($result)) {
              // $img = $data['img'];
              $product .= '
                  <div class="products_page__product">
                  <div class="products_page__product-img">
                    <img src="../product_img/'.$data['img'].'" alt="" />
                    <span class="product_page_product-title"
                      >Stock number:' . $data['stock_no'] . '</span
                    >
                  </div>
                  <div class="products_page__product-info">
                    <ul>
                      <li class="highlight">Product Specifications</li>
                      <li><span>Stock Number:</span>' . $data['stock_no'] . '</li>
                      <li>
                        <span>Product Description:</span>' . $data['prod_desc'] . '</li>
                      <li><span>Dimension:</span>' .  $data['dimension'] . '</li>
                      <li><span>Color:</span>' .  $data['color'] . '</li>
                      <li class="highlight">Package/Case Specifications</li>
                      <li><span>Quantity per Sleeve:</span>' .  $data['qps'] . '</li>
                      <li><span>Sleeves per case:</span>' . $data['spc'] . '</li>
                      <li><span>Items Per Case:</span>' . $data['ipc'] . '</li>
                      <li>
                        <span>Case Description:</span>' . $data['case_desc'] . '
                      </li>
                      <li><span>Case Cube:</span>' . $data['case_cube'] . 'ft</li>
                      <li><span>Case per pallet:</span>' . $data['cpp'] . 'Case/Pallet</li>
                      <li><span>Ti/Hi:</span>' . $data['height'] .'</li>
                      <li><span>Weight:</span>' . $data['weight'] .'lb</li>
                    </ul>
                    </div>
                  </div>';
                  ?>
                  <?php }}?>
                  <?php echo $product; ?>
        </section>
        <footer class="footer">
          <div class="footer_links">
            <div class="footer_links-about">
              <img src="../img/AmeriPackaging--Logo-C4.png" alt="" />
            </div>
            <div class="footer_links-link">
              <h3>Products</h3>
              <ul>
                <li><a href="#">Product-1</a></li>
                <li><a href="#">Product-2</a></li>
                <li><a href="#">Product-3</a></li>
              </ul>
            </div>
            <div class="footer_links-link">
              <h3>About us</h3>
              <ul>
                <li><a href="#">Link-1</a></li>
                <li><a href="#">Link-2</a></li>
                <li><a href="#">Link-3</a></li>
              </ul>
            </div>
            <div class="footer_links-link">
              <h3>Links</h3>
              <ul>
                <li><a href="#">Links-1</a></li>
                <li><a href="#">Links-2</a></li>
                <li><a href="#">Links-3</a></li>
              </ul>
            </div>
          </div>
          <div class="footer_nav">
            <div class="footer_nav-title">
              <span>Ameri Packaging</span>
            </div>
            <div class="footer_nav-slinks">
              <ul>
                <li>
                  <a href="#"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter-square"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fas fa-envelope"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </footer>
      </div>
      <script src="../js/main.js"></script>
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
    </body>

    </html>

<!--  -->