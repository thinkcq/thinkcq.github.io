<?php 
$title = "Contact";
include '../includes/header.inc.php';
?>
<section class="main-content">
	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Contact</h1>
					<h2>thinkCQ <strong>Serving the right brainer thinker that make storytelling FUN.</strong></h2>      
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h3>Isn't it time to bring your vision into Focus?</h3><br />
				<a href="https://vimeo.com/199701480" data-lity><img class="img-responsive hero-placeholder" src="../images/contact-sting-poster.jpg"></a>
			</div>
			<div class="col-md-4">
				<p><strong>thinkCQ</strong><br />
				CQ Digital Media LLC<br />
				Chris Quinn<br />
				<a href="tel:8178812710">817.881.2710</a><br />
				<a href="mailto:chris@thinkcq.com">chris@thinkCQ.com</a></p>
				<hr />
				<p class="text-right small"><sup>*</sup> denotes a required field.</p>
				<form accept-charset="UTF-8" action="/thank-you/index.php" class="new_contact" id="new_contact" method="post">
					<div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
					<div class="form-group">
						<label for="contact_name">Name <sup>*</sup></label>
						<input id="contact_name" class="form-control" name="contact[name]" placeholder="" required="required" size="30" type="text" />
					</div>
					<div class="form-group">
						<label for="email">Email <sup>*</sup></label>
						<input id="contact_email" class="form-control" name="contact[email]" placeholder="" required="required" size="30" type="text" />
					</div>
					<div class="form-group">
						<label for="message">Message <sup>*</sup></label>
						<textarea cols="41" id="contact_message" class="form-control" name="contact[message]" required="required" rows="4"></textarea>
					</div>
					<div class="form-group">
						<input class="button" name="commit" type="submit" value="Submit" />
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php include '../includes/footer.inc.php';?>