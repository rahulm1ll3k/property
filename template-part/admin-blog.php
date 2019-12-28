<!-- work details section -->
<section id="work-detail" class="section work-detail">
  <table class="table">
    <h3 class="text-center text-uppercase"> All Blogs </h3>
    <thead>
      <tr>
        <th>Thumbnail Url</th>
        <th>Id</th>
        <th>Posted By</th>
        <th>Title</th>
        <th>Address/Location</th>
        <th>Size</th>
        <th>Description</th>
        <th>Status</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $result = $conn->query("SELECT * FROM blog");
			while($row = $result->fetch_assoc()) { 
			?>
				<tr>
					<td><img class="img-responsive" style="width: 100px; " src="upload/<?php  echo $row["url"]; ?>"></td>
					<td><?php  echo $row["id"]; ?></td>
					<td><?php  echo $row["u_id"]; ?></td>
					<td><?php  echo $row["title"]; ?></td>
					<td><?php  echo $row["desc"]; ?></td>
					<td><?php  echo $row["size"]; ?></td>
					<td><?php  echo $row["location"]; ?></td>
					<td><?php  if($row["stats"] == '1'){
						
							echo "<a href='template-part/process_blog.php?update=2&&blogid=".$row['id']."' class='btn btn-danger'>Hide it";
						
						}else{
							
							echo "<a href='template-part/process_blog.php?update=1&&blogid=".$row['id']."' class='btn btn-danger'>Show it";

							} ?></a></td>
					<td><a href="template-part/process_blog.php?delete=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></td>
				</tr>
			<?php //  echo "<a href='user-single.php?userid=". $row["id"] ."'></a>";
			} ?>
    </tbody>
  </table>
</section>
<!-- work details section --> 



