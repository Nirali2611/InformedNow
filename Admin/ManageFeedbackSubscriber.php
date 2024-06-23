<?php
include("Header.php");
$query = "SELECT * FROM feedback";
$res = mysqli_query($c->con,$query);
?>  
  <h3>List - All User</h3>
  <table class="table table-striped">
  <thead>
    <tr>
	
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email Id</th>
	  <th scope="col">Meassage</th>
     
 
    </tr>
  </thead>
  <tbody>	
		<?php
		while($data = mysqli_fetch_array($res))
		{
			echo " <tr>
			<th>$data[0]</th>
			<td>$data[1]</td>
			<td>$data[2]</td>
			<td>$data[3]</td>
			
			</tr>";
		}
		?>	
  </tbody>
</table>

<?php
include("Footer.php");
?>  