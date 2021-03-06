<?php
require_once("includes/header.php");
?>

<?php
$the_message = '';
if($session->is_signed_in()){
    redirect("index.php");
}

if(isset($_POST['submit'])){
    $Username = trim($_POST['Username']);
    $Password = trim($_POST['Password']);

    $user_found = User::verify_user($Username, $Password);

    if($user_found){
        $session->login($user_found);
        redirect("index.php");
    }else{
        $the_message = "Your Password of Username FAILED";
    }
}else{
    $Username = "";
    $Password = "";
}
?>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                    <h2 class="bg-danger"><?php echo $the_message; ?></h2>
                  <form class="user" method="post">
                    <div class="form-group">
                        <label for="Username">Username:</label>
                      <input type="text" name="Username" value="<?php echo htmlentities($Username); ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username ...">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password:</label>
                      <input type="Password" name="Password" value="<?php echo htmlentities($Password); ?>" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Aanmelden" class="btn btn-primary">
                    </div>
                  </form>
                  <hr>
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
