<?php include "header.php"; ?>

<!-- work details section -->
<section id="work-detail" class="section work-detail">
  <?php 
    if(isset($_GET['id'])){$post_id = $_GET['id'];}
    else {header('Location: blog.php');}
    $result = $conn->query("SELECT * FROM blog WHERE id='$post_id'");
      while($row = $result->fetch_assoc()) { ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 work-detail-margin detail-image">
            <div class="work-image">
              <?php if (isset($row["url"])) { ?><p> <img src="upload/<?php echo $row["url"]; ?>" style="width:100%;" alt="<?php echo $row["title"]; ?>"> </p><?php } ?>
            </div>
          </div>
          <div class="col-md-4 work-detail-margin detail-contentbox">
            <div class="detail-content">
              <?php if (isset($row["title"])) { ?><h4><?php echo $row["title"]; ?></h4><?php } ?>
              <?php if (isset($row["location"])) { ?><?php echo "<strong>Address/Location: </strong>". $row["location"]."<br/>"; ?><?php } ?>
              <?php if (isset($row["size"])) { ?><?php echo "<strong>Land/Flat size: </strong>". $row["size"]."<br/>"; ?><?php } ?>
              <?php if (isset($row["desc"])) { ?> <?php echo "<strong>Description: </strong>". $row["desc"]; ?> <?php } ?>
<!--              <a class="btn" href="#">Visit Site <i class="fa fa-long-arrow-right"></i></a> </div>  -->
              <hr style="border-color: black;">
              <?php
                $userid  = $row["u_id"];
                $result_usr = $conn->query("SELECT * FROM u_info WHERE id='$userid'");
                if ($result && mysqli_num_rows($result_usr) > 0)
                    {
                      while($row_usr = $result_usr->fetch_assoc()) {
                      echo "<h3><b>User Name: </b>". "<a href='user-single.php?userid=". $row_usr["id"] ."'>" .$row_usr["u_first"]." ".$row_usr["u_last"]. "</a>" ."</h3>";
                      echo "<h3><b>Email: </b>".$row_usr["u_email"]."</h3>";
                      echo "<h3><b>Gender: </b>";
						if($row_usr["u_gnd"]== 1){echo "Male";}else{echo "Female";}
					  echo "</h3>";
                      echo "<h3><b>Mobile Number: </b>".$row_usr["u_mob"]."</h3>";
                      echo "<h3><b>Organization Type: </b>".$row_usr["u_comp"]."</h3>";
                    }
                  }
                else
                  {
                      echo 'Username NOT Found';
                  }
              ?>
              <hr style="border-color: black;">
          </div>
        </div>
      </div>








    <?php } ?>
  </section>
<!-- work details section --> 

<br/>
<?php include "footer.php"; ?>
