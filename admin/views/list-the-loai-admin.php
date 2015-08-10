<?php 
	$query = mysql_query("SELECT loaisanpham.* FROM loaisanpham",$connect);
	if(mysql_num_rows($query) == 0) {
		echo "Chưa có thể loại nào";
	}else{
		while($row = mysql_fetch_array($query)){ ?>
		 <tr>
		    <td><?php echo ($row['MaTheLoai']); ?></td>
		    <td><?php echo ($row['TenTheLoai']); ?></td>
		    <td>
		    <a title="Sửa" href="../admin/edit-the-loai.php?MaTheLoai=<?php echo ($row['MaTheLoai']) ?>"><i class="fa fa-edit"></i> Sửa</a>
		    <span style="padding:0 5px"></span>
			<a title="Xóa" href="../admin/del-the-loai.php?MaTheLoai=<?php echo ($row['MaTheLoai']) ?>"><i class="fa fa-trash"></i> Xóa</a>
		    </td>
		</tr>
		<?php 
		}
	} 	?>
	