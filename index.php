<?php
require_once 'src/model/ProduitManager.php';

$obj = new produitManager();

  if(isset($_GET['editid'])){
    $prod = $obj->getProduitById($_GET['editid']);
  }

  if(isset($_GET['deleteid'])){
    $obj->deleteProduit($_GET['deleteid']);
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <link rel="apple-touch-icon" sizes="76x76" href="public/template/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="public/template/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="public/template/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="public/template/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="public/template/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./dashboard.html">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./icons.html">
              <i class="nc-icon nc-diamond"></i>
              <p>Icons</p>
            </a>
          </li>
          <li>
            <a href="./map.html">
              <i class="nc-icon nc-pin-3"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="nc-icon nc-bell-55"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="active ">
            <a href="./user.html">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="nc-icon nc-tile-56"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="nc-icon nc-caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="nc-icon nc-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Paper Dashboard 2</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
	  
        <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <form action="src/controller/produitController.php" method="post">
			            <div class="row">
                    <div class="offset-1 col-md-10 pr-1">
                      <div class="form-group">
                        <label>Formulaire Produit</label>
                        <input type="text" class="form-control" disabled="" placeholder="DAKAR BUSINESS">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="offset-1 col-md-10 pr-1">
                      <div class="form-group">
                        <label>Reference</label>
                        <input type="text" class="form-control" <?php if(isset($_GET['editid'])){ echo 'value='.$prod['ref'].''; } ?>  placeholder="Reference" name="reference">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-1 col-md-10 pr-1">
                      <div class="form-group">
					              <label>Nom</label>
                        <input type="text" class="form-control" <?php if(isset($_GET['editid'])){ echo 'value='.$prod['nom'].''; } ?>  placeholder="Nom" name="nom">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-1 col-md-10 pr-1">
                      <div class="form-group">
					              <label>Stock</label>
                        <input type="number" class="form-control" <?php if(isset($_GET['editid'])){ echo 'value='.$prod['stock'].''; } ?>  placeholder="Stock" name="stock">
                      </div>
                    </div>
                </div>
                <?php if(isset($_GET['editid'])){ 
                  ?>
                    <input type="hidden" name="id" value="<?= $prod['id'] ?>">
                  <?php
                  } 
                  ?>
                <div class="row">
                    <div class="offset-1 col-md-10 pr-1">
                      <div class="form-group">
					              <label>Prix</label>
                        <input type="number" class="form-control" <?php if(isset($_GET['editid'])){ echo 'value='.$prod['prix'].''; } ?>  placeholder="Prix" name="prix">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" <?php if(isset($_GET['editid'])){ echo 'name="btnUpdateProduit"'; }else{echo 'name="valider"';} ?>class="btn btn-primary btn-round">Enregistrer</button>
                    </div>
                </div>
				
              </div>
                </form>
            </div>
          <div class="col-md-8">

            <div class="card card-user">
              <table>
                <tr>
                <th>numero</th>
                <th>Reference</th>
                <th>Nom</th>
                <th>Stock</th>
                <th>Prix</th>
                <th colspan="2">Action</th>
                </tr>
                <?php
                      $data = $obj->getProduitAll();
                      $sno = 1;
                      foreach($data as $value) {
                      ?>
                      <tr>
                      <td><?=$sno++?></td>
                      <td><?=$value['ref']?></td>
                      <td><?=$value['nom']?></td>
                      <td><?=$value['stock']?></td>
                      <td><?=$value['prix']?></td>
                      <td>
                      <a href="index.php?editid=<?=$value['id']?>" class="btn btn-sm btn-warning">Edit</a>
                      <a href="index.php?deleteid=<?=$value['id']?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>

                    <?php
                    }
                    ?>
                </table>
            </div>

          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="public/template/assets/js/core/jquery.min.js"></script>
  <script src="public/template/assets/js/core/popper.min.js"></script>
  <script src="public/template/assets/js/core/bootstrap.min.js"></script>
  <script src="public/template/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="public/template/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="public/template/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="public/template/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="public/template/assets/demo/demo.js"></script>
</body>

</html>