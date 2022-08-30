<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		// Check Required Fields
		if(!empty($email) && !empty($name) && !empty($message)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email';
				$msgClass = 'alert-danger';
			} else {
				// Passed
				$toEmail = 'tvdimple@gmail.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Message</h4><p>'.$message.'</p>
				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
					// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';
				}
			}
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        
    </head>

    <body>
        <header>
            <div class="container">
                <img src="img/banner1.jpg">
        
            </div>
        </header>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand sr-only" href="#">Toggle Navigation</a>
                </div>
                <div class="navbar-collapse collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <li class="navbar-item"><a href="index.html">Home</a></li>
                        <li class="navbar-item"><a href="parish.html">Our Parish </a></li>
                        <li class="navbar-item"><a href="organization.html">Organization</a></li>
                        <li class="navbar-item dropdown"><a href="photosgeneral.html" class=" nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Photo Gallery<span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background-color: #48D1CC">
                            <li><a href="photosgeneral.html" class="dropdown-item">Our Church Activites</a></li>
                            <li><a href="consecration.html" class="dropdown-item">Consecration</a></li>
                            <li><a href="visits.html" class="dropdown-item">Visits</a></li>
                        </ul>
                    </li>
                        <li><a href="office.html">Office Bearers</a></li>
                         <li class="active"><a href="contact.php">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>    
        </nav>
        
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="list-group" style="width: 70%;">
              <a href="index.html" class="list-group-item">
                <i class="glyphicon glyphicon-home"></i> Home
              </a>
              <a href="parish.html" class="list-group-item"><i class="glyphicon glyphicon-file"></i> Our Parish</a>
              <a href="organization.html" class="list-group-item"><i class="glyphicon glyphicon-file"></i> Organization</a>  
              <a href="photosgeneral.html" class="list-group-item"><i class="glyphicon glyphicon-folder-open"></i> Photo Gallery</a>
                <a href="office.html" class="list-group-item"><i class="glyphicon glyphicon-user"></i> Office Bearers</a>
              <a href="#" class="list-group-item active"><i class="glyphicon glyphicon-user"></i> Contact Us</a>
            </div>
              
              <div class="col-md-4">
                <h3 style="font-size: 15px;text-align: center">Holy Synod</h3>
                 <a href="http://mosc.in/holysynod" title="Malankara Orthodox Syrian Church"><img src="img/Holy_Synod.png"></a>
            </div>
              
          </div>
            
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12">
                <h1 class="page-header" style="margin-top: 5px; font-size: 25px;">Our Church Location</h1>
                  <p style="margin-top: 0;"><strong>Address :   St. John's Indian  Orthodox Church</strong><br /> </p>
                  <p style="margin-left: 65px;">   4400 State Road<br /></p>
                  <p style="margin-left: 65px;"> Drexel Hill,<br /></p>
                  <p style="margin-left: 65px;">  PA 19026, USA</p>
                  <p style="margin-left: 65px;">Email : trusteesjioc@outlook.com</p>
              </div>
                <p ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3058.581704612705!2d-75.31183818525395!3d39.95074529177246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c191067dae21%3A0xdcd6ffa74f3a50d5!2s4400%20State%20Rd%2C%20Drexel%20Hill%2C%20PA%2019026!5e0!3m2!1sen!2sus!4v1576949356083!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
        
                </div>
              </div>
            <div class="col-md-9">
                <?php if($msg != ''): ?>
    		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    	<?php endif; ?>
                 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<!--                <form class="contact-form" action="contactform.php" method="post" style="float: right;" id="iform">-->
                <div class="form-group row">
                    
                      <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : '' ?>" style="width: 400px;" placeholder="Name">
                    </div>
                </div>
                    <div class="form-group row">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : '' ?>" style="width: 400px;" placeholder="Your Email">
                    </div>
                </div>
                        
              <div class="form-group row">
                <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                  <div class="col-sm-10">
                <input type="text" class="form-control" name="subject" value="<?php echo isset($_POST['subject']) ? $subject : ''?>" placeholder="Your subject" style="width: 400px;">
              </div>
                </div>
              <div class="form-group row">
                <label for="message" class="col-sm-2 col-form-label">Your Message</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="message"  rows="3" style="width: 400px; background-color: white;"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
              </div>
                    </div>
                
                
              
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="emailcheck">
                  <label class="form-check-label" for="emailcheck">
                    Email a copy of this message to your own address
                  </label>
                </div>
              </div>
              <button type="submit" name="submit" class="btn btn-primary" style="margin-left: 250px;">Submit</button>
        </form>
          </div>  
            

          </div>
        </div>
      

    </section>
   

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6" id="left-footer" >
                    <ul>
                        <li><a  href="index.html">Home</a></li>
                        <li><a href="parish.html">Our Parish</a></li>
                        <li><a href="organization.html">Organization</a></li>
                        <li><a href="photosgeneral.html">Photo Gallery</a></li>
                        <li><a href="office.html">Office Bearers</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>    
                </div>
                <div class="col-md-6" id="right-footer">
                    <p>Address: 4400 State Road,<br />
                       Drexel Hill,PA 19026, USA       <br />            Email: trusteesjioc@outlook.com<br />
                       Website: https://sjioc.org</p>

<!--                    <p>Copyright &copy; 2019, All Rights Reserved</p>    -->
                </div>
            </div>  
        </div>
    </footer>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
<!--    <script src="js/script.js"></script>        -->
    </body>
</html>


