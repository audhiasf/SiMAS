<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - SiMAS</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="loginStyle.css">
</head>
<body>
  <!-- Logo perusahaan -->
  <div class="container mt-3">
    <img src="img/logo_simas.png" alt="Your Company Logo" class="img-fluid mx-auto d-block" style="max-width: 200px;">
  </div>

  <!-- Form login -->
  <div class="container login-container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="row no-gutters">
          <!-- Box kiri dengan menu login -->
          <div class="col-md-6">
            <div class="login-box login-left">
              <div class="login-header mt-4">
                <h3>Welcome</h3>
                <p>Login as:</p>
                <div class="btn-group-toggle" data-toggle="buttons">
                <a href="index.php" class="btn btn-primary" role="button">Admin</a>
                <a href="loginDriver.php" class="btn btn-primary" role="button">Driver</a>
                  <!-- <label class="btn btn-primary active">
                  <input type="radio" name="options" id="adminOption" autocomplete="off" checked> Admin
                  </label>
                  <label class="btn btn-primary">
                    <input type="radio" name="options" id="driverOption" autocomplete="off"> Driver
                  </label> -->
                </div>
              </div>
              <form action="session-login/login-driver.php" class="login-form" id="loginForm" method="POST">
              <input type="hidden" name="role" value="driver">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input id="username" type="username" name="username" class="form-control" placeholder="Username" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input id="password" type="password" name="password" class="form-control" placeholder="Password" required>
                  </div>
                </div>
                <button type="submit" class="btn btn-block btn-login">Login</button>
              </form>
            </div>
          </div>
          <!-- Box kanan dengan gambar -->
          <div class="col-md-6">
            <div class="login-box login-right"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  
</body>
</html>
