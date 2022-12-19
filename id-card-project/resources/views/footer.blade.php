<!--/newsletter-->
<footer class="newsletter_right pymd-5 py-4" id="footer">
        <div class="container">
            <div class="inner-sec py-md-5 py-3">
                <div class="row mb-md-4 mb-md-3">
					<div class="col-lg-3 col-md-6 social-info text-left">
                       <h3 class="tittle1 foot mb-md-5 mb-4 text-white">Get in touch</h3>
						<p>University of Nigeria, Nsukka </p>
						<p class="my-2"> Enugu, Nigeria</p>
						<p class="phone">phone: +234 816 6976 585</p>
						<p class="phone my-2">Fax: +0444 555 6789</p>
						<p class="phone">Mail:
							<a href="mailto:info@example.com">info@unn.edu.ng</a>
						</p>

                    </div>
					<div class="col-lg-3 col-md-6 social-info text-left">
					 <h3 class="tittle1 foot mb-md-5 mb-4 text-white">About Us</h3>
                       <p>The University ID card is used as your staff/students primary identification to show that they have active status within the University Community. </p>

                    </div>
                    <div class="col-lg-6 col-md-12 n-right tex-left">
                        <h3 class="tittle1 foot mb-md-5 mb-4 text-white">Subscribe our Newsletter</h3>
                        <form action="#" method="post">
                            <div class="form-group d-flex">
                                <input class="form-control" type="email" name="Email" placeholder=" Email Address" required="">
                                <input class="form-control submit text-uppercase" type="submit" value="Subscribe">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<div class="copyright py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-8">      
					<p class="copy-right mt-2">© 2022 Subject. All Rights Reserved | Design by
						<a href="#"> UNN ICT </a>
					</p>
				</div>
				<div class="col-md-4">
					<ul class="social-icons scial justify-content-end">
						<li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
						<li class="mx-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li class="mx-1"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
						<li class="mx-1"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
    <!--//newsletter-->
	</body>
</html>

<!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->

<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->

    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->

    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    
    <script src="js/bootstrap.js"></script>

    <script>
	function update() {
 
    var slt = document.getElementById('seeAnotherField').value;
    switch (slt) {
    case "staff":
        $('#Div3').show();
        document.getElementById("reg").removeAttribute("name");
        document.getElementById("staff").setAttribute('name', 'ident_number');
        
        $('#Div2').hide();
  
        break;
    case "student":
        document.getElementById("staff").removeAttribute("name");
        document.getElementById("reg").setAttribute('name', 'ident_number');

        $('#Div3').hide();
        $('#Div2').show();
        break;
    
    default:
    $('#Div3').hide();
    $('#Div2').hide();
        break;
    }

}
</script>
	
