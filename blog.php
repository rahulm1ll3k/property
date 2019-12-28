<?php include "header.php"; ?>

<!-- work details section -->
<section id="work-detail" class="section work-detail">
  <?php 
    $result = $conn->query("SELECT * FROM blog WHERE stats=1");
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

<br/>
<?php include "footer.php"; ?>
