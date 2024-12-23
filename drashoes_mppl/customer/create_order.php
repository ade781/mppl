<?php
session_start();
if (!isset($_SESSION['id_cust']) || empty($_SESSION['id_cust'])) {
  die('Session ID Customer belum diatur. Silakan login terlebih dahulu.');
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Menu Drashoes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    * {
      font-family: poppins;
    }

    .home {
      display: flex;
      gap: 2vh;
      margin-top: 10vh;
      margin-bottom: 10vh;
    }
  </style>
</head>

<body>

  <?php include 'navbar.php'; ?>

  <div class="home">
    <div class="container">
      <div class="header mt-5">
        <h1>Add Order</h1>
      </div>
      <hr>
      </hr>
      <form method="POST" action="cek_create_order.php">
        <?php
        include '../koneksi.php';

        // Query data untuk dropdown
        $admins = $konek->query("SELECT id_admin FROM admin");
        $pricelist = $konek->query("SELECT id_pricelist, nama_pricelist FROM pricelist");

        // Handle error jika query gagal
        if (!$admins || !$pricelist) {
          die('Query gagal: ' . $konek->error);
        }
        ?>
        <div class="gebre mt-4">
          <div class="mb-3">
            <label class="form-label">ID Admin</label>
            <select name="id_admin" class="form-control">
              <option value="" disabled selected>Pilih ID Admin</option>
              <?php while ($row = $admins->fetch_assoc()) { ?>
                <option value="<?= $row['id_admin']; ?>"><?= $row['id_admin']; ?></option>
              <?php } ?>
            </select>
          </div>
        </div>

        <div class="genre mt-4">
          <div class="mb-3">
            <label class="form-label">ID Customer</label>
            <input type="text" name="id_cust" class="form-control"
              value="<?= htmlspecialchars($_SESSION['id_cust'], ENT_QUOTES, 'UTF-8'); ?>" readonly>
          </div>
        </div>

        <div class="genre mt-4">
          <div class="mb-3">
            <label class="form-label">ID Layanan</label>
            <select name="id_pricelist" class="form-control">
              <option value="" disabled selected>Pilih Layanan</option>
              <?php while ($row = $pricelist->fetch_assoc()) { ?>
                <option value="<?= $row['id_pricelist']; ?>"><?= $row['nama_pricelist']; ?></option>
              <?php } ?>
            </select>
          </div>
        </div>

        <div class="button mt-4">
          <button type="submit" class="btn btn-primary" name="submit" value="kirim">Send</button>
          <a href="order.php" type="button" class="btn btn-danger">Back</a>
        </div>
      </form>

    </div>
  </div>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>