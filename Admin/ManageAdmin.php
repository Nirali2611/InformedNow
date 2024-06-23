<?php
include("Header.php");
$query = "SELECT * FROM admin";
$res = mysqli_query($c->con,$query);
?>  
  <h3>List - All Admin</h3>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">Mobile_No</th>
      <th scope="col">email_id</th>
	  <th scope="col">password</th>
	  <th scope="col">address</th>
	  <th scope="col">city</th>
	  <th scope="col">photo</th>
      <th scope="col">Last Login</th>

    </tr>
  </thead>
  <tbody>	
		<?php
		while($data =mysqli_fetch_array($res))
		{
			if($_SESSION['AdminData']['email_id']== $data[3])
			{
				echo " <tr>
					<th>$data[0]</th>
					<td>$data[1]</td>
					<td>$data[2]</td>
					<td>$data[3]</td>
					<td>$data[4]</td>
					<td>$data[5]</td>
					<td>$data[6]</td>	
					<td><img src='../public/img/$data[7]' height=50 width=50></td>
					<td>$data[8]</td>
					</tr>";
			}
			else
			{
				echo " <tr>
					<th>$data[0]</th>
					<td>$data[1]</td>
					<td>$data[2]</td>
					<td>$data[3]</td>
					<td>******</td>
					<td>$data[5]</td>
					<td>$data[6]</td>	
					<td><img src='../public/img/$data[7]' height=50 width=50></td>
					<td>$data[8]</td>
					</tr>";
			}
				
		
		}
		?>	
  </tbody>
</table>

<?php
include("Footer.php");
?>  