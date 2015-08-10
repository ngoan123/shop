<?php 
	$query = mysql_query("SELECT khachhang.* FROM khachhang",$connect);
	if(mysql_num_rows($query) == 0) {
		echo "Chưa có khách hàng nào";
	}else{
		while($row = mysql_fetch_array($query)){ ?>
		 <tr>
		    <td><?php echo ($row['MaKH']); ?></td>
		    <td><?php echo ($row['HoTenKH']); ?></td>
		    <td><?php echo ($row['DiaChi']); ?></td>
		    <td><?php echo ($row['Email']); ?></td>
		    <td><?php echo ($row['SoDT']); ?></td>
		    <td>
		    <a title="Sửa" href="../admin/edit-khach-hang.php?MaKH=<?php echo ($row['MaKH']) ?>"><i class="fa fa-edit"></i> Sửa</a>
		    <span style="padding:0 5px"></span>
			<a title="Xóa" href="../admin/del-khach-hang.php?MaKH=<?php echo ($row['MaKH']) ?>"><i class="fa fa-trash"></i> Xóa</a>
		    </td>
		</tr>
		<?php 
		}
	} 	?>
	