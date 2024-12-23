
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drashoes.id</title>
    <link rel="stylesheet" href="cssindex.css">
</head>
<body>
    <nav>
        <img src="img/logodrashoes.png" alt="logo" width="250">
    </nav>

    <video autoplay muted loop id="myVideo">
        <source src="main_vid.mp4" type="video/mp4">
    </video>

    <div class="form-wrapper">

        <h2>Login</h2>
            <form method="POST" action="ceklogin.php">
                <div class="form-control">
                    <input type="text" name="username_cust" required >
                    <label>Username</label>
                </div>
                <div class="form-control">
                    <input type="password" name="password_cust" required>
                    <label>Password</label>
                </div>
            <button type="submit" value="LOGIN">Login</button>

            <div class="formfooter">
                 <p style="color: white; text-align: left; display: inline-block;">Don't have an account ?</p>
                <a href="signup.php" style="color: red; text-align: right; display: inline-block; float: right;">Sign Up</a>
            </div>
            <br>
            <div class="formfooter">
                 <p style="color: white; text-align: left; display: inline-block;">Login as Admin</p>
                <a href="loginadmin.php" style="color: red; text-align: right; display: inline-block; float: right;">Login</a>
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