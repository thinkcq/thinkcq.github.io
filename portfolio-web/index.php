<?php 
$title = "Portfolio";
include '../includes/header.inc.php';
?>

<section class="main-content">
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
					<h1>Web/Mobile</h1>
					<h2>Bringing Your Vision into <strong>Focus</strong>.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    	<div class="row">
	    	<div class="col-md-8 hero-video-container">
	    		<a href="https://vimeo.com/199519086" data-lity><img class="img-responsive hero-placeholder" src="/images/thumbnails/web-hero-lg.jpg"></a>
	    	</div>
	    	<div class="sidebar web-and-mobile">
	    		<h2>Video <b>Works</b>!</h2>
	    		<p><b>Find new routes to profit and visibility - join the online video revolution</b></p>
	    		<p><b>FACT</b>: Landing page videos can increase conversion by 80%</p>
          <p><b>FACT</b>: Users are 40+ times more likely to share video content on social media</p>
          <p><b>FACT</b>: 50% of executives seek more information after seeing a product/service video</p>
          <p><b>FACT</b>: By 2019 mobile advertising will represent 72% of all U.S. digital ad spending</p>
          <p><b>FACT</b>: Email with video increases click-through-rates by 200-300%</p>
          <p class="small"><i>Sources&mdash;<a href="https://www.hubspot.com/">Hubspot.com</a> & <a href="http://marketingland.com/">MarketingLand.com</a></i></p>
          <h2><b>Let&#39;s talk about putting your message in motion</b></h2>
          <p>We can help you reach more people who want to hear and see what you have to say&mdash;at the right time, in the right place, on the right device.</p>
          <p><b>Just give us a call at <a href="tel:817-881-2710">817.881.2710</a>. It&#39;s time!</b></p>
	    	</div>
	    </div>
	</div>
	<div class="video-scroller">
		<div class="container">
			<div class="row hidden-xs">
				<div class="col-md-12">
					<ul class="tags">  
						<li><a class="inactive" href="/portfolio-corporate-video">Corporate Video</a></li>
						<li><a class="inactive" href="/portfolio-documentary">Documentary</a></li>
						<li><a href="/portfolio-web">Web/Mobile</a></li>
						<li><a class="inactive" href="/portfolio">Show All</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="thumbnail-slider">
						<?php include '../includes/web-videos.inc.php'; ?>
					</div>
            	</div>
			</div>
			<div class="row visible-xs">
				<div class="col-xs-12 text-center">
					<p>&#8249; Swipe to view more videos &#8250;</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include '../includes/contact-button.inc.php'; ?>

<?php include '../includes/footer.inc.php'; ?>