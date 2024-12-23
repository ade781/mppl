<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(empty($_SESSION['username_cust']))
{
header("location:index.php?pesan=belum_login");
}
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../img/n.jpeg" type="image/png">
  <title>Drashoes</title>

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/media_query.css">

  <!--
    - google font link
  -->
  <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
</head>

<body>




  <!--
    - main container
  -->
  <div class="container-fluid">

    <!--
      - #HEADER SECTION
    -->

    <header class="">
      <div class="navbar">

        <!--
          - menu button for small screen
        -->
        <button class="navbar-menu-btn">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>


        <a href="#" class="navbar-brand">
          <img src="../img/logodrashoes.png"  style="width: 250px;" alt="">
        </a>

        <!--
          - navbar navigation
        -->

        <nav class="">
          <ul class="navbar-nav">

            <li> <a href="#" class="navbar-link">Home</a> </li>
            <li> <a href="order.php" class="navbar-link">Order List</a> </li>
            <li> <a href="#" class="navbar-link"></a> </li>

          </ul>
        </nav>

        <!--
          - search and sign-in
        -->

        <div class="navbar-actions">

          <form action="#" class="navbar-form">

            <button class="navbar-form-close">
              <ion-icon name="close-circle-outline"></ion-icon>
            </button>
          </form>


          <!--
            - search button for small screen
          -->

        

          <a href="logout.php" class="navbar-signin" onClick="return confirm('Wanna Logout soon?')">
            <span><p> Hello, <?php echo $_SESSION['username_cust'];?>!</p></span>
            <ion-icon name="log-in-outline"></ion-icon>
          </a>

        </div>

      </div>
    </header>





    <!--
      - MAIN SECTION
    -->
    <main>

      <!--
        - #BANNER SECTION
      -->
      <section class="banner">
        <div class="banner-card">

          <img src="../img/hard.jpg" class="banner-img" alt="">

          <div class="card-content">
            <div class="card-info">

              <div class="harga">
                <ion-icon name="pricetag-outline"></ion-icon>
                <span>IDR 45000</span>
              </div>

              <div class="duration">
                <ion-icon name="time"></ion-icon>
                <span>3-4 Days</span>
              </div>

            </div>

            <h2 class="card-title">Most Ordered - Hard Clean</h2>
          </div>

        </div>
      </section>





      <!--
        - #MOVIES SECTION
      -->
      <section class="movies">

        <!--
          - filter bar
        -->
        <div class="filter-bar">

          <div class="filter-dropdowns">

            
          </div>

          <div class="filter-radios">

            <input type="radio" name="grade" id="featured" checked>
            <label for="featured">Featured</label>

            <input type="radio" name="grade" id="popular">
            <label for="popular">Popular</label>

            <input type="radio" name="grade" id="newest">
            <label for="newest">Newest</label>

            <div class="checked-radio-bg"></div>

          </div>

        </div>


        <!--
          - movies grid
        -->
        <form action="order.php" method="post">
        <div class="movies-grid">
          <?php
          include '../koneksi.php';
          $query=mysqli_query($konek,"select * from pricelist");
          while($data=mysqli_fetch_array($query))
          { ?>
        
          <div class="movie-card" onclick="location.href='order.php?type=$data'">
            <div class="card-head">
              <img src="<?php echo $data['linkfoto'];?>" alt="" class="card-img">
              <div class="card-overlay">
                <div class="bookmark">
                <input type="hidden" name="id_pricelist" value="<?php echo $data['id_pricelist']; ?>">
                <input type="hidden" name="nama_pricelist" value="<?php echo $data['nama_pricelist']; ?>">
                <input type="hidden" name="harga" value="<?php echo $data['harga']; ?>">
                <button type="submit" class="btn btn-warning" name="submit">Order Now</button>
                
                </div>
              </div>
            </div>
            <div class="card-body">
              <h3 class="card-title"><?php echo $data['nama_pricelist'];?></h3>
              <div class="card-info">
                <span class="harga"><p>IDR <?php echo $data['harga'];?></p></span>
                
  
              </div>
            </div>
          </div>
          <?php }?>
          </form>

      </section>

    <!--
      - FOOTER SECTION
    -->
    <footer>

      <div class="footer-content">

        <div class="footer-brand">
          <img src="../img/logodrashoes.png"  style="width: 220px;" alt="">
          <br>
          <p class="slogan">Now, Its time to make them
            Nice and Clean.</p>


          <div class="social-link">
            <a href="https://wa.me/6285893291055/">
              <ion-icon name="logo-whatsapp"></ion-icon>
            </a>
            <a href="https://www.instagram.com/drashoesid/?utm_source=ig_web_button_share_sheet">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="https://www.tiktok.com/@darealcindo?is_from_webapp=1&sender_device=pc">
              <ion-icon name="logo-tiktok"></ion-icon>
            </a>
            <a href="https://youtube.com/@livestreamsmansago8159?si=5-ajbf4MBhG45N7r">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>

          </div>
        </div>


        <div class="footer-links">
          <ul>

            <h4 class="link-heading">Drashoes</h4>

            <li class="link-item"><a href="#">About us</a></li>
            <li class="link-item"><a href="#">Plans</a></li>
            <li class="link-item"><a href="https://wa.me/6285893291055/">Contacts</a></li>
            <br>

          </ul>

          <ul>

            <h4 class="link-heading">Browse</h4>

            <li class="link-item"><a href="#">Deep Clean</a></li>
            <li class="link-item"><a href="#">Fast Clean</a></li>
            <li class="link-item"><a href="#">Hard Clean</a></li>
            <br>
          </ul>

          <ul>

            <li class="link-item"><a href="#">Premium Clean</a></li>
            <li class="link-item"><a href="#">Unyellowing</a></li>
            <li class="link-item"><a href="#">Reglue</a></li>
            <br>

          </ul>

          <ul>

            <h4 class="link-heading">More</h4>

            <li class="link-item"><a href="#">Jobdesk</a></li>
            <li class="link-item"><a href="#">Plans</a></li>
            <li class="link-item"><a href="logout.php">Logout</a></li>
            <br>

          </ul>
        </div>

      </div>

      <div class="footer-copyright">

       

      </div>

    </footer>

  </div>





  <!--
    - custom js link
  -->
  <script src="./assets/js/main.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>