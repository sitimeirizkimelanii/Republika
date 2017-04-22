
		
		
<!DOCTYPE html>
<html>
<head>
	<title>Republika</title>
</head>
<body bgcolor="pink">
        <?=validation_errors()?>
		<?=$this->session->flashdata('error')?>
	<center>
		
		<h3>Form Register</h3>
	</center>
	<form action="<?php echo base_url(). 'regis'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			
			<tr>
				<td>Group
				<select name="group">
                <option>--Pilih--
                <option value="2">Member            
              </select></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Register"></td>
			</tr>
		</table>
	</form>	
	<center><a href="<?php echo base_url('login/index');?>"><button class="btn btn-danger">Login</button></a></center>
</body>
</html>

		  