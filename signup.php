<?php
 include 'headersin.php' ;
?>

</div>
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">sign Up</li>
    </ol>


	 <section class="banner_bottom1 py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="heading-agileinfo text-center">Sign <span>Up</span></h3>
			
		</div>
    
	</section>
  

<form class="p-3" action="" id="change" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label for="name" class="label">Name</label>
            <input type="text" class="form-control" placeholder="Joe Smith" name="name" required="">
          </div>

          <!-- <div class="form-group">
            <label for="name">Date of Birth</label>
            <input type="date" class="form-control" id="name" placeholder="Enter date" name="dob"required="">
          </div>

          <div class="form-group">
            <label for="name">Local Govt</label>
            <input type="text" class="form-control" id="name" name="lga" placeholder="enter local govt" required="">
          </div>

          <div class="form-group">
            <label for="name">Address</label>
            <input type="text" class="form-control" id="name" name="addr" placeholder="enter current Address" >
          </div> -->

          <!-- <div class="form-group" id="otherFieldDiv">
            <label for="otherField">What Kind of Student?</label>
            <select class="form-control" id="otherField" name="kind"> 
              <option name="kind">Jupeb</option>
              <option name="kind">Under Graduate</option>
              <option name="kind">Post Graduate</option>
              <option name="kind">PhD</option>
              <option name="kind">others</option>
            </select>
          </div> -->

          <!-- <div class="form-group" id="otherFieldDiv">
            <label for="otherField">Year of Entry</label>
            <select class="form-control" id="otherField" name="year">
              <option name="year">2022</option>
              <option name="year">2023</option>
              <option name="year">2024</option>
              <option name="year">2025</option>
              <option name="year">2026</option>
            </select>
          </div> -->

          <!-- <div class="form-group" id="Div2">
            <label for="otherField">What's your entry level?</label>
            <select class="form-control" id="otherField" name="level" required=""> 
              <option name="level">100 level</option>
              <option name="level">200 level</option>
              <option name="level">others</option>
            </select>
          </div> -->
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

          
          
          <!-- <div class="form-group">
            <label for="seeAnotherFieldGroup">Do you have a Sponsor?</label>
            <select class="form-control" id="seeAnotherFieldGroup">
                  <option value="no">Not Particularly.</option>
                  <option value="yes">I Guess!</option>
            </select>
          </div> -->
          
          <!-- <div class="form-group" id="otherFieldGroupDiv">
            <div class="row">
              <div class="col-6">
                    <label for="otherField1">Sponsors Name</label>
                    <input type="text" class="form-control w-100" id="otherField1" name="spname" Placeholder="Enter sponsors fullname">
              </div>
              <div class="col-6">
                <label for="otherField2">Sponsors Phone</label>
                <input type="text" class="form-control w-100" id="otherField2" name="sphone" Placeholder="Enter sponsors number"> 
              </div>
             <div class="col-6">
                <label for="otherField2">Sponsors Address</label>
                <input type="text" class="form-control w-100" id="otherField2" name="spaddr" Placeholder="Enter sponsors addr"> 
              </div>
              <div class="col-6">
                <label for="otherField2">Sponsors Email</label>
                <input type="text" class="form-control w-100" id="otherField2" name="spmail" Placeholder="Enter sponsors Email"> 
              </div> 

            </div>
          </div> -->
          
          <div class="form-group">
                <label for="comments">Password</label>
                <input type="password" class="form-control" id="name" name="passwors" placeholder="Enter password" required="">
              
        </div>

        <div class="form-group">
                                    <div class="fileUpload btn btn-primary btn-lg btn-block fake-shadow">
                                        <span><i class="my-2"></i> Upload passport</span>
                                        <input id="logo-id" type="file" name="image" class="attachment_upload">
                                    </div>
        </div>
            <button class="btn btn-primary" type="submit">Submit</button>
            <br/>
            <br/>
            <ul class="form-group">
              <li class="new_left"><p><a href="login.php" style="color:#28a745;">Already have an Account ?</a>  Proceed to  <a href="login.php" style="color:#28a745;"> Login</a></p></li>
              <div class="clearfix"></div>
          </ul>

</form>

<?php
 include 'footer.php' ; 
?>