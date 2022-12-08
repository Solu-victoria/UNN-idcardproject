
 @include ('headersin') ;


</div>
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">Login</li>
    </ol>
	 <!-- //banner-text -->
	 <section class="banner_bottom1 py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="heading-agileinfo text-center">Log<span>in</span></h3>
			
		</div>
	</section>





  <form class="p-1" action="{{ route('login') }}" id="change" method="post" enctype="multipart/form-data">
  @csrf
        
         
          <div class="form-group" id="">
<!-- <h6 style="color:red; margin-top:0px; margin-buttom:30px;">
        
        
  </h6> -->
            <label for="name">Registration Number/Staff Number</label>
            <input type="text" class="form-control" id="otherField" placeholder="Enter reg no/staff no" name="ident_number"  required>
            <x-input-error :messages="$errors->get('ident_number')" class="mt-2" />
          </div>

          
          <div class="form-group">
                <label for="comments">Password</label>
                <input type="password" class="form-control" id="name" placeholder="Enter password" name="password" required>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>
         <ul class="form-group">
              <li class="new_left"><p><a href="#" style="color:#28a745;">Forgot Password ?</a>  New here ? <a href="{{ route('register') }}" style="color:#28a745;"> Sign Up</a></p></li>
              <div class="clearfix"></div>
          </ul>
            <button class="btn btn-primary" type="submit">Submit</button>

         

</form>
</br>
</br>


 @include ('footer') ;
