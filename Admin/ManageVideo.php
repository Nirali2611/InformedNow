<?php
include("Header.php");
$query = "SELECT * FROM videoes";
$res = mysqli_query($c->con,$query);
?>  
  <h3>List - All Video</h3>
  <table class="table table-striped">
  <thead>
    <tr>
	
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">type</th>
      <th scope="col">video</th>
      <th scope="col">categores</th>
	  <th scope="col">Date</th>
      

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
			<td>$data[4]</td>
			<td>$data[5]</td>
			
			</tr>";
		}
		?>	
  </tbody>
</table>

<?php
include("Footer.php");
?>  