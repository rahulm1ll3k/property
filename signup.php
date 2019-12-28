<?php 
include "header.php" 







?>


<div class="container section signup">
<div class="col-md-6 col-md-offset-3">
  <h2 class="text-center">Sign Up form</h2>
  <form class="form-horizontal" method="post" action="template-part/signup.php">

    <div class="form-group">
      <label class="control-label col-sm-2" for="first">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="first" placeholder="First Name" name="first">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="last">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="last" placeholder="Last Name" name="last">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        <?php if(isset($_GET["userexists"])){ ?><p style="color: red; "> Email already Exists</p> <?php } ?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="gender">User Gender:</label>
      <div class="col-sm-10">
        <input type="radio" class="" value="1" id="gender" placeholder="Gender Name" name="gender">Male <br/>
        <input type="radio" class="" value="2" id="gender" placeholder="Gender Name" name="gender">Female
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone Number:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" placeholder="Enter Contact" name="phone">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="organization">Organization:</label>
      <div class="col-sm-10">
        <select class="form-control" id="organization" name="organization">
          <option value="private" >Private</option>
          <option value="govment" >Govment</option>
          <option value="developers" >Developers</option>
          <option value="private-organization" >Private Organization</option>
          <option value="private-none" >None</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="amount">Your Financial Condition:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="amount" placeholder="Enter ammount" name="finance" required="required">
		<code>Please insert the amount in TK.</code>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <a href="login.php">Log in</a> <a href="#">/</a> <a href="signup.php">Sign Up</a>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>


<?php include "footer.php" ?>