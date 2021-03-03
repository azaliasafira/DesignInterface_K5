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
.btn-success {
    font-family: Raleway-SemiBold;
    font-size: 13px;
    color: rgba(21, 132, 103);
    letter-spacing: 1px;
    line-height: 15px;
    border: 2px solid rgba(21, 132, 103);
    border-radius: 40px;
    background: transparent;
    transition: all 0.3s ease 0s;
  }
.btn-danger {
    font-family: Raleway-SemiBold;
    font-size: 13px;
    color: rgba(236, 31, 31);
    letter-spacing: 1px;
    line-height: 15px;
    border: 2px solid rgba(236, 31, 31);
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
          <li>
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

          <li class="active">
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
                <a class="navbar-brand" href="#" style="color:black;">Cart</a>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="cart.php"><span class="badge" ><?php echo count($_SESSION['cart']); ?></span>&nbsp;<font style="color:black;">Cart</font>&nbsp;<span class="glyphicon glyphicon-shopping-cart" style="color:black;"></span></a></li>
                        </ul>
                      </div>
              </div>
              <div class="card-body"> 
              <div class="row">
                <div class="col-sm-12">
                  <?php 
                  if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-info text-center">
                      <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
                    unset($_SESSION['message']);
                  }

                  ?>
                  <form method="POST" action="save_cart.php">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <th></th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Subtotal</th>
                    </thead>
                    <tbody>
                      <?php
                        $total = 0;
                        if(!empty($_SESSION['cart'])){
                        $conn = new mysqli('localhost', 'root', '', 'shopping');
                        $index = 0;
                        if(!isset($_SESSION['qty_array'])){
                          $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
                        }
                        $sql = "SELECT * FROM products WHERE id IN (".implode(',',$_SESSION['cart']).")";
                        $query = $conn->query($sql);
                          while($row = $query->fetch_assoc()){
                            ?>
                            <tr>
                              <td>
                                <a href="delete_item.php?id=<?php echo $row['id']; ?>&index=<?php echo $index; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                              </td>
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo number_format($row['price'], 2); ?></td>
                              <input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
                              <td><input type="text" class="form-control" value="<?php echo $_SESSION['qty_array'][$index]; ?>" name="qty_<?php echo $index; ?>"></td>
                              <td><?php echo number_format($_SESSION['qty_array'][$index]*$row['price'], 2); ?></td>
                              <?php $total += $_SESSION['qty_array'][$index]*$row['price']; ?>
                            </tr>
                            <?php
                            $index ++;
                          }
                        }
                        else{
                          ?>
                          <tr>
                            <td colspan="4" class="text-center">No Item in Cart</td>
                          </tr>
                          <?php
                        }

                      ?>
                      <tr>
                        <td colspan="4" align="right"><b>Total</b></td>
                        <td><b><?php echo number_format($total, 2); ?></b></td>
                      </tr>
                    </tbody>
                  </table>
                  <a href="medicinestore.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
                  <button type="submit" class="btn btn-success" name="save">Save Changes</button>
                  <a href="clear_cart.php" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Clear Cart</a>
                  <a href="checkout.php" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Checkout</a>
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