<div class="grid">
<div class="col_9">

<h1>Contact Us For More Details</h1>
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
				<form action="<? echo $_SERVER['PHP_SELF'];?>" method="POST">

	<tr>
		<td>
<label>			Name:* </label>
	
		<br />
			<input type="text" name="name" size="30" value="<?php echo $_POST['name'];?>">
		</td>
	<!--
</tr>
	
	<tr>
-->
		<td class="floatr">
		<label>	E-mail address:* </label>
		<br />
			<input type="text" name="email" size="30" value="<?php echo $_POST['email'];?>">
		</td>
	</tr>
	<!--
<tr>
		<td>
			Phone Number: 
		<br />
			<input type="text" name="phone" size="30" value="<?php echo $_POST['phone'];?>">
		</td>
	</tr>
	<tr>
		<td>
			Country: 
	<br />
			<input type="text" name="country" size="30" value="<?php echo $_POST['country'];?>">
		</td>
	</tr>
	-->

	<tr>
		<td valign="top" colspan="2"> 
<label>			Subject: </label>
<br />			<input type="text" name="subject" size="30" value="<?php echo $_POST['subject'];?>">
		</td>
	</tr>
	<tr> 
		<td valign="top" colspan="2"> 
			<label>Comments*</label>	
			<br />
			<textarea name="comments" rows="13" cols="40"><?php echo $_POST['comments'];?></textarea>
			</td>
		</td>
	</tr>
	<tr>
		<td>
		
			<input type="submit" value="Submit">
		</td>
	</tr>
					</form>

	</table>

</p>
</div>
</div>