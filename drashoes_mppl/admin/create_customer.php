<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Customer Drashoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        *{
            font-family: poppins;
        }
        .home{
          margin-top: 10vh;
          margin-bottom: 10vh;

          height: 50vh;
        }
    </style>
  </head>

  <body>
    <?php include 'navbar.php'?>
    <div class="home">

      <div class="container">
        <div class="header mt-5">
          <h1>Add Customer</h1>
        </div>
        <hr></hr>
        
        <td border="4px"></td>
        
        <form method="POST" action="cek_create_customer.php">
          
          <div class="username mt-4">
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username_cust" class="form-control" id="exampleFormControlInput1" >
            </div>
          </div>
          
          <div class="genre mt-4">
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="text" name="email_cust" class="form-control" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="genre mt-4">
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="text" name="password_cust" class="form-control" id="exampleFormControlInput1">
            </div>
          </div>
          
          <div class="button mt-4">
            <button type="submit" class="btn btn-primary" name="submit" value="kirim"> Send </button>
            <a href="data_customer.php" type="button" class="btn btn-danger"> Back </a>
          </div>
        </form>
        
      </div>
    </div>
      <?php include'footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>