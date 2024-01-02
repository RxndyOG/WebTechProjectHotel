<?php
$loginVariable = $_SESSION["isLoggedIn"];
?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container-fluid">

    <a class="navbar-brand" href="index.php">
      <img src="img/Logo.jpg" alt="Logo" class="Logo">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
      aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">

      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">
            <p class="navbarText">Home</p>
          </a>
        </li>
        <div class="textSeperator">
        </div>
        <li class="nav-item">
          <a class="nav-link" href="zimmerreservierung.php">
            <p class="navbarTextsmall">Unsere Zimmer</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <p class="navbarTextsmall">Angebote</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <p class="navbarTextsmall">Spa-Behandlungen</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="impressum_mit.php">
            <p class="navbarTextsmall">Kontakt</p>
          </a>
        </li>
        <?php
        if ($loginVariable != true) {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">
              <p class="navbarTextsmall">Login</p>
            </a>
          </li>
          <?php
        } else {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">
              <p class="navbarTextsmall">Profil</p>
            </a>
          </li>
          <?php
        }
        ?>
        <?php
        if ($loginVariable != true) {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="SignUp.php">
              <p class="navbarTextsmall">Sign Up</p>
            </a>
          </li>
          <?php
        } else {
        }
        ?>

      </ul>

    </div>
  </div>
</nav>