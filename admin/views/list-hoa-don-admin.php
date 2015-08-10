<?php 
	$query = mysql_query("
		SELECT `hoadon`.*, `hoadonchitiet`.*, `sanpham`.*
		FROM  `hoadon`, `hoadonchitiet`, `sanpham`
		WHERE hoadonchitiet.hoadon_MaHD = hoadon.MaHD and hoadonchitiet.sanpham_MaSp = sanpham.MaSp
	",$connect);
	if(mysql_num_rows($query) == 0) {
		echo "Chưa có hóa đơn nào";
	}else{
		while($row = mysql_fetch_array($query)){ ?>
		 <tr>
		    <td><?php echo ($row['MaHD']); ?></td>
		    <td><?php echo number_format(($row['SoLuong']*$row['DonGia']),0, '.', '.'); ?></td>
		    <td><?php echo ($row['NgayLapHD']); ?></td>
		    <td><?php echo ($row['GhiChu']); ?></td>
		    <td><a href="../admin/detail-khach-hang.php?MaKH=<?php echo ($row['khachhang_MaKH']); ?>"><?php echo ($row['khachhang_MaKH']); ?></a></td>
		    <td>
		    	<?php 
		    		$tinhtrang = $row['TinhTrang'];
		    		if($tinhtrang == 1) {
		    			echo "<span style='color:green'><i class='fa fa-check-circle'></i> Đã thanh toán </span>";
		    		}
		    	?>
		    </td>
		    <td>
		    <a title="Chi tiết" href="../admin/detail-hoa-don.php?hoadonchitiet_MaHD=<?php echo ($row['MaHD']) ?>"><i class="fa fa-eye"></i> Chi tiết</a>
		    <span style="padding:0 5px"></span>
		    <a title="Sửa" href="../admin/edit-hoa-don.php?MaHD=<?php echo ($row['MaHD']) ?>"><i class="fa fa-edit"></i> Tình trạng</a>
		    <span style="padding:0 5px"></span>
			<a title="Xóa" href="../admin/del-hoa-don.php?MaHD=<?php echo ($row['MaHD']) ?>"><i class="fa fa-trash"></i> Xóa</a>
		    </td>
		</tr>
		<?php 
		}
	} 	?>
	