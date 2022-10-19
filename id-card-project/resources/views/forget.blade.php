
 @include ('headersin') ;


</div>
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">Change Password</li>
    </ol>


  <form class="p-1" action="" id="change" method="post" enctype="multipart/form-data">

        
        
                <h6 class="pt-5 pb-5">   
                Kindly enter your new password       
                </h6>
         <div class="form-group">
                <label for="comments">Enter New Password</label>
                <input type="password" class="form-control" id="name"  name="passwors" required="">
              
        </div>
          
          <div class="form-group">
                <label for="comments">Re-Enter Password</label>
                <input type="password" class="form-control" id="name" name="" required="">
              
        </div>
       
            <button class="btn btn-primary" type="submit">Submit</button>

         

</form>
</br>
</br>


 @include ('footer') ;
