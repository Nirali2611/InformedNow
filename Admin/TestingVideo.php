<?php
include("Header.php");
$query = "SELECT * FROM news";
$res = mysqli_query($c->con,$query);
?>  
  <h3>List - All News</h3>
  <table class="table table-striped">
  <thead>
    <tr>
	
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">type</th>
      <th scope="col">Description</th>
	  <th scope="col">Photo</th>
      <th scope="col">video</th>
      <th scope="col">categores</th>
      <th scope="col">Country/State/City</th>
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
			<td><img src='../public/img/$data[5]' height=50 width=50></td>
			<td><a href='$data[4]'> Play</a></td>
			<td>$data[6]</td>
			<td>$data[7]</td>
			<td>$data[8]</td>
			
			</tr>";
		}
		?>	
  </tbody>
</table>
<a class="popup" href="#!" data-link="http://www.youtube.com/embed/fbVD32w1oTo?enablejsapi=1" data-title="How to install SASS">SASS</a>

<a class="popup" href="#!" data-link="http://www.youtube.com/embed/Q0HFBy2BtfA?enablejsapi=1" data-title="How to install Node.js">Node.js</a>


<div id="video-view">
</div>

<script>
$(".popup").click(function () {
    var $this = $(this);
    var $iframe = $("<iframe>").attr("src", $this.data("link")).css({"width": 400, "height": 300});
    var $title = $("<h1>").text($this.data("title"));
    $("#video-view").html($title).append($iframe);
    $iframe.wrap("<div class='class-video'>");
});
</script>
<br><br><br><br><br><br>
<?php

include("Footer.php");
?>  