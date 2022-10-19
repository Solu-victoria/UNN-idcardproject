
 @include ('headersin') ;


</div>
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">sign Up</li>
    </ol>


	 <section class="banner_bottom1 py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="heading-agileinfo text-center">Sign <span>Up</span></h3>
			
		</div>
    
	</section>
  

<form class="p-3" action="{{ route('register') }}" id="change" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label for="name" class="label">Name</label>
            <input type="text" class="form-control" placeholder="Joe Smith" name="name" required="">
          </div>

          <div class="form-group">
            <label for="name">Email</label>
            <input type="text" class="form-control"  placeholder="enter school mail" name="email" value="example@unn.edu.ng" required="">
          </div>

          <div class="form-group">
            <label for="name">Department</label>
            <input type="text" class="form-control"  placeholder="Enter Dept" name="dept" required="">
          </div>

          <div class="form-group">
            <label for="name">Faculty</label>
            <input type="text" class="form-control" name="faculty" placeholder="Enter faculty" required="">
          </div>

          <div class="form-group">
            <label for="name">Phone Number</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter phone number" required="">
          </div>

          <div class="form-group">
            <label for="seeAnotherField">Are you a student?</label>
            <select class="form-control" id="seeAnotherField" onChange="update();">
                  
                  
                  <option value="no" >No Way!</option>
                  <option value="yes" >Absolutely yes!</option>
                  
                  
            </select>
          </div>

          <div class="form-group" id="Div2">
            <label for="name">Registration Number</label>
            <input type="text" class="form-control"  placeholder="Enter reg no" name="regno" required="">
          </div>

          <div class="form-group" id="Div3">
            <label for="name">Staff Number</label>
            <input type="text" class="form-control" placeholder="Enter Staff numbers" name="staffid" required="">
          </div>
          <button class="btn btn-primary" type="submit">Submit</button>
            <br/>
            <br/>
            <ul class="form-group">
              <li class="new_left"><p><a href="{{ route('login') }}" style="color:#28a745;">Already have an Account ?</a>  Proceed to  <a href="login.php" style="color:#28a745;"> Login</a></p></li>
              <div class="clearfix"></div>
          </ul>
</form>

 @include ('footer'); 
