<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Custom fonts - Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../resources/css/font-awesome.min.css">
    <!-- Bootstrap core CSS --> 
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" type="text/css" href="../resources/css/style.css">
    <!-- Custom fonts for this template -->
    <link href="resources/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:400,500" rel="stylesheet">
    
</head>
<body>
	<!-- Start Modal -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!-- modal header -->
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign in To Your Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--modal body -->
        <div class="modal-body">
          <form>
            <!--Email -->
            <div class="form-group">
                <div class="row">
                  <div class="col-1 text-center" style="padding: 3px 0 0 0 ; ">
                    <i class="fa fa-user fa-lg"></i>
                  </div>
                  <div class="col-10" style="padding: 0;"">
                    <input class="form-control" type="email" name="email" placeholder="Username or Email Address ">
                  </div>
                </div>
            </div>
            <!-- Password -->
            <div class="form-group">
                <div class="row">
                  <div class="col-1 text-center" style="padding:  3px 0 0 0; ">
                    <i class="fa fa-lock fa-lg"></i>
                  </div>
                  <div class="col-10" style="padding: 0;"">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                  </div>
                </div>
            </div>
            <!-- Checkbox -->
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
          </form>
        </div>

        <!-- modal footer -->
        <div class="modal-footer">
          <div class="col">
            <a href="#">Forgot your password?</a>
            <a href="signup.php">Register!</a>
          </div>
          <div class="col text-center">
            <button type="button" class="btn btn-success" style="padding: 8px 30px">
            <i class="fa fa-sign-in"></i>
            Login</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<script src="../resources/js/jquery-3.3.1.min.js"></script>
<script src="../resources/js/bootstrap.min.js"></script>
<script src="../resources/js/script.js"></script>

</body>
</html>