
		
		
<!DOCTYPE html>
<html>
<head>
	<title>Republika</title>
</head>
<body bgcolor="pink">
        <?=validation_errors()?>
		<?=$this->session->flashdata('error')?>
	<center>
		
		<h3>Form login</h3>
	</center>
	<form action="<?php echo base_url(). 'login/index'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>	
	<center><a href="<?php echo base_url('regis/member');?>"><button class="btn btn-danger">Register</button></a></center>
</body>
</html>

		  