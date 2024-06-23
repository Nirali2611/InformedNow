<form action=" " method="post">
		<table border=1 align=center cellspacing=0 cellpadding=10>
		<tr>
				<td align=right ><b>Current Password</b></td><br>
				 <td><input  type="password" name="current password" placeholder="Enter current password"></td>
		</tr>
		<tr>
				<td align=right ><b>New Password</b></td><br>
				<td><input type="password" name="new password" placeholder="Enter new password"></td>	
		</tr>
		<tr>
			<td align=right ><b>Conform Password</b></td><br>
				<td><input type="password" name="conform password" placeholder="Enter conform password"></td>
		</tr>
		<tr>
				<td align=center colspan=2><input type="submit"  name="submit" value="submit" plceholder="submit form"></td>			
				
		</tr>
		
		</table>
</form>
<?php
if(isset($_POST['login']))
{
	echo $_POST['current password'];
	echo $_POST['new password'];
	echo $_POST['conform password'];
	
}
 ?>