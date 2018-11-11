<?php
if (isset($_GET["register"])) {
	
	?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Online Shopping</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    

    </head>
	<body style="width: 100%;
height: 100%;">
		<!-- HEADER -->
		
			<!-- TOP HEADER -->
			
			<div class="login-col">
			<!-- container -->
			<div class="login-pad">
				<!-- row -->
				<div class="wrap-login100 login-pad2">

					<div class="login-marg">
						<!-- Billing Details -->
						<div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8" id="signup_msg">
                                <!--Alert from signup form-->
                            </div>
                            <div class="col-md-2"></div>
                        </div>
						
						
						<!-- /Billing Details -->
						
								<form class="login100-form">
									<div class="billing-details">
                                    <div class="section-title">
                                        <h2 class="login100-form-title p-b-49" >Register Here</h2>
                                    </div>
                                    <div class="form-group ">
                                        <input class="input" type="text" name="f_name" id="f_name" placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="l_name" id="l_name" placeholder="Last Name">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="email" name="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="password" name="password" id="password" placeholder="password">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="password" name="repassword" id="repassword" placeholder="confirm password">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="mobile" id="mobile" placeholder="mobile">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="address1" id="address1" placeholder="Address">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="address2" id="address2" placeholder="City">
                                    </div>
                                    
                                    
                                    <div style="margin-left: 30%">
                                        <a class="primary-btn cta-btn" style="resize: horizontal" href="store.php" value="Sign Up" type="submit" name="signup_button">Submit</a>
                                    </div>
                                    <div class="text-pad" >
                                       <a href="login_form.php">
                                           Already have an Account ?
                                       </a>
                                        
                                    </div>
                                        
                                    

                                </div>
                                
								</form>
							

						<!-- Shiping Details -->
						
						<!-- /Shiping Details -->

						<!-- Order notes -->
						
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
        
    </body>
</html>
<?php
}



?>