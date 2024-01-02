<?php session_start(); ?>
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
  <link rel="stylesheet" href="stylesheet/SignupStyles.css">

  <title>SignUp</title>
</head>

<body>
  <?php include "include/navbar.php"; ?>
  <div class="ContentFlexHeight">
    <div class="ContentFlexWidth">
      <div style="flex: 2">
      </div>
      <div style="flex: 8">
        <div class="signupFormLocation">
          <div class="signupForm">
            <form class="row g-3">
              <div style="width: 100%; display: flex; flex-direction:row; justify-content: space-around;">
                <img class="mb-4 LogoSignUp" src="img/Logo.jpg" alt="" style="margin: 0px">
              </div>
              <h1 class="h3 col-mb-1 fw-normal">Sign Up</h1>
              <div class="col-md-6">
                <label for="inputState" class="form-label">Anrede</label>
                <select id="inputState" class="form-select">
                  <option selected>select</option>
                  <option>Frau</option>
                  <option>Mann</option>
                  <option>Andere</option>
                  <option>nicht angegeben</option>
                </select>
              </div>
              <div class="col-md-6"></div>
              <div class="col-md-6">
                <label for="inputVorname" class="form-label">Vorname</label>
                <input type="text" class="form-control" id="inputVorname" placeholder="Max">
              </div>
              <div class="col-md-6">
                <label for="inputNachname" class="form-label">Nachname</label>
                <input type="text" class="form-control" id="inputNachname" placeholder="Mustermann">
              </div>
              <div class="col-md-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="E-Mail Adresse">
              </div>
              <div class="col-md-6">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="password">
              </div>
              <div class="col-md-6">
                <label for="inputPassword" class="form-label">Confirme Password</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="password">
              </div>
              <div class="col-12">
                <button type="submit" class=" w-100 btn btn-primary">Sign in</button>
              </div>
              <p class="mt-1 mb-3 text-body-secondary">Sie haben Bereits einen account? Klicken sie <a
                  href="login.php">hier</a>.</p>
            </form>
          </div>
        </div>
      </div>
      <div style="flex: 2">
      </div>
    </div>
  </div>

  <?php include "include/footer.php"; ?>
</body>

</html>