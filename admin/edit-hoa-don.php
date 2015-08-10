<?php include('../admin/views/header.php') ?>

<?php 
  if(isset($_GET['MaHD'])){
  	$MaHD = $_GET['MaHD'];
  	$queryselect = mysql_query("
    SELECT *
    FROM hoadon 
    WHERE MaHD = $MaHD",$connect);
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
            <small>| Cập nhật hóa đơn</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Cập nhật hóa đơn</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Cập nhật hóa đơn: #<?php echo $row['MaHD'] ?></h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form" action="" method="post" enctype='multipart/form-data'>
                    <!-- text input -->
                    <div class="form-group">
                      <label><i class="fa fa-star"></i> Tình trạng thanh toán</label>
                    </div>
                    <?php 
                      if (($row['TinhTrang']) == 1) { ?>
                        <div class="radio disabled">
                          <label><input type="radio" name="TinhTrang" value="0" disabled>Chưa thanh toán</label> 
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="TinhTrang" value="1" 
                              <?php if(($row['TinhTrang']) == 1)
                              {echo 'checked=checked';}
                              ?> 
                              >Đã thanh toán</label>
                            </div>
                    <?php
                      }else { ?>

                    
                    <div class="radio">
                    <label><input type="radio" name="TinhTrang" value="0"
                      <?php if(($row['TinhTrang']) == 0)
                          {echo 'checked=checked';}
                        ?> 
                    >Chưa thanh toán</label> 
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="TinhTrang" value="1" 
                        <?php if(($row['TinhTrang']) == 1)
                          {echo 'checked=checked';}
                        ?> 
                      >Đã thanh toán</label>
                    </div>
                    <?php
                      }
                     ?>
                    <div class="box-footer">
                    <button name="update" type="submit" class="btn btn-primary btn-lg"><i class="fa fa-check"></i> Cập nhật</button>
                    <a href="../admin/list-hoa-don.php" class="btn btn-lg"><i class="fa fa-close"></i> Hủy</a>
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
    $TinhTrang = $_POST['TinhTrang'];
		mysql_query("UPDATE hoadon SET TinhTrang='$TinhTrang' WHERE MaHD=$MaHD",$connect);
		header("Location:../admin/list-hoa-don.php");	
	}
?>

<?php include('../admin/views/footer.php') ?>
