<?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
if (isset($_SESSION["uid"])) {
	header("location:profile.php");
}
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST["login_user_with_product"])) {
	//this is product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and name of cookie is product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
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
height: 100%;background-color: #333">
		<!-- HEADER -->
		
			<!-- TOP HEADER -->
			
			<div class="login-col" >
			<!-- container -->
			<div class="login-pad">
				<!-- row -->
				<div class="wrap-login100 login-pad2">

					<div class="login-marg">
						<!-- Billing Details -->
						
						
						<!-- /Billing Details -->
						
								<form class="login100-form">
									<div class="billing-details">
                                    <div class="section-title">
                                        <h2 class="login100-form-title p-b-49" >Login Here</h2>
                                    </div>
                                   
                                    
                                    <div class="form-group">
                                        <input class="input" type="email" name="email" placeholder="Email">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input class="input" type="password" name="password" placeholder="password">
                                    </div>
                                    
                                    <div class="text-pad" >
                                       <a href="login.php">
                                           forget password ?
                                       </a>
                                        
                                    </div>
                                    <div style="margin-left: 30%">
                                        <a class="primary-btn cta-btn" style="resize: horizontal;"  type="submit"  Value="Login">Login</a>
                                    </div>
                                    <div><a href="register_form.php" style="font-size:20px; ">Create a new account?</a></div>	
                                        
                                    

                                </div>
                                
								</form>
                        <div class="panel-footer"><div id="e_msg"></div></div>     
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