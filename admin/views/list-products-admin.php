<?php 
	$query = mysql_query("
		SELECT sanpham.* , loaisanpham.TenTheLoai
		FROM sanpham , loaisanpham 
		WHERE sanpham.loaisanpham_MaTheLoai = loaisanpham.MaTheLoai",$connect);
	if(mysql_num_rows($query) == 0) {
		echo "Chưa có bài viết";
	}else{
		while($row = mysql_fetch_array($query)){ ?>
		 <tr>
		    <td><?php echo ($row['MaSp']); ?></td>
		    <td><?php echo ucfirst($row['TenSp']); ?></td>
		    <td><?php echo ($row['MoTa']); ?></td>
		    <td><?php echo number_format($row['DonGia'],0, '.', '.'); ?></td>
		    <td><img src=".<?php echo ($row['url_img']); ?>" alt="" height="50" width="50"></td>
		    <td><?php echo ($row['TenTheLoai']); ?></td>
		    <td>
		    <a title="Sửa" href="../admin/edit-product.php?MaSp=<?php echo ($row['MaSp']) ?>"><i class="fa fa-edit"></i> Sửa</a>
		    <span style="padding:0 5px"></span>
			<a title="Xóa" href="../admin/del-product.php?MaSp=<?php echo ($row['MaSp']) ?>"><i class="fa fa-trash"></i> Xóa</a>
		    </td>
		</tr>
		<?php 
		}
	} 	?>
	