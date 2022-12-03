<?php
require_once('config.php'); 
?>

<!DOCTYPE html>
<html>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Tanninfo - Wine Picks</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/logoMain.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <title> Sign Up Page </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script type="text/javascript" href="./bootstrap-5.2.0/js/bootstrap.bundle.min.js"> </script>
        <script type="text/javascript" href="./bootstrap-4.0.0/dist/js/boostrap.min.js"> </script>

<script>

<?php include("config.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</script>

</head>

<body>
<!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="index.html">
                                <img src="assets/img/logoMain.png" alt="">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class="current-list-item"><a href="index.html">Home</a> </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="#">Wines</a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="news.html">News</a></li>  <!-- Old:   news.html -->
                                    </ul>
                                </li>
                                <li><a href="news.html">What's Trending</a> <!-- Old:   news.html -->
                                    <ul class="sub-menu">
                                        <li><a href="news.html"> Cities </a></li> <!-- Old:   news.html -->
                                        <li><a href="single-news.html">Neighborhood</a></li> <!-- Old:   single-news.html -->
                                    </ul>
                                </li>
                                <li><a href="contact.html">Interactive Map</a></li> <!-- Old:   contact.html -->
                                <li><a href="shop.html">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="single-product.html">Single Product</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="log-in.html" class="bordered-btn"> Log In </a> 
                                </li>
                                <li>

                                    <div class="register">

                                    <a href="signUp.php" class="boxed-btn"> Sign Up </a>
                                    </div>
                                </li>                   
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    


    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Get Exclusive Access</p>
                        <h1>Becoming a Member</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->




<section class="h-100 bg-light">
<form action="signUp.php" method="POST">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">

            <div class="col-xl-6 d-none d-xl-block">
              <img src="assets/img/signUpImg.jpg"

                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>

            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5">Sign Up!</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="Fname">First name</label>
                      <input type="text" id="Fname" name="Fname"  placeholder="enter your first name" class="form-control form-control-lg" />
                      
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="Lname">Last name</label>
                      <input type="text" name="Lname" id="Lname"  placeholder="enter your last name" class="form-control form-control-lg" />
                      
                    </div>
                  </div>
                </div>
                <!-- Phone -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="phone">Phone</label>
                  <input type="text" name="phone" id="phone"  placeholder="enter your phonenumber" class="form-control form-control-lg" />
                  
                </div>

      
                <div class="form-outline mb-4">
                    <label class="form-label" for="username">Email/Username</label>
                    <input type="text" name="username" id="username"  placeholder="enter your username/email address" class="form-control form-control-lg" />
                    <div id="emailHelp" class="form-text"> Email will also be your USERNAME.</div>
                </div>

                <!-- PASSWORD -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="text" name="password" id="password"  placeholder="enter your password" class="form-control form-control-lg" />

                </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-success btn-lg ms-2" id="register" name="create">Register!</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </div>
</form>
<?php
include "config.php"; 

if(isset($_POST['Fname']) &&
    isset($_POST['Lname']) &&
    isset($_POST['phone']) &&
    isset($_POST['username']) &&
    isset($_POST['password'])){
    include 'config.php';
   

    $Fname      = $_POST['Fname'];
    $Lname       = $_POST['Lname'];
    $phone          = $_POST['phone'];
    $username    = $_POST['username'];
    $password       = sha1($_POST['password']);

    $data = "Fname=" . $Fname . "Lname=" . $Lname . "phone=" . $phone . "username=" . $username . "password=" . $password;

        $sql = "INSERT INTO users(Fname, Lname, phone, username, password ) VALUES(?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$Fname, $Lname, $phone, $username, $password]);
       
}else{
    echo 'No data';
}

?>
</section>
</body>
</html> 