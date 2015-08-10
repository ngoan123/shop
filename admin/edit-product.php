<?php include('../admin/views/header.php') ?>

<?php 
  if(isset($_GET['MaSp'])){
  	$MaSp = $_GET['MaSp'];
  	$queryselect = mysql_query("
    SELECT sanpham.* , loaisanpham.TenTheLoai
    FROM sanpham , loaisanpham 
    WHERE sanpham.loaisanpham_MaTheLoai = loaisanpham.MaTheLoai
    AND Masp = $MaSp",$connect);
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
            <small>| Cập nhật sản phẩm</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Cập nhật sản phẩm</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Cập nhật sản phẩm</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form" action="" method="post" enctype='multipart/form-data'>
                    <!-- text input -->
                    <div class="form-group">
                      <label><i class="fa fa-star"></i> Tiêu đề sản phẩm</label>
                      <input name="TenSp" type="text" class="form-control" value="<?php echo $row['TenSp'] ?>" placeholder="Nhập tiêu đề ..." required/>
                    </div>
                    
                    <!-- Mô tả ngắn -->
                    <div class="form-group">
                      <label><i class="fa fa-edit"></i> Mô tả ngắn</label>
                      <textarea name="MoTa" type="textarea" class="form-control" placeholder="Nhập mô tả ngắn ..." required ><?php echo $row['MoTa'] ?></textarea>
                    </div>
                    
                    <!-- Giá -->
                    <div class="form-group">
                      <label><i class="fa fa-usd"></i> Giá sản phẩm (Đơn vị: Vnđ)</label>
                      <input name="DonGia" type="textarea" class="form-control" value="<?php echo $row['DonGia'] ?>" placeholder="Nhập giá ... (Vd: nhập 100 = 100.000 Vnđ)" required/>
                    </div>

                     <!-- Ảnh sản phẩm -->
                    <div class="form-group">
                      <label><i class="fa fa-image"></i> Ảnh sản phẩm</label>
                     <img src=".<?php echo $row['url_img'] ?>" class="img-responsive" width="100px" alt="">
                    </div>

                    <!-- select -->
                    <div class="form-group">
                      <label><i class="fa fa-ticket"></i> Thể loại sản phẩm</label>
                      <select name="loaisanpham_MaTheLoai" class="form-control" required >
                        <option value="<?php echo $row['loaisanpham_MaTheLoai'] ?>" selected ><?php echo $row['TenTheLoai'] ?></option>
                        <?php 
                        $query = mysql_query("select * from loaisanpham",$connect);
                        while($row = mysql_fetch_array($query)){ ?>
                          <option value="<?php echo $row['MaTheLoai'] ?>"><?php echo $row['TenTheLoai'] ?></option>
                        <?php }
                        ?>
                      </select>
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
  $TenSp = $_POST['TenSp'];
  $MoTa = $_POST['MoTa'];
  $DonGia = $_POST['DonGia'];
  $loaisanpham_MaTheLoai = $_POST['loaisanpham_MaTheLoai'];
		mysql_query("UPDATE sanpham SET TenSp='$TenSp',MoTa='$MoTa',DonGia='$DonGia',loaisanpham_MaTheLoai='$loaisanpham_MaTheLoai' WHERE MaSp=$MaSp",$connect);
		header("Location:../admin/administrator.php");	
	}
?>

<?php include('../admin/views/footer.php') ?>
