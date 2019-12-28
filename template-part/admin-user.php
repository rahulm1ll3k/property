
<!-- work details section -->
<section id="work-detail" class="section work-detail">
  <table class="table">
    <h3 class="text-center text-uppercase"> All Users </h3>
    <thead>
      <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Mobile Number</th>
        <th>User Type</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $result_usr = $conn->query("SELECT * FROM u_info");
          while($row_usr = $result_usr->fetch_assoc()) { ?>
            <tr>
                <td><?php  echo $row_usr["id"]; ?></td>
                <td><?php  echo $row_usr["u_first"]; ?></td>
                <td><?php  echo $row_usr["u_last"]; ?></td>
                <td><?php  echo $row_usr["u_email"]; ?></td>
                <td><?php  if($row_usr["u_gnd"] == 1){ echo "Male"; }else{ echo "Female"; } ?></td>
                <td><?php  echo $row_usr["u_mob"]; ?></td>
                <td><?php  echo $row_usr["u_comp"]; ?></td>
              </tr>
                <?php //  echo "<a href='user-single.php?userid=". $row_usr["id"] ."'></a>";  ?>
      <?php } ?>
    </tbody>
  </table>
</section>
<!-- work details section --> 




