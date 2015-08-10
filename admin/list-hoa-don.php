<?php include('../admin/views/header.php') ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Quản trị
            <small>| Mai Công Ngoãn</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Quản trị</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Danh sách hóa đơn</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Mã HĐ</th>
                        <th>Số tiền <small>(VNĐ)</small></th>
                        <th>Ngày lập HĐ</th>
                        <th>Ghi chú</th>
                        <th>Mã khách hàng</th>
                        <th>Tình trạng</th>
                        <th>Chức năng</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php include('../admin/views/list-hoa-don-admin.php') ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php include('../admin/views/footer.php') ?>