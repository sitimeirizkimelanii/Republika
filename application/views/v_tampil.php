<!DOCTYPE html>
<html>
<head>
	<title>Republika</title>
</head>
<body bgcolor="white">
	<h1>Daftar Berita</h1>
	<?php echo anchor(base_url('admin/tambah/'), 'Tambah');?>
	
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Content</th>
			<th>Category</th>
			<th>Image</th>
		</tr>
		<?php foreach($news as $n){ ?>
		<tr>
			<td><?php echo $n->id ?></td>
			<td><?php echo $n->title ?></td>
			<td><?php echo $n->content ?></td>	
			<td><?php echo $n->category ?></td>
			<td><?php echo $n->image ?></td>		
				<td><?php echo anchor('admin/edit/'.$n->id,'Edit'); ?>	</td>	
				<td><?php echo anchor('admin/hapus/'.$n->id,'Hapus'); ?>	</td>			
		</tr>
		
				
				
			
		<?php } ?>
	</table>
</body>
</html>