<!DOCTYPE html>
<html>
<head>
	<title>Republika</title>
</head>
<body bgcolor="white">
<?php $this->load->view('header') ?>
	<h1>Daftar Berita</h1>
	
		
		<?php foreach($news as $n){ ?>
		<td><?php echo $n->category ?></td>
		<?=img([
        'src'   => 'image/' . $n->image,
        'style'   => 'max-width: 200%; max-height:200%; height:200px'
        
        ])?><br>
			
			<td><?php echo $n->title ?></td><br>
			<td><?php echo $n->content ?></td><br>	
					
		<?php } ?>
	
</body>
</html>