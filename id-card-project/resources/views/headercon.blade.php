<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Contact us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    
    <script>
         function hideURLbar(){
             if (window.scrollY == 0) window.scrollTo(0,1);
                            }
    </script>
	<link rel="icon" href="images/favicon-32x32.png">
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
    <!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100i,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
	<!-- //online-fonts -->
</head>

<body>
    <!-- banner -->
    <div class="inner-banner">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">
               <h1><a class="navbar-brand" href="/">UNN ID
							<span>CARD SERVICE</span>
						</a></h1>

                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link" href="/">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="about">About Us</a>
								</li>
								
								<li class="nav-item active ">
									<a class="nav-link" href="contact">Contact Us</a>
								</li>

								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="login" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
									    aria-expanded="false">
										Portal
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('register') }}">Create Account</a>
										<a class="dropdown-item" href="{{ route('login') }}">Login</a>
										
									</div>
								</li>
					</ul>
				</div>
			</nav>
        </header>
        <!-- //header -->