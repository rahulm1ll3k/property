<?php 
include "header.php";

include "template-part/admin-user.php";

if(isset($_GET['sts'])){
	$stats = $_GET['sts'];
?>
<div class="alert alert-<?php echo $stats; ?> fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
	<?php if($stats === 'success'){ ?> 
    <strong>Success!</strong> The Details for blog has been deleted successfully.
	<?php }else{ ?>
    <strong>Error!</strong> A problem has been occurred while submitting your data.
	<?php } ?>
</div>
<?php
}
include "template-part/admin-blog.php";

include "footer.php"; ?>