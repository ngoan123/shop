<?php include('../admin/views/header.php') ?>

<?php 
  if(isset($_GET['MaKH'])){
    $MaKH = $_GET['MaKH'];
    $queryselect = mysql_query("
    SELECT *
    FROM khachhang 
    WHERE MaKH = $MaKH",$connect);
  $row = mysql_fetch_array($queryselect);
  }
?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Quản trị
            <small>| Chi tiết khách hàng</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Chi tiết khách hàng</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Chi tiết khách hàng</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form" action="" method="post" enctype='multipart/form-data'>
                    <!-- text input -->
                    <div class="form-group">
                      <label><i class="fa fa-star"></i> Họ tên khách hàng</label>
                      <input name="HoTenKH" type="text" class="form-control" value="<?php echo $row['HoTenKH'] ?>" placeholder="Nhập họ tên ..." required/>
                    </div>
                    <div class="form-group">
                      <label><i class="fa fa-university"></i> Địa chỉ</label>
                      <input name="DiaChi" type="text" class="form-control" value="<?php echo $row['DiaChi'] ?>" placeholder="Nhập địa chỉ ..." required/>
                    </div>
                    <div class="form-group">
                      <label><i class="fa fa-paper-plane"></i> Email</label>
                      <input name="Email" type="text" class="form-control" value="<?php echo $row['Email'] ?>" placeholder="Nhập email..." required/>
                    </div>
                    <div class="form-group">
                      <label><i class="fa fa-mobile"></i> Số điện thoại</label>
                      <input name="SoDT" type="text" class="form-control" value="<?php echo $row['SoDT'] ?>" placeholder="Nhập số điện thoại ..." required/>
                    </div>
                    <div class="box-footer">
                    <button name="back-hoa-don" type="submit" class="btn btn-primary btn-lg"><i class="fa fa-reply"></i> Trở về</button>
                    </div>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php 
  if(isset($_POST['back-hoa-don'])){
    header('Location:../admin/list-hoa-don.php');
  }
?>

<?php include('../admin/views/footer.php') ?>
