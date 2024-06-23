<?php
include("Header.php");
$query = "SELECT * FROM advertisment";
$res = mysqli_query($c->con,$query);
?>  
  <h3>List - All advertisement</h3>
  <table class="table table-striped">
  <thead>
    <tr>
	
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">type</th>
      <th scope="col">Description</th>
	  <th scope="col">Photo</th>
      <th scope="col">video</th>
      <th scope="col">Start date</th>
      <th scope="col">End Date</th>
      <th scope="col">Companay Name</th>
      <th scope="col">City</th>
      <th scope="col">Membership Fees</th>

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
			<td><img src='../public/img/$data[4]' height=50 width=50></td>
			<td><a href='../public/file/$data[5]'>Download</a></td>
			<td>$data[6]</td>
			<td>$data[7]</td>
			<td>$data[8]</td>
			<td>$data[9]</td>
			<td>$data[10]</td>

			</tr>";
		}
		?>	
  </tbody>
</table>

<?php
include("Footer.php");
?>  