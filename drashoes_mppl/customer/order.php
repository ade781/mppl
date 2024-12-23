<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Drashoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    <?php include 'navbar.php'; ?>

    <div class="home">
        <div class="container mt-5">
            <div class="header">
                <h1>Order List</h1>
            </div>
            <div class="tombol">
                <div class="btn-group mt-5 mb-2">
                    <button type="button" class="btn btn-primary btn-sm">
                        <a href="create_order.php" style="text-decoration:none; color:white">Add Order</a>
                    </button>
                </div>
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

                            // Cek apakah session sudah dimulai
                            if (session_status() == PHP_SESSION_NONE) {
                                session_start();
                            }

                            // Cek apakah id_cust ada di session
                            if (isset($_SESSION['id_cust'])) {
                                $id_cust = $_SESSION['id_cust'];
                            } else {
                                die("Customer ID not found.");
                            }

                            // Debugging untuk melihat id_cust yang ada di session
                            // echo "ID Customer: " . $id_cust;
                            
                            // Query untuk mengambil data orders berdasarkan id_cust
                            $query = mysqli_query($konek, "SELECT * FROM orders WHERE id_cust = $id_cust");

                            if (!$query) {
                                echo "Query error: " . mysqli_error($konek);
                            } else {
                                if (mysqli_num_rows($query) > 0) {
                                    $i = 1; // Counter untuk nomor urut
                                    while ($data = mysqli_fetch_array($query)) { ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $data['id_orders']; ?></td>
                                            <td><?php echo $data['id_admin']; ?></td>
                                            <td><?php echo $data['id_cust']; ?></td>
                                            <td><?php echo $data['id_pricelist']; ?></td>
                                            <td>
                                                <a href="hapus_order.php?id_orders=<?php echo $data['id_orders']; ?>"
                                                    style="text-decoration:none"
                                                    onClick="return confirm('Are you sure you want to delete this order?')">cancel</a>
                                            </td>
                                        </tr>
                                    <?php }
                                } else {
                                    echo "<tr><td colspan='6'>No orders found for this customer.</td></tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>