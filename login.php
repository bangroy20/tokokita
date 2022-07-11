<?php
session_start();

// cek login 
if (isset($_POST['submit'])) {
  // membedakan user dg admin
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username == "user" && $password == "123") {
    $_SESSION["user"] = true;
    header("location:index.php");
    exit;
  } elseif ($username == "admin" && $password == "123") {
    $_SESSION["user"] = true;
    header("location:index.php");
    exit;
  }
  $error = true;
}
?>

<!-- kyomasa -->

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylsheet" href="style.css">

  <title>LOGIN</title>
</head>

<body>

  <div class="p-3 mb-2 bg-light text-dark">

    <br><br><br>

    <center>
      <div class="container">
        <div class="card p-3" style="max-width: 350px; border-radius:20px;">

          <div class="card-body" style="background-color:#FFE400; border-radius:15px;">
            <h4 class="card-title">YOU SHOP </h4><br>
            <div>
              <img src="../YOU SHOP/file/login.jpg" width="100px" class="rounded-circle">
            </div>
            <h4 class="card-title">Login</h4><br>

            <div class="card-text">

              <form action="" method="POST">

                <label for="username">Username </label>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                  <input type="text" aria-describedby="basic-addon1" class="form-control" name="username" placeholder="username" autocomplete="off" aria-label="username" required>
                </div>

                <label for="password">Password</label>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
                  <input type="password" name="password" aria-describedby="basic-addon2" class="form-control" placeholder="password" autocomplete="off" aria-label="password" required>
                </div>
                <br>

                <button type="submit" name="submit" class="btn btn-primary" value="submit">Masuk</button>
                <br>
                <?php if (isset($error)) : ?>
                  <p class="error" style="color: red;">Username/Password Salah !</p>
                <?php endif; ?>


                <p style="color: black; margin-top:10px;">Anda Belum Punya Akun ?
                  <br> <a href="registrasi.php" class="btn btn-danger">Buat akun</a>
                </p>

              </form>
            </div>
          </div>
        </div>
    </center>
  </div>



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>


</html>