<?php include('../admin/views/header.php') ?>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Quản trị
            <small>| Thêm mới thể loại</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Thêm mới</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Thêm mới thể loại</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form" action="" method="post" enctype='multipart/form-data'>
                    <!-- text input -->
                    <div class="form-group">
                      <label><i class="fa fa-star"></i> Tiêu đề thể loại</label>
                      <input name="TenTheLoai" type="text" class="form-control" placeholder="Nhập tiêu đề ..." required/>
                    </div>
                    <div class="box-footer">
                    <button name="submit" type="submit" class="btn btn-primary btn-lg"><i class="fa fa-check"></i> Thêm thể loại</button>
                    <button type="reset" class="btn btn-lg"><i class="fa fa-close"></i> Hủy</button>
                    </div>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php 
  if(isset($_POST['submit'])){
  $TenTheLoai = $_POST['TenTheLoai'];

  mysql_query("SET NAMES 'utf8'");
  mysql_query("INSERT INTO loaisanpham (TenTheLoai) VALUES(n'$TenTheLoai')",$connect);
  header("Location:../admin/list-the-loai.php");
  }
?>

<?php include('../admin/views/footer.php') ?>
