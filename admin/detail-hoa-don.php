<?php include('../admin/views/header.php') ?>

<?php 
  if(isset($_GET['hoadonchitiet_MaHD'])){
    $hoadonchitiet_MaHD = $_GET['hoadonchitiet_MaHD'];
    $queryselect = mysql_query("
SELECT `hoadon`.*, `hoadonchitiet`.*, `khachhang`.*, `sanpham`.*
FROM `khachhang`, `hoadon`, `hoadonchitiet`, `sanpham`
WHERE hoadonchitiet.hoadon_MaHD = hoadon.MaHD and hoadon.khachhang_MaKH = khachhang.MaKH and hoadonchitiet.sanpham_MaSp = sanpham.MaSp and hoadonchitiet.MaHD = $hoadonchitiet_MaHD
",$connect);
  $row = mysql_fetch_array($queryselect);
  }
?>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Quản trị
            <small>| Chi tiết hóa đơn</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Chi tiết hóa đơn</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <img alt="" src="../image/youlooklogo.png">
                <small class="pull-right">Công ty TNHH YouLook Shopping</small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              Người gửi
              <address>
                <strong>YouLook Shopping</strong><br>
                08 Nguyễn Trung Trực<br>
                Sơn Trà, Đà Nẵng<br>
                Phone: (932) 414.091<br/>
                Email: ngoanmcpd00865@fpt.edu.vn
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              Người nhận
              <address>
                <strong><?php echo $row['HoTenKH'] ?></strong><br>
                <?php echo $row['DiaChi'] ?><br>
                Phone: <?php echo $row['SoDT'] ?><br/>
                Email: <?php echo $row['Email'] ?>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Mã đặt hàng #<?php echo $row['MaHD'] ?></b><br/>
              <br/>
              <b>Mã hóa đơn:</b> <?php echo $row['hoadon_MaHD'] ?><br/>
              <b>Ngày đặt hàng:</b> <?php echo $row['NgayLapHD'] ?><br/>
              <b>Mã khách hàng:</b> <?php echo $row['khachhang_MaKH'] ?>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Số lượng</th>
                    <th>Mã Sp</th>
                    <th>Tên Sp</th>
                    <th>Đơn giá <small>(VNĐ)</small></th>
                    <th>Mô tả</th>
                    <th>Tổng tiền <small>(VNĐ)</small></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>( <?php echo $row['SoLuong'] ?> )</td>
                    <td><?php echo $row['MaSp'] ?></td>
                    <td><?php echo $row['TenSp'] ?></td>
                    <td><?php echo number_format($row['DonGia'],0, '.', '.') ?></td>
                    <td><?php echo $row['MoTa'] ?></td>
                    <td>
                      <?php echo number_format(($row['SoLuong']*$row['DonGia']),0, '.', '.'); ?>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="../admin/list-hoa-don.php" class="btn btn-warning"><i class="fa fa-reply "></i> Trở về</a>
              <a href="" class="btn btn-default"><i class="fa fa-print"></i> In hóa đơn</a>
              <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Check thanh toán</button>
              <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Tải PDF</button>
            </div>
          </div>
        </section><!-- /.content -->
        <div class="clearfix"></div>
      </div><!-- /.content-wrapper -->
<?php include('../admin/views/footer.php') ?>