
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
  
</div>
<form class="p-3" action="{{ route('register') }}" id="change" method="POST" enctype="multipart/form-data">
  @csrf
          <div class="form-group">
            <label for="name" class="label">Name</label>
            <input type="text" class="form-control" placeholder="Joe Smith" name="name" required="">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
          </div>

          <div class="form-group">
            <label for="name">Email</label>
            <input type="text" class="form-control"  placeholder="enter school mail" name="email" value="example@unn.edu.ng" required="">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>

          <div class="form-group">
            <label for="name">Department</label>
            <input type="text" class="form-control"  placeholder="Enter Dept" name="department" required="">
            <x-input-error :messages="$errors->get('department')" class="mt-2" />
          </div>

          <div class="form-group">
            <label for="name">Faculty</label>
            <input type="text" class="form-control" name="faculty" placeholder="Enter faculty" required="">
            <x-input-error :messages="$errors->get('faculty')" class="mt-2" />
          </div>

          <div class="form-group">
            <label for="name">Phone Number</label>
            <input type="text" class="form-control" name="phone_no" placeholder="Enter phone number" required="">
            <x-input-error :messages="$errors->get('phone_no')" class="mt-2" />
          </div>

          <div class="form-group">
            <label for="seeAnotherField">Are you a student?</label>
            <select class="form-control" id="seeAnotherField" onChange="update()" name="usertype">
            <x-input-error :messages="$errors->get('usertype')" class="mt-2" required/>
                  
                  
                  <option value="staff" >No Way!</option>
                  <option value="student" >Absolutely yes!</option>
                  
                  
            </select>
          </div>

          <div class="form-group" id="Div2">
            <label for="name">Registration Number</label>
            <input type="text" class="form-control"  placeholder="Enter reg no" name="ident_number" >
          </div>

          <div class="form-group" id="Div3">
            <label for="name">Staff Number</label>
            <input type="text" class="form-control" placeholder="Enter Staff number" name="ident_number" >
          </div>
          <div class="form-group">
                <label for="comments">Password</label>
                <input type="password" class="form-control" id="name" name="password" placeholder="Enter password" required="">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

          <div class="form-group">
                <label for="comments">Confirm Password</label>
                <input type="password" class="form-control" id="name" name="password_confirmation" placeholder="Enter password" required="">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="form-group">
            <div class="fileUpload btn btn-primary btn-lg btn-block fake-shadow">
                <span><i class="my-2"></i> Upload passport</span>
                <input id="logo-id" type="file" name="image" class="attachment_upload" required>
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>
        </div>
          <button class="btn btn-primary" type="submit">Submit</button>
            <br/>
            <br/>
            <ul class="form-group">
              <li class="new_left"><p><a href="{{ route('login') }}" style="color:#28a745;">Already have an Account ?</a>  Proceed to  <a href="{{ route('login') }}" style="color:#28a745;"> Login</a></p></li>
              <div class="clearfix"></div>
          </ul>
</form>

 @include ('footer'); 
 <script src="js/rickshaw.js"></script>
