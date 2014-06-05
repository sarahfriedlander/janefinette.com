<p>
Please complete the form below if you would like to request more information.
</p>
<table border="0">
<tr>
<td colspan="2">
	<?php
		echo $errorMessage;
	?>
	</td>
	</tr>
	<tr>
		<td>
			<form action="<? echo $_SERVER['PHP_SELF'];?>" method="POST">
			Name:* 
	
		</td>
	
		<td>	
			<input type="text" name="name" size="30" value="<?php echo $_POST['name'];?>">
		</td>
	</tr>
	
	<tr>
		<td>
			E-mail address:* 
		</td>
		<td>
			<input type="text" name="email" size="30" value="<?php echo $_POST['email'];?>">
		</td>
	</tr>
	<tr>
		<td>
			Phone Number: 
			
		</td>
		<td>
			<input type="text" name="phone" size="30" value="<?php echo $_POST['phone'];?>">
		</td>
	</tr>
	<tr>
		<td>
			Country: 
		</td>
		<td>
			<input type="text" name="country" size="30" value="<?php echo $_POST['country'];?>">
		</td>
	</tr>
	
	<tr>
		<td>
			Subject: 
		</td>
		<td>
			<input type="text" name="subject" size="30" value="<?php echo $_POST['subject'];?>">
		</td>
	</tr>
	<tr> 
		<td valign="top"> 
			
			Comments*		
			</td>
			<td>
				<textarea name="comments" rows="13" cols="40"><?php echo $_POST['comments'];?></textarea>
			</td>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
		
			<input type="submit" value="Submit">
			</form>
		</td>
	</tr>
	</table>
</p>