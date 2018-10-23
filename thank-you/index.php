<?php 
$title = "Thank You";
include '../includes/header.inc.php';
?>

<section class="main-content">
	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Thank You</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<?php
			  if(isset($_POST['contact']['email'])) {   
				  // EDIT THE 2 LINES BELOW AS REQUIRED
				  $email_to = "chris@thinkcq.com";
				  $email_subject = "You've received a message from the thinkCQ website.";
			   
				  function died($error) {
					  // your error code can go here
					  echo "We are very sorry, but there were error(s) found with the form you submitted. ";
					  echo "These errors appear below.<br /><br />";
					  echo $error."<br /><br />";
					  echo "Please go back and fix these errors.<br /><br />";
					  die();
				  }
			   
				  // validation expected data exists
				  if(!isset($_POST['contact']['name']) || 
					  !isset($_POST['contact']['email']) || 
					  !isset($_POST['contact']['message'])) {
					  died('We are sorry, but there appears to be a problem with the form you submitted.');       
				  }
			   
				  $contact_name = $_POST['contact']['name']; // required
				  $email_from = $_POST['contact']['email']; // required
				  $comments = $_POST['contact']['message']; // required
			   
				  $error_message = "";
			   
				  $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
			   
				if(!preg_match($email_exp,$email_from)) {
				  $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
				}
			   
				  $string_exp = "/^[A-Za-z .'-]+$/";
			   
				if(!preg_match($string_exp,$contact_name)) {
				  $error_message .= 'The Name you entered does not appear to be valid.<br />';
				}
			   
				if(strlen($comments) < 2) {
				  $error_message .= 'The Message you entered do not appear to be valid.<br />';
				}
			   
				if(strlen($error_message) > 0) {
				  died($error_message);
				}
			   
				  $email_message = "You've been contacted from the website with the following details:\n\n";

				  function clean_string($string) {
					$bad = array("content-type","bcc:","to:","cc:","href");
					return str_replace($bad,"",$string);
				  }
			   
				  $email_message .= "Name: ".clean_string($contact_name)."\n";
				  $email_message .= "Email: ".clean_string($email_from)."\n";
				  $email_message .= "Message: ".clean_string($comments)."\n";

			  // create email headers
			  $headers = 'From: '.$email_from."\r\n".
			  'Reply-To: noreply@thinkcq.com'."\r\n" .
			  'X-Mailer: PHP/' . phpversion();
			   if(!mail($email_to, $email_subject, $email_message, $headers)){
				//echo 'Something went wrong!'; 
			  } 
			   
			  ?>

			  <span class="success">
				Thank you for contacting us.  We will respond as soon as possible.<br>
				<br>
				<br>
				<a href="/about" class="button">About thinkCQ</a>
			  </span>
			   
			  <?php
			  } 
			  ?>
			</div>
		</div>
	</div>
</section>

<?php include '../includes/footer.inc.php'; ?>