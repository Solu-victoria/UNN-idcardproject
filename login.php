<?php
 include 'headersin.php' ;
?>

</div>
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Login</li>
    </ol>
	 <!-- //banner-text -->
	 <section class="banner_bottom1 py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="heading-agileinfo text-center">Log<span>in</span></h3>
			
		</div>
	</section>





  <form class="p-1" action="" id="change" method="post" enctype="multipart/form-data">

        
         
          <div class="form-group" id="">
<h6 style="color:red; margin-top:0px; margin-buttom:30px;">
        
        
  </h6>
            <label for="name">Registration Number/Staff Number</label>
            <input type="text" class="form-control" id="otherField" placeholder="Enter reg no/staff no" name="staffid"  required="">
          </div>

          
          <div class="form-group">
                <label for="comments">Password</label>
                <input type="password" class="form-control" id="name" placeholder="Enter password" name="passwors" required="">
              
        </div>
         <ul class="form-group">
              <li class="new_left"><p><a href="#" style="color:#28a745;">Forgot Password ?</a>  New here ? <a href="signup.php" style="color:#28a745;"> Sign Up</a></p></li>
              <div class="clearfix"></div>
          </ul>
            <button class="btn btn-primary" type="submit">Submit</button>

         

</form>
</br>
</br>

<?php
 include 'footer.php' ;
?>