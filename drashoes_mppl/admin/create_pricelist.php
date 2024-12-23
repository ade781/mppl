<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Menu Drashoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        *{
            font-family: poppins;
        }
        .home{
          display: flex;
          gap: 2vh;
          margin-top: 10vh;
          margin-bottom: 10vh;
        }
    </style>
  </head>

  <body>
    <?php include'navbar.php'?>
    <div class="home">
      <div class="container">
        <div class="header mt-5">
          <h1>Add Menu</h1>
        </div>
        <hr></hr>
        <td border="4px"></td>
        <form method="POST" action="cek_create_pricelist.php">
          <div class="username mt-4">
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" name="nama_pricelist" class="form-control" id="exampleFormControlInput1" >
            </div>
          </div>
          
          <div class="genre mt-4">
            <div class="mb-3">
              <label class="form-label">Price</label>
              <input type="text" name="harga" class="form-control" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="genre mt-4">
            <div class="mb-3">
              <label class="form-label">Link Photo</label>
              <input type="text" name="linkfoto" class="form-control" id="exampleFormControlInput1">
            </div>
          </div>
          
          <div class="button mt-4">
            <button type="submit" class="btn btn-primary" name="submit" value="kirim"> Send </button>
            <a href="data_pricelist.php" type="button" class="btn btn-danger">Back</a>
          </div>
        </form>
        
      </div>
    </div>
    
    <?php include'footer.php'?>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>