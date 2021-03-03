<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}

unset($_SESSION['qty_array']);
?>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Home</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <link href="../../assets/demo/demo.css" rel="stylesheet" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
	<style>
	.product_image{
		height:200px;
	}
	.product_name{
		height:80px; 
		padding-left:20px; 
		padding-right:20px;
	}
	.product_footer{
		padding-left:20px; 
		padding-right:20px;
	}
  .btn-warning {
  font-family: Raleway-SemiBold;
  font-size: 13px;
  color: rgba(240, 173, 78, 0.75);
  letter-spacing: 1px;
  line-height: 15px;
  border: 2px solid rgba(240, 173, 78, 0.75);
  border-radius: 40px;
  background: transparent;
  transition: all 0.3s ease 0s;
}
.btn-primary {
  font-family: Raleway-SemiBold;
  font-size: 13px;
  color: rgba(58, 133, 191, 0.75);
  letter-spacing: 1px;
  line-height: 15px;
  border: 2px solid rgba(58, 133, 191, 0.75);
  border-radius: 40px;
  background: transparent;
  transition: all 0.3s ease 0s;
}
</style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="green">
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          
        </a>
        <a href="#" class="simple-text logo-normal">
          <i class="fas fa-heart" style="color: darkred;"></i>
          HEALTHYDOC
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="../dashboard.html">
              <i class="fa fa-home" aria-hidden="true"></i>
              <p>About Us</p>
            </a>
          </li>
          <li class="active">
            <a href="../store/medicinestore.php">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
              <p>Medicine Store</p>
            </a>
          </li>
          <li>
            <a href="../chat/chat.html">
              <i class="fa fa-user-md" aria-hidden="true"></i>
              <p>Health Consultation</p>
            </a>
          </li>

          <li>
            <a href="./cart.php">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              <p>Cart</p>
            </a>
          </li>

          <li>
            <a href="../setting/index.html">
                <i class="fa fa-cogs" aria-hidden="true"></i>
              <p>Setting</p>
            </a>
          </li>  
          
          <li class="active-pro">
            <a href="../login/login.html">
              <i class="fas fa-sign-out-alt"></i>
              <p>Login</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <div class="content" style="padding-top: 50px;">
        <div class="row">
          <div class="col-lg-12 ">
            <div class="card card-chart">
              <div class="card-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color:black;">Medicine Store</a>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="cart.php"><span class="badge" ><?php echo count($_SESSION['cart']); ?></span>&nbsp;<font style="color:black;">Cart</font>&nbsp;<span class="glyphicon glyphicon-shopping-cart" style="color:black;"></span></a></li>
                        </ul>
                      </div>
              </div>
              <div class="card-body"> 
                  <p>
                  <?php
                  if(isset($_SESSION['message'])){
                    ?>
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-6">
                        <div class="alert alert-info text-center">
                          <?php echo $_SESSION['message']; ?>
                        </div>
                      </div>
                    </div>
                    <?php
                    unset($_SESSION['message']);
                  }
              
              
                  //connection
                  $conn = new mysqli('localhost', 'root', '', 'shopping');
              
                  $sql = "SELECT * FROM products";
                  $query = $conn->query($sql);
                  $inc = 4;
                  while($row = $query->fetch_assoc()){
                    $inc = ($inc == 4) ? 1 : $inc + 1; 
                    if($inc == 1) echo "<div class='row text-center'>";  
                    ?>
                    <div class="col-sm-3">
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="row product_image">
                            <?php echo "<img src='../../assets/$row[photo]' padding-top:0px;' />";?>
                          </div>
                          <div class="row product_name">
                            <h4><?php echo $row['name']; ?></h4>
                          </div>
                          <div class="row product_footer">
                            <p><b><?php echo $row['price']; ?></b></p>
                            <div class="col-md-12">
                            <span>
                                  <button type="button" class="btn btn-warning">
                                  <a href="add_cart.php?id=<?php echo $row['id']; ?>">
                                  Cart
                                </a> 
                                  </button>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal" >Detail</button>
                            </span>
                            </div>
                          </div> 
                        </div>
                      </div>
                    </div>

                    
                    <?php
                  }
                  if($inc == 1) echo "<div></div><div></div><div></div></div>"; 
                  if($inc == 2) echo "<div></div><div></div></div>"; 
                  if($inc == 3) echo "<div></div></div>";		
                  ?>
                
              
                <div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <form action="save_query.php" method="POST" enctype="multipart/form-data">
                      <div class="modal-content">
                        <div class="modal-body">
                        <div class="card mb-3">
                            <div class="row g-0">
                              <div class="col-lg-4">
                                <img src="../../assets/images/bisolvon.jpeg" width="600px" height="300px">
                              </div>
                              <div class="col-lg-8">
                                <div class="card-body">
                                  <h5 class="card-title" text-align="left"><b>Deskripsi Produk</b></h5>
                                  <p class="card-text" style="text-align:justify;">TBISOLVON EXTRA SIRUP mengandung Bromhexine HCl dan Guaifenesin. 
                                    Obat ini digunakan untuk mengatasi batuk berdahak yang bekerja sebagai sekretolitik (mukolitik) dan 
                                    ekspektoran untuk meredakan batuk berdahak dan mempermudah pengeluaran dahak pada saat batuk. 
                                    Obat ini akan membantu dengan 3 langkah kerja, yaitu: dengan Melepaskan, Mengencerkan, serta Mengeluarkan dahak, sehingga dahak dapat mudah dikeluarkan.
                                  </p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        <div style="clear:both;"></div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../../assets/js/core/jquery.min.js"></script>
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="../../assets/js/plugins/chartjs.min.js"></script>
  <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
  <script src="../../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../../assets/demo/demo.js"></script>
  <script src="../../assets/js/jquery-3.2.1.min.js"></script>
  <script src="../../assets/js/bootstrap.js"></script>
  <script>
    $(document).ready(function() {
      demo.initDashboardPageCharts();
    });
  </script>
</body>
</html>