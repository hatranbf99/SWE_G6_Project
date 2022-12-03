<?php

    if(isset($_SESSION['userlogin'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

        <title>TANNINFO</title>
        <meta name="viewport" content="width=device-width"
        
        <!-- Bootstrap-->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <!-- CSS File -->
        <link rel="stylesheet" href="style.css">

</head>

<body>

    <section class="Form">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="./Wine_pour.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>

    <div class="login">

            <h1 class="text-center">Welcome Back!</h1>

            <form class="needs-validation">

                <div class="form-group was-validated">
                        <label class="form-label" for="email">Email address</label>
                        <input class="form-control" type="email" id="email" value ="<?php echo (isset($_GET['uname']))?$_GET['uname']: "" ?>" required>
                        <div class="invalid-feedback">
                            Please enter your email address
                        </div>
                </div>

                <div class="form-group was-validated">
                    <label class="form-label" for="pasword">Password</label>
                    <input class="form-control" type="pasword" id="pasword" name="pass" required>
                    <div class="invalid-feedback">
                        Please enter your password
                    </div>
                </div>

                <div class="form-group form-check">
                    <input class="form-check-input" type="checkbox" id="check">
                    <label class="form-check-label" for="check">Remember me</label> 
                </div>

                <input class="btn btn-success w-100" type="submit" value="SIGN IN">

            </form>

    </div>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<?php
session_start();

if (
    isset($_POST['email']) &&
    isset($_POST['password'])){

    include "/config.php";

    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $data = "email" . $email . "password" . $password .

    $sql = "SELECT * users WHERE email = email ";
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([$email, $password]);

    if ($stmt - rowCount() == 1) {
        $user = $stmt->fetch();
        $username = $user['email'];
        $password = $user['password'];
        if ($username === $uname) {
            if (password_verify($pass, $password)) {
                $_SESSION['email'] = $username;
                $_SESSION['password'] = $password;
                echo "Logged in";
            } else {
                $em = "Incorrect Email or Password";
            }

            } else {
                $em = "Incorrect Email or Password";
            }
        }
    }

?>
</body>
</html>