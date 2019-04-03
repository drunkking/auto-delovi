<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand"  id="menu-toggle"  href="#">Auto delovi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="../admin/admin.php">Glavna <i class="fas fa-tachometer-alt"></i></a>
            <a class="nav-item nav-link" href="../../index.php">Sajt <i class="fas fa-home"></i></a>
            <a class="nav-item nav-link" href="#"><?php  if(isset($_SESSION['spec'])) echo $_SESSION['spec']; else echo "Username"; ?>  <i class="fas fa-user-circle"></i></a>
            <a class="nav-item nav-link" href="../../src/includes/odjavi_korisnika.php">Odjavi se <i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
    </nav>