<?php 
include "header.php";
include "template-part/config.php";
$user = $_SESSION['id'];
$result_usr = $conn->query("SELECT * FROM u_info WHERE id='$user'");
?>

<div class="container section login">
<div class="col-md-8 col-md-offset-2">
  <h2 class="text-center">Insert Property Information form</h2>
  <form class="form-horizontal" method="post" action="template-part/insblog.php" enctype="multipart/form-data" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="title">The Title:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="title" placeholder="Enter Title" name="u_title">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="loaction">The Location/Address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="loaction" placeholder="Enter loaction" name="u_loc">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="size">Property size (square feet):</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="size" placeholder="Enter size" name="u_size">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="desc">The Description:</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="desc" name="u_desc" > </textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="url">The URL:</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" name="u_image">
        <input type="hidden" name="size" value="100000" >
      </div>
    </div>
    <input type="hidden" class="form-control" id="id" name="id"     value="<?php if (isset($_SESSION["id"]     ))  { echo $_SESSION["id"];    } ?>">
    <div class="form-group">        
		<div class="col-md-12 col-sm-12">
			<?php 
			while($row_usr = $result_usr->fetch_assoc()) {
			if($row_usr['u_finance'] >= 500){
			?>
				<code class="text-right" style="display: block;">Publishing this ADD will cost you (500tk) are you sure you want to publish this ADD</code>
				<button type="submit" class="btn btn-default pull-right">Submit</button>
			<?php }else{ ?>
				<code class="text-right" style="display: block;">You Dont have enough fund to publish this post. The Minimum charge is 500tk.</code>
				<a href="user-single.php?userid=<?php echo $_SESSION["id"]; ?>" class="btn btn-default pull-right">Update financial credit</a>
			<?php } ?>
		<?php } ?>
		</div>
    </div>
  </form>
</div>
</div>

<?php include "footer.php" ?>