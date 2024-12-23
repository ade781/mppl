
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drashoes.ID </title>
    <link rel="stylesheet" href="cssindex.css">
</head>

<video autoplay muted loop id="myVideo">
        <source src="main_vid.mp4" type="video/mp4">
</video>

<body>
    <nav>
        <img src="img/logodrashoes.png" alt="logo" width="250">
    </nav>

    <div class="form-wrapper">

        <h2>Admin Login</h2>
            <form method="POST" action="cekloginadmin.php">
                <div class="form-control">
                    <input type="text" name="username_admin" required >
                    <label>Username</label>
                </div>
                <div class="form-control">
                    <input type="password" name="password_admin" required>
                    <label>Password</label>
                </div>
            <button type="submit" value="LOGIN">Login</button>
            <div class="formfooter">
                 <p style="color: white; text-align: left; display: inline-block;">Login as Customer</p>
                <a href="index.php" style="color: red; text-align: right; display: inline-block; float: right;">Login</a>
            </div>
            <br>
            <br>
            <h5 style="color:white">

                <?php
            if(isset($_GET['pesan']))
            {
                if($_GET['pesan'] == "gagal")
                {
                    echo "Login gagal! username dan password salah!";
                }else if($_GET['pesan'] == "logout")
                
                {
                    echo "Anda telah berhasil logout";
                }else if($_GET['pesan'] == "belum_login")
                {
                    
                }
            }
            ?>
            <h5>
        </form>
    </div>

</body>
</html>