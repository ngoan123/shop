<?php include('../admin/views/header.php') ?>

<?php 
  if(isset($_GET['MaTheLoai'])){
  	$MaTheLoai = $_GET['MaTheLoai'];
  	$queryselect = mysql_query("
    SELECT *
    FROM loaisanpham 
    WHERE MaTheLoai = $MaTheLoai",$connect);
	$row = mysql_fetch_array($queryselect);
  }
?>

<!-- UPDATE baiviet SET `TIEU_DE`='Tiêu đề 1',`NOI_DUNG`='Nội dung',`DANH_MUC`='Plan Oil' WHERE ID=5 -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Quản trị
            <small>| Cập nhật thể loại</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Cập nhật thể loại</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Cập nhật thể loại</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form" action="" method="post" enctype='multipart/form-data'>
                    <!-- text input -->
                    <div class="form-group">
                      <label><i class="fa fa-star"></i> Tiêu đề thể loại</label>
                      <input name="TenTheLoai" type="text" class="form-control" value="<?php echo $row['TenTheLoai'] ?>" placeholder="Nhập tiêu đề ..." required/>
                    </div>
                    <div class="box-footer">
                    <button name="update" type="submit" class="btn btn-primary btn-lg"><i class="fa fa-check"></i> Cập nhật</button>
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
	if (isset($_POST['update'])) {
  $TenTheLoai = $_POST['TenTheLoai'];
		mysql_query("UPDATE loaisanpham SET TenTheLoai='$TenTheLoai' WHERE MaTheLoai=$MaTheLoai",$connect);
		header("Location:../admin/list-the-loai.php");	
	}
?>

<?php include('../admin/views/footer.php') ?>
