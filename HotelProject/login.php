<?php
session_start();

$isLoggedIn = false;
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($username == "admin" && $password == "admin") {
    $isLoggedIn = true;
    $_SESSION["isLoggedIn"] = true;

    $_SESSION["user"] = $username;

    setcookie("user", $username, time() + 3600, "/");
    header("Location: index.php");
  }
}

if (isset($_SESSION["user"])) {
  $isLoggedIn = true;
}

if (isset($_POST["logout"])) {
  session_destroy();
  setcookie("user", "", time() - 3600, "/");
  $isLoggedIn = false;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="stylesheet/styles.css">
  <link rel="stylesheet" href="stylesheet/LoginStyles.css">

  <title>Login</title>
</head>

<body>
  <?php include "include/navbar.php"; ?>
  <div class="ContentFlexHeight">
    <?php if ($isLoggedIn) { ?>
      <div class="ContentFlexWidth">
        <div style="flex: 4">
        </div>
        <div style="flex: 4; padding-top: 100px; align-content:center; justify-content: center">
          <div>
            <?php
            include "profilePicture.php";
            uploadAndDisplayImage();
            ?>
          </div>
        </div>
        <div style="flex: 4">
        </div>
      </div>
    <?php } ?>
    <div class="ContentFlexWidth">
      <div style="flex: 2">
      </div>
      <div style="flex: 8;">
        <div class="LoginFieldLocation">
          <?php
          if (!$isLoggedIn) {
            ?>
            <form class="formLogin" action="" method="post">
              <div style="width: 100%; display: flex; flex-direction:row; justify-content: space-around;">
                <img class="mb-4 LogoLogin" src="img/Logo.jpg" alt="">
              </div>
              <h1 class="h3 mb-3 fw-normal">Log in</h1>
              <div class="mt-1">
                <label for="username">Email Adresse or Username</label>
                <input class="form-control" type="text" id="username" name="username" placeholder="Benutzername">
              </div>
              <div class="mt-1">
                <label for="password">Passwort</label>
                <input class="form-control password" type="password" id="password" name="password" placeholder="Passwort">
              </div>
              <div class="mt-3">
                <input class="w-100 btn btn-lg btn-primary" type="submit" value="Login" name="login">
              </div>
              <p class="mt-3 mb-2 text-body-secondary">Sie haben noch keinen account? Klicken sie <a
                  href="SignUp.php">hier</a>.</p>
            </form>
            <?php
          } else {
            ?>
            <form class="formLogin" action="" method="post">
              <div class="ContentFlexHeight" style="padding: 10px; min-height: 300px;">
                <div class="ContentFlexWidth" style="padding: 10px; min-width: 300px;">
                  <h3>Profil:</h3>
                </div>
                <div class="ContentFlexWidth" style="padding: 10px; min-width: 300px;">
                  <div style="flex-grow: 6;">
                    <h4>Username:</h4>
                  </div>
                  <div style="flex-grow: 6;">
                    <p style="margin: 0px; font-size: 20px;">admin</p>
                  </div>
                </div>
                <div class="ContentFlexWidth" style="padding-left: 10px; padding-right: 10px;">
                  <p style="margin-bottom: 1px">blah blah blah...</p>
                </div>
                <div class="ContentFlexWidth" style="padding-left: 10px; padding-right: 10px;">
                  <p style="margin-bottom: 1px">blah blah blah...</p>
                </div>
                <div class="ContentFlexWidth" style="padding-left: 10px; padding-right: 10px;">
                  <p style="margin-bottom: 1px">blah blah blah...</p>
                </div>
                <div class="ContentFlexWidth" style="padding-top: 20px; padding-left: 10px; padding-right: 10px;">
                  <input class="w-100 btn btn-lg btn-primary" type="submit" value="Logout" name="logout">
                </div>
                <div class="ContentFlexWidth" style="padding-top: 5px; padding-left: 10px; padding-right: 10px;">
                  <p class="mt-1 mb-1 text-body-secondary"><a href="SignUp.php">Wollen sie ihr Passwort ändern?</a>.</p>
                </div>
              </div>
            </form>
          <?php }
          ?>
        </div>
      </div>
      <div style="flex: 2">
      </div>
    </div>
  </div>
  <?php include "include/footer.php"; ?>
</body>

</html>