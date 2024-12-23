<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Admin Drashoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        *{
            font-family: poppins;
        }
        .home{
            margin-top: 10vh;
            margin-bottom: 30vh;
            height: 50vh;
        }
    </style>  
</head>
  <body>
  <?php $i=1;?>
  <?php  include 'navbar.php'?>
<div class="home">

    <div class="container mt-5">
        <div class="header">
            <h1>List Admin</h1>
        </div>
        <div class="tombol">
            <div class="btn-group mt-5 mb-2">
                <button type="button" class="btn btn-primary btn-sm"><a href="create_admin.php" style="text-decoration:none; color:white">Add Account</a></button> 
            </div>
        </div>
        
        <div class="tabel">
            <div class="table-responsive">
                <table class="table align-middle" style="text-decoration: none;">
                    <thead>
                        <tr>
                            <th>ID </th>
                            <th>Role</th>
                            <th>Username</th>
                            <th>Password</th>               
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                include '../koneksi.php';
                $query=mysqli_query($konek,"select * from admin");
                while($data=mysqli_fetch_array($query))
                { ?>
              
              <tr>
                  <td> <?php echo $i++ ?></td>
                  <td> <?php echo $data['role_admin']; ?></td>
                  <td> <?php echo $data['username_admin']; ?></td>
                  <td> <?php echo $data['password_admin']; ?> </td>
                  <td>
                      <a href=edit_admin.php?id_admin=<?php echo $data['id_admin'];?> style="text-decoration:none;">Edit</a> |
                      <a href=hapus_admin.php?id_admin=<?php echo $data['id_admin'];?> style="text-decoration:none" onClick="return confirm('Are you sure want to delete this account?')">Delete</a></td>
                      <?php }?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<?php include'footer.php'?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>