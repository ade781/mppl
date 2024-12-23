<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Drashoes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    * {
      font-family: poppins;
    }

    .header h1 {
      color: black;
      font-weight: 600;
    }

    .header h2 {
      color: red;
      font-weight: 750;
    }

    .main {
      display: flex;
      gap: 2vh;
    }

    .home {
      margin-top: 10vh;
      margin-bottom: 20vh;
      height: 50vh;
    }

    body {
      background-color: aqua;
    }
  </style>
  <?php $i = 0;
  $j = 0;
  $k = 0;
  $l = 0; ?>
</head>

<body>
  <?php include 'navbar.php' ?>
  <div class="home">

    <div class="container mt-5 ">
      <div class="header mt-5">
        <h1>Welcome, </h1>
        <h2><?php echo $_SESSION['username_admin']; ?>!</h2>
        <h1>Great to see you!</h1>
        <hr>
        </hr>
      </div>
      <p>About DRASHOES.ID :</p>
      <div class="main">
        <div class="kartu">
          <div class="card mt-2" style="width: 13rem; ">
            <div class="card-body">
              <h5 class="card-title">Total Menu : </h5>
              <?php
              include '../koneksi.php';
              $query = mysqli_query($konek, "select * from pricelist");
              while ($data = mysqli_fetch_array($query)) { ?>
                <?php $i++;
              }
              echo $i ?>
            </div>
          </div>
        </div>

        <div class="kartu2">
          <div class="card mt-2" style="width: 13rem;">
            <div class="card-body">
              <h5 class="card-title">Total Customer : </h5>
              <?php
              include '../koneksi.php';
              $query = mysqli_query($konek, "select * from customer");
              while ($data = mysqli_fetch_array($query)) { ?>
                <?php $j++;
              }
              echo $j ?>
            </div>
          </div>
        </div>
        <div class="kartu3">
          <div class="card mt-2" style="width: 13rem;">
            <div class="card-body">
              <h5 class="card-title">Total Order : </h5>
              <?php
              include '../koneksi.php';
              $query = mysqli_query($konek, "select * from orders");
              while ($data = mysqli_fetch_array($query)) { ?>
                <?php $k++;
              }
              echo $k ?>
            </div>
          </div>
        </div>
        <div class="kartu4">
          <div class="card mt-2" style="width: 13rem;">
            <div class="card-body">
              <h5 class="card-title">Total Mitra : </h5>
              <?php
              include '../koneksi.php';
              $query = mysqli_query($konek, "select * from admin");
              while ($data = mysqli_fetch_array($query)) { ?>
                <?php $l++;
              }
              echo $l ?>
            </div>
          </div>
        </div>
        <div class="kartu5">
          <div class="card mt-2" style="width: 13rem;">
            <div class="card-body">
              <h5 class="card-title">Total Pendapatan startup : </h5>
              <?php
              include '../koneksi.php';
              $query = mysqli_query($konek, "SELECT SUM(p.harga) AS total_pendapatan FROM orders o JOIN pricelist p ON o.id_pricelist = p.id_pricelist");
              $data = mysqli_fetch_assoc($query);
              $total_pendapatan = $data['total_pendapatan'] ?? 0;
              $ten_percent = $total_pendapatan * 0.1;
              echo 'Rp ' . number_format($ten_percent, 0, ',', '.');
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php' ?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>