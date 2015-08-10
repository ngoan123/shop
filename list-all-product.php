<?php include('./admin/models/connectdb.php') ?>

<?php 
    $query = mysql_query("
        SELECT sanpham.* , loaisanpham.TenTheLoai
        FROM sanpham , loaisanpham 
        WHERE sanpham.loaisanpham_MaTheLoai = loaisanpham.MaTheLoai ORDER BY MaSP DESC",$connect);
    if(mysql_num_rows($query) == 0) {
        echo "Chưa có sản phẩm nào";
    }else{
        while($row = mysql_fetch_array($query)){ ?>

                <div class="col-md-4 wow fadeIn">
                    <div class="box-product text-center">
                        <a class="content-product" href="">
                            <img src="<?php echo $row['url_img'] ?>" alt="">
                            <h3><?php echo $row['TenSp'] ?></h3>
                            <p>Thể loại: <?php echo $row['TenTheLoai'] ?></p>
                            <div class="creadits-product"><span><?php echo number_format($row['DonGia'],0, '.', '.'); ?></span><span>(VNĐ)</span></div>
                            <span class="add-to-cart"><span></span></span>
                        </a>
                    </div>
                    <!-- End box-product -->
                </div>
        <?php 
    }
    }   ?>