<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Drashoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        * {
            font-family: Poppins;
        }
        .home {
            margin-top: 10vh;
            margin-bottom: 30vh;
            height: 50vh;
        }
    </style>  
</head>
  <body>
  <?php $j=1;?>
  <?php include 'navbar.php'; ?>

  <div class="home">
    <div class="container mt-5">
        <div class="header">
            <h1>Order List</h1>
        </div>
        <div class="tabel">
            <div class="table-responsive">
                <table class="table align-middle" style="text-decoration: none;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Order ID</th>
                            <th>Admin ID</th>
                            <th>Customer ID</th>
                            <th>Price List ID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    include '../koneksi.php';

                    $query=mysqli_query($konek,"select * from orders");
                    while($data=mysqli_fetch_array($query)){

                    ?>
                        <tr>
                            <td> <?php echo $j++ ?></td>
                            <td><?php echo $data['id_orders']; ?></td>
                            <td><?php echo $data['id_admin']; ?></td>
                            <td><?php echo $data['id_cust']; ?></td>
                            <td><?php echo $data['id_pricelist']; ?></td>
                            <td>
                            <td>
                                <a href=edit_order.php?id_orders=<?php echo $data['id_orders'];?> style="text-decoration:none;">edit</a> |
                                <a href=hapus_order.php?id_orders=<?php echo $data['id_orders'];?> style="text-decoration:none" onClick="return confirm('Are you sure want to delete this menu?')">Delete</a>
                            </td>
                            <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
