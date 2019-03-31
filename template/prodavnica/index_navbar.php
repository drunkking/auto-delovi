

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Auto delovi</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../admin/admin.php">ADMIN TEST</a>
          </li>

          <?php if(!empty($_SESSION['spec'])) { 
            echo '
          <li class="nav-item">
            <a class="nav-link " href="#"  data-toggle="modal" data-target="#exampleModal">
               Korpa
              <i class="fas fa-shopping-cart"></i> </a>
          </li>';
          }

          ?>
          <li class="nav-item">
               <a class="nav-link" data-toggle="modal" data-target="#LoginModal" href="#">Prijavi se</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#RegiModal" href="#">Registruj se</a>
          </li>
 
        </ul>
      </div>
    </div>
  </nav>


 