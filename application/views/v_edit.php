<!DOCTYPE html>
<html>
<head>
	<title>Republika </title>
</head>
<body bgcolor="pink">
	<center>
		
		<h3>Edit Berita</h3>
	</center>
	<form action="<?php echo base_url(). 'admin/edit_aksi/' . $news[0]->id; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td colspan="2">Berita id ke-<?= $news[0]->id ?></td>
			</tr>
			<tr>
				<td>Title</td>
				<td><input type="text" name="title" value="<?= $news[0]->title ?>"></td>
			</tr>
			<tr>
				<td>Content</td>
				<td><input type="text" name="content" value="<?= $news[0]->content ?>"></td>
			</tr>
			<tr>
				<td>Category</td>
				<td><input type="text" name="category" value="<?= $news[0]->category ?>"></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="text" name="image" value="<?= $news[0]->image ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Edit"></td>
			</tr>
		</table>
	</form>	
</body>
</html>