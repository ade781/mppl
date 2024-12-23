<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Order Drashoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        * {
            font-family: poppins;
        }
        .main {
          height: 40vh;
          display: flex;
          gap: 2vh;
        }
        .home {
          margin-top: 10vh;
          margin-bottom: 10vh;
        }
    </style>
  </head>

  <body>
    <?php
    include '../koneksi.php';
    $id_orders = $_GET['id_orders'];
    $query = mysqli_query($konek, "SELECT * FROM orders WHERE id_orders = $id_orders");
    $data = mysqli_fetch_array($query);

    // Query untuk dropdown
    $admins = $konek->query("SELECT id_admin FROM admin");
    $customers = $konek->query("SELECT id_cust FROM customer");
    $pricelist = $konek->query("SELECT id_pricelist, nama_pricelist FROM pricelist");
    ?>
    <div class="container">
      <?php include 'navbar.php'; ?>
      <div class="home">
        <div class="header mt-5">
          <h1>Edit Selected Order</h1>
        </div>
        <hr>
        
        <form action="cek_edit_order.php" method="POST">
          <!-- Hidden field for order ID -->
          <input type="hidden" name="id_orders" value="<?php echo $data['id_orders']; ?>">
          
          <div class="username mt-4">
            <div class="mb-3">
              <label class="form-label">ID Admin</label>
              <select name="id_admin" class="form-control">
                <option value="" disabled>Pilih ID Admin</option>
                <?php while ($row = $admins->fetch_assoc()) { ?>
                  <option value="<?= $row['id_admin']; ?>" <?= $data['id_admin'] == $row['id_admin'] ? 'selected' : ''; ?>>
                    <?= $row['id_admin']; ?>
                  </option>
                <?php } ?>
              </select>
            </div>
          </div>
          
          <div class="genre mt-4">
            <div class="mb-3">
              <label class="form-label">ID Customer</label>
              <select name="id_cust" class="form-control">
                <option value="" disabled>Pilih ID Customer</option>
                <?php while ($row = $customers->fetch_assoc()) { ?>
                  <option value="<?= $row['id_cust']; ?>" <?= $data['id_cust'] == $row['id_cust'] ? 'selected' : ''; ?>>
                    <?= $row['id_cust']; ?>
                  </option>
                <?php } ?>
              </select>
            </div>
          </div>

          <div class="genre mt-4">
            <div class="mb-3">
              <label class="form-label">ID Layanan</label>
              <select name="id_pricelist" class="form-control">
                <option value="" disabled>Pilih ID Layanan</option>
                <?php while ($row = $pricelist->fetch_assoc()) { ?>
                  <option value="<?= $row['id_pricelist']; ?>" <?= $data['id_pricelist'] == $row['id_pricelist'] ? 'selected' : ''; ?>>
                    <?= $row['nama_pricelist']; ?>
                  </option>
                <?php } ?>
              </select>
            </div>
          </div>
          
          <div class="button mt-4">
            <button type="submit" class="btn btn-primary" name="submit">Send</button>
            <a href="data_orders.php" type="button" class="btn btn-danger">Back</a>
          </div>
        </form>
      </div>
    </div>
    <?php include 'footer.php'; ?>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
