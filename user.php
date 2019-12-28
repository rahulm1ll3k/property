<?php include "header.php"; ?>

<!-- work details section -->
<section id="work-detail" class="section work-detail">
  <div class="container-fluid">
    <div class="row">
      <?php 
        $result_usr = $conn->query("SELECT * FROM u_info");
          while($row_usr = $result_usr->fetch_assoc()) { ?>
            <div class="col-md-4 work-detail-margin detail-contentbox">
              <?php
                echo "<h3><b>User Name: </b>". "<a href='user-single.php?userid=". $row_usr["id"] ."'>" .$row_usr["u_first"]." ".$row_usr["u_last"]. "</a>" ."</h3>";
                echo "<h3><b>Email: </b>".$row_usr["u_email"]."</h3>";
				  echo "<h3><b>Gender: </b>";
					if($row_usr["u_gnd"]== 1){echo "Male";}else{echo "Female";}
				  echo "</h3>";
                echo "<h3><b>Mobile Number: </b>".$row_usr["u_mob"]."</h3>";
                echo "<h3><b>Organization Type: </b>".$row_usr["u_comp"]."</h3>";
              ?>
            <hr style="border-color: black;">
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
<!-- work details section --> 

<br/>
<?php include "footer.php"; ?>
