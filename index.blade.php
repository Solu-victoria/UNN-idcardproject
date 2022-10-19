@include('header');

        <div class="container">
            <!-- banner-text -->
            <div class="banner-text">
                <div class="slider-info">
                    <h3>Who is a <span>student or staff</span> without an ID?</h3>
					<a href="about" class="banner-button btn mt-md-5 mt-4">Know More</a>
				</div>
            </div>
        </div>
    </div>
	 <!-- //banner-text -->
	 <!--banner form-->
	<section class="banner_form py-5">
		<div class="container py-lg-3">
			<div class="row ban_form">
				<div class="col-lg-8 bg-white fom-left">
					<div class="categories_sub cats1">
						<h2 class="heading-agileinfo">Welcome To <span> ID Section</span></h2>
						<p class="vam">Not having the proper photo ID can prevent you from doing many things. Think about your own security. You wouldn’t want someone using your personal credit score to open accounts or use your bank card to make purchases. Your photo identification protects you.</p></div>
				</div>
				<div class="col-lg-4 reg-fom">
					<h4 class="text-white text-center">Login Portal</h4>
						<form action="validate.php" id="change" method="post" enctype="multipart/form-data">
							<div class="reg-fom-btm mt-5">
								<div class="fields">
									<span class="text-white mb-2">Reg NO/Staff No</span>
									<input type="text" name="staffid" placeholder="Enter reg no/staff no">
								</div>
							</div>
							<div class="reg-fom-btm mt-3">
								<div class="fields">
									<span class="text-white mb-2">Password</span>
									<input type="password" name="passwors" placeholder="Enter password">
								</div>
							</div>
							
							<div class="reg-fom-btm mt-3">
								<input type="submit" value="Login">
							</div>
						</form>
				</div>
			</div>
		</div>
	</section>
	<!--//banner form-->
	


<?php
@include('footer');
?>