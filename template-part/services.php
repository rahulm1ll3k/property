<?php include "config.php"; ?>
<!-- services grid section -->
<section id="portfolio" class="section portfolio">
  <div class="container-fluid">
    <h2 class="text-center">---Services---</h2>
      <br/>
      <!--
    <div class="row">
      <div class="col-sm-6 portfolio-item"> <a href="blog.php" class="portfolio-link">
        <div class="caption">
          <div class="caption-content">
            <h3>The Shape of Design</h3>
            <h4>Branding/Graphic</h4>
          </div>
        </div>
        <img src="images/portfolio/work-7.jpg" class="img-responsive" alt=""> </a> 
      </div>
      <div class="col-sm-6 portfolio-item"> <a href="blog.php" class="portfolio-link">
        <div class="caption">
          <div class="caption-content">
            <h3>czarna kawka</h3>
            <h4>Branding</h4>
          </div>
        </div>
        <img src="images/portfolio/work-8.jpg" class="img-responsive" alt=""> </a> 
      </div>
      <div class="col-sm-4 portfolio-item"> <a href="blog.php" class="portfolio-link">
        <div class="caption">
          <div class="caption-content">
            <h3>czarna kawka</h3>
            <h4>Branding</h4>
          </div>
        </div>
        <img src="images/portfolio/work-9.jpg" class="img-responsive" alt=""> </a> 
      </div>
      <div class="col-sm-4 portfolio-item"> <a href="blog.php" class="portfolio-link">
        <div class="caption">
          <div class="caption-content">
            <h3>czarna kawka</h3>
            <h4>Branding</h4>
          </div>
        </div>
        <img src="images/portfolio/work-10.jpg" class="img-responsive" alt=""> </a> 
      </div>
      <div class="col-sm-4 portfolio-item"> <a href="blog.php" class="portfolio-link">
        <div class="caption">
          <div class="caption-content">
            <h3>czarna kawka</h3>
            <h4>Branding</h4>
          </div>
        </div>
        <img src="images/portfolio/work-11.jpg" class="img-responsive" alt=""> </a> 
      </div>
    -->

<?php 
$result = $conn->query("SELECT * FROM blog WHERE stats=1");
        $i = 1;
        while($row = array_reverse($result->fetch_assoc())) { ?>
            <div class="col-sm-4 portfolio-item"> <a href="blog-single.php<?php if (isset($row["id"])) { ?>?id=<?php echo $row["id"]; } ?>" class="portfolio-link">
              <div class="caption">
                <div class="caption-content">
                  <?php if (isset($row["title"])) { ?>   <h3>    <?php echo $row["title"]; ?>  </h3>                               <?php } ?>
                  <?php if (isset($row["desc"])) { ?>    <p>     <?php echo $row["desc"]; ?>   </p>                                <?php } ?>
                  <?php if (isset($row["u_id"])) { ?>    <p><i>  <?php echo $row["u_id"]; ?>   </i></p>                            <?php } ?>
                </div>
              </div>
              <?php if (isset($row["url"])) { ?>          <img src="upload/<?php echo $row["url"]; ?>" class="img-responsive" style="width:100%; height: 350px;" alt="<?php echo $row["title"]; ?>"> </a> <?php } ?>
            </div>
            <?php $i++; if($i === 7) { break; } ?>
<?php    } ?>
    </div>
  </div>
</section>
<!-- services grid section --> 
