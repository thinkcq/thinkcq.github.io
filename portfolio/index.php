<?php
$title = "Portfolio";
include '../includes/header.inc.php';
?>

<section class="main-content">
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                	<h1>Portfolio</h1>
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
	    		<h3>Demo Reel</h3>
				<ul>
					<li><a href="/portfolio-corporate-video/"><strong>Corporate Video</strong></a><br />
						Whether it's a small, selected audience, or a global presence on the web, Corporate Theater lifts your story above the noise.</li>
					<li><a href="/portfolio-documentary/"><strong>Documentary Films</strong></a><br />
						Documentary Films have found their way into the mainstream media now, from theaters to public television, to the internet.</li>
					<li><a href="/portfolio-web/"><strong>Web/Mobile</strong></a><br />
						Your message is no longer confined to the web. It's mobile. It's handheld.</li>
				</ul>
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
						<li><a class="inactive" href="/portfolio-web">Web/Mobile</a></li>
						<li><a href="/portfolio">Show All</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="thumbnail-slider">
						<?php include '../includes/corporate-videos.inc.php'; ?>
						<?php include '../includes/documentary-videos.inc.php'; ?>
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
