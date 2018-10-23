<?php 
$title = "Corporate Video Portfolio";
include '../includes/header.inc.php';
?>

<section class="main-content">
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                	<h1>Corporate Video</h1>
                	<h2>Bringing Your Vision into <strong>Focus</strong>.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    	<div class="row">
	    	<div class="col-md-8 hero-video-container">
	    		<a href="https://vimeo.com/200420513" data-lity><img class="img-responsive hero-placeholder" src="/images/thumbnails/corporate-sizzle-lg.jpg"></a>
	    	</div>
	    	<div class="col-md-4 sidebar">
	    		<p>Corporate Video can sell a concept or idea, bring a vision or brand to life, and create messaging that is memorable and targeting to your specific audience. By asking the right kind of questions that zero in on your customers and their needs, thinkCQ can help deliver a message of trust, confidence, and care.</p>
	    		<p>And studies have shown that video can increase memory retention by 50% compared to print advertising, and expedite selling decisions by 72%. Let thinkCQ bring your vision into focus and your message to life.</p>
	    	</div>
	    </div>
	</div>
	<div class="video-scroller">
		<div class="container">
			<div class="row hidden-xs">
				<div class="col-md-12">
					<ul class="tags">  
						<li><a href="/portfolio-corporate-video">Corporate Video</a></li>
						<li><a class="inactive" href="/portfolio-documentary">Documentary</a></li>
						<li><a class="inactive" href="/portfolio-web">Web/Mobile</a></li>
						<li><a class="inactive" href="/portfolio">Show All</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="thumbnail-slider">
						<?php include '../includes/corporate-videos.inc.php'; ?>
					</div>
            	</div>
			</div>
			<div class="row visible-xs visible-sm">
				<div class="col-xs-12 text-center">
					<p>&#8249; Swipe to view more videos &#8250;</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include '../includes/contact-button.inc.php'; ?>

<?php include '../includes/footer.inc.php'; ?>