<!DOCTYPE html>
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
          <li>
            <a href="../store/medicinestore.php">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
              <p>Medicine Store</p>
            </a>
          </li>
          <li>
            <a href="../map.html">
              <i class="fa fa-user-md" aria-hidden="true"></i>
              <p>Health Consultation</p>
            </a>
          </li>
          
          <li>
            <a href="../store/cart.php">
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
            <a href="./upgrade.html">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
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
			  <a class="navbar-brand" href="#" style="color:black;">Checkout</a>
              </div>
              <div class="card-body">
			  	<div class="col-md-6">
					<div class="card card-primary card-dark ">
						<div class="card-header" style="background-color:green;">
							<h5 class="m-0">Alamat</h5>
						</div>
          </div>
        <div class="col-md-9 col-lg-10">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" style required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
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
  <script>
    $(document).ready(function() {
      demo.initDashboardPageCharts();
    });
  </script>
</body>
</html>