<?php include "header.php"; ?>
<?php $user_id = $_SESSION['id']; ?>

<!-- work details section -->
<section id="work-detail" class="section work-detail">
  <?php 
    if(isset($_GET['userid'])){$user = $_GET['userid'];}
    else {header('Location: blog.php');}

    $result_usr = $conn->query("SELECT * FROM u_info WHERE id='$user'");
      while($row_usr = $result_usr->fetch_assoc()) { ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 work-detail-margin detail-contentbox">
            <?php
              echo "<h3 class='text-capitalize'><b>User Name: </b>".$row_usr["u_first"]." ".$row_usr["u_last"];
              echo "<br/> <b>Email: </b>".$row_usr["u_email"];
              echo "<br/> <b>Gender: </b>".$row_usr["u_gnd"];
              echo "<br/> <b>Mobile Number: </b>".$row_usr["u_mob"];
              echo "<br/> <b>Organization Type: </b>".$row_usr["u_comp"]."</h3>";
            ?>
          </div>
        </div>
      </div>
      <hr style="border-color: black;">
    <?php } ?>
  <?php 
    $result = $conn->query("SELECT * FROM blog WHERE u_id='$user' and stats=1");
      while($row = $result->fetch_assoc()) { ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 work-detail-margin detail-image">
            <div class="work-image">
              <a href="blog-single.php<?php if (isset($row["id"])) { ?>?id=<?php echo $row["id"]; } ?>" class="portfolio-link">
                <?php if (isset($row["url"])) { ?>
                  <p>
                    <img src="upload/<?php echo $row["url"]; ?>" style="width:100%;" alt="<?php echo $row["title"]; ?>"> 
                  </p>
                <?php } ?>
              </a>
            </div>
          </div>
          <div class="col-md-8 work-detail-margin detail-contentbox">
            <div class="detail-content">
              <a href="blog-single.php<?php if (isset($row["id"])) { ?>?id=<?php echo $row["id"]; } ?>" class="portfolio-link"><?php if (isset($row["title"])) { ?><h4><?php echo $row["title"]; ?></h4><?php } ?></a>
              <?php if (isset($row["desc"])) { ?> <?php echo $row["desc"]; ?> <?php } ?>
<!--              <a class="btn" href="#">Visit Site <i class="fa fa-long-arrow-right"></i></a> </div>  -->
          </div>
        </div>
      </div>
    <?php } ?>
  </section>
<!-- work details section --> 
<?php 
if($_GET['userid'] == $_SESSION['id']){
?>
	
<section id="work-detail" class="section work-detail">

	<div>
		<h2>Update Financial Credit</h2>
	</div>
	<div class="col-md-6">
		<form action="template-part/process_finance.php" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2" for="url">Amount in TK:</label>
				<div class="col-sm-10">
					<code>Current finantial state: 
					<?php 
						$result_usr = $conn->query("SELECT * FROM u_info WHERE id='$user_id'");
						while($row_usr = $result_usr->fetch_assoc()) {
							echo $row_usr['u_finance'];
						}
					?>TK
					</code><br/>
					<input type="number" placeholder="Enter amount" name="finance" />
					<input type="submit" name="update_credit" />
				</div>
			</div>
		</form>
	</div>

</section>
	
<?php 
}
?>

<br/>
<?php include "footer.php"; ?>
