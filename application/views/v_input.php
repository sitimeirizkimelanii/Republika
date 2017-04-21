<!DOCTYPE html>
<html>
<head>
	<title>Republika</title>
</head>
<body bgcolor="pink">
	<center>
		
		<h3>Tambah Berita Baru</h3>
	</center>
	<form action="<?php echo base_url(). 'admin/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Title</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>Content</td>
				<td><textarea type="text" name="content"></textarea> </td>
				
			</tr>
			<tr>
				<td>Category</td>
				<td><input type="text" name="category"></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="text" name="image"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>