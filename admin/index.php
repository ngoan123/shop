<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>LOGIN | YouLook Shopping</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="./dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
      <div class="lockscreen-logo">
        <a href="../admin"><b>Admin | YouLook Shopping</b></a>
      </div>
      <!-- User name -->
      <div class="lockscreen-name">Mai Công Ngoãn</div>

      <!-- START LOCK SCREEN ITEM -->
      <div class="lockscreen-item">
        <!-- lockscreen image -->
        <div class="lockscreen-image">
          <img src="./dist/img/userngoan-160x160.jpg" alt="user image"/>
        </div>
        <!-- /.lockscreen-image -->

        <!-- lockscreen credentials (contains the form) -->
        <form class="lockscreen-credentials" action="" method="post">
          <div class="input-group">
            <input name="paword" type="password" class="form-control" placeholder="Mật khẩu..." required />
            <div class="input-group-btn">
              <button name="submit" type="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
            </div>
          </div>
        </form><!-- /.lockscreen credentials -->

      </div><!-- /.lockscreen-item -->
      <div class="help-block text-center">
        Xin mời nhập mật khẩu để vào Quản trị
      </div>
      <div class='text-center'>
        <a href="../">Hoặc về lại trang chủ</a>
      </div>
      <div class='lockscreen-footer text-center'>
        Copyright &copy; 2015 <b><a href="http://maicongngoan.com" class='text-black'>YouLook Shopping</a></b> | Design by Mai Công Ngoãn
      </div>
    </div><!-- /.center -->
    <!-- jQuery 2.1.3 -->
    <script src="./plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="./bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>

<?php 
  unset($_SESSION["user"]);
  if(isset($_POST['submit'])) {
  $paword = $_POST['paword'];
  if ($paword == 'maicongngoan' || $paword == 'ngoan') {
    // Đúng
    $_SESSION['user'] = 'admin';
    header("Location:../admin/administrator.php");
  }else {
    // SAI PASS
    echo "<script>alert('Sai mật khẩu')</script>";
  }
  }
?>
