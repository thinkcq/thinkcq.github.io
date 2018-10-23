<?php 
$title = "Portfolio";
include '../includes/header.inc.php';
?>

<section class="main-content">
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
					<h1>Documentary Films</h1>
					<h2>Bringing Your Vision into <strong>Focus</strong>.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    	<div class="row">
	    	<div class="col-md-8 hero-video-container">
	    		<a href="https://vimeo.com/174162264" data-lity><img class="img-responsive hero-placeholder" src="../images/thumbnails/art-meets-world-lg.jpg"></a>
	    	</div>
	    	<div class="col-md-4 sidebar">
	    		<p>Documentary Films have found their way into the mainstream media now, from theaters to public television, to the internet. The general viewing public has undeniably become more aware of the unique ways that documentaries can both educate and entertain.</p>
	    		<p>Find the truth beyond what you already know. Let the voices and stories of the people who are involved explore the hidden past or help bring the present day into focus.</p>
	    	</div>
	    </div>
	</div>
	<div class="video-scroller">
		<div class="container">
			<div class="row hidden-xs">
				<div class="col-md-12">
					<ul class="tags">  
						<li><a class="inactive" href="/portfolio-corporate-video">Corporate Video</a></li>
						<li><a href="/portfolio-documentary">Documentary</a></li>
						<li><a class="inactive" href="/portfolio-web">Web/Mobile</a></li>
						<li><a class="inactive" href="/portfolio">Show All</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="thumbnail-slider">
						<?php include '../includes/documentary-videos.inc.php'; ?>
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