<?php include('../admin/views/header.php') ?>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Quản trị
            <small>| Thêm mới sản phẩm</small>
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
                  <h3 class="box-title">Thêm mới sản phẩm</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form" action="" method="post" enctype='multipart/form-data'>
                    <!-- text input -->
                    <div class="form-group">
                      <label><i class="fa fa-star"></i> Tiêu đề sản phẩm</label>
                      <input name="TenSp" type="text" class="form-control" placeholder="Nhập tiêu đề ..." required/>
                    </div>
                    
                    <!-- Mô tả ngắn -->
                    <div class="form-group">
                      <label><i class="fa fa-edit"></i> Mô tả ngắn</label>
                      <textarea name="MoTa" type="textarea" class="form-control" placeholder="Nhập mô tả ngắn ..." required ></textarea>
                    </div>
                    
                    <!-- Giá -->
                    <div class="form-group">
                      <label><i class="fa fa-usd"></i> Giá sản phẩm (Đơn vị: Vnđ)</label>
                      <input name="DonGia" type="textarea" class="form-control" placeholder="Nhập giá sản phẩm (Vnđ)" required/>
                    </div>

                    <!-- Ảnh sản phẩm -->
                    <div class="form-group">
                      <label><i class="fa fa-image"></i> Ảnh sản phẩm</label>
                      <input type='file' name='img[]' />
                    </div>
                    
                    <!-- select -->
                    <div class="form-group">
                      <label><i class="fa fa-ticket"></i> Thể loại sản phẩm</label>
                      <select name="loaisanpham_MaTheLoai" class="form-control" required >
                        <option selected="" disabled>Chọn danh mục</option>
                        <?php 
                        $query = mysql_query("select * from loaisanpham",$connect);
                        while($row = mysql_fetch_array($query)){ ?>
                          <option value="<?php echo $row['MaTheLoai'] ?>"><?php echo $row['TenTheLoai'] ?></option>
                        <?php }
                        ?>
                      </select>
                    </div>


                    <div class="box-footer">
                    <button name="submit" type="submit" class="btn btn-primary btn-lg"><i class="fa fa-check"></i> Thêm sản phẩm</button>
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
  $TenSp = $_POST['TenSp'];
  $MoTa = $_POST['MoTa'];
  $DonGia = $_POST['DonGia'];
  $loaisanpham_MaTheLoai = $_POST['loaisanpham_MaTheLoai'];

  // Hình ảnh sản phẩm
    for($i=0;$i<count($_FILES['img']['name']);$i++)
  {
  move_uploaded_file($_FILES['img']['tmp_name'][$i],"../upload/images/".$_FILES['img']['name'][$i]);
  $url_img="./upload/images/".$_FILES['img']['name'][$i];
  $name=$_FILES['img']['name'][$i];
  }
  mysql_query("SET NAMES 'utf8'");
  mysql_query("INSERT INTO sanpham (TenSp,MoTa,DonGia,url_img,loaisanpham_MaTheLoai) VALUES(n'$TenSp',n'$MoTa',n'$DonGia',n'$url_img',n'$loaisanpham_MaTheLoai')",$connect);
  header("Location:../admin/administrator.php");
  }
?>

<?php include('../admin/views/footer.php') ?>
