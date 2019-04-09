

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="../../index.php">Auto delovi</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">


          <?php

              if(isset($_SESSION['admin']) && isset($_SESSION['spec'])){
                $spec = $_SESSION['spec'];
      
                if($_SESSION['admin'] == $spec){
                
                  echo " <li class='nav-item'>
                          <a href='../admin/admin.php' class='nav-link' >Profil <i class='far fa-user-circle'></i></a>
                        </li>
                        <li class='nav-item'>
                          <a class='nav-link' href='#'  data-toggle='modal' data-target='#exampleModal'>
                              Korpa
                            <i class='fas fa-shopping-cart'></i> </a>
                        </li>";
                  }
              } else if(isset($_SESSION['user'])){
                $spec = $_SESSION['spec'];
                
                if($_SESSION['user'] == $spec){

                  echo " <li class='nav-item'>
                          <a href='../user/user.php' class='nav-link' >Profil <i class='far fa-user-circle'></i></a>
                        </li>
                        <li class='nav-item'>
                        <a class='nav-link' href='#'  data-toggle='modal' data-target='#exampleModal'>
                            Korpa
                          <i class='fas fa-shopping-cart'></i> </a>
                      </li>";
                }
              } else {
                  echo '
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#LoginModal" href="#">Prijavi se  <i class="fas fa-door-open"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#RegiModal" href="#">Registruj se <i class="fas fa-dna"></i></a>
                      </li>';
              }
          ?>
        </ul>
      </div>
    </div>
  </nav>


 