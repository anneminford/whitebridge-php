<!-- Slider -->
		<div id="home_carousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#home_carousel" data-slide-to="0" class="active"></li>
				<li data-target="#home_carousel" data-slide-to="1"></li>
			</ol>
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/2.png" alt="" />
					<div class="carousel-caption">
						<h2>Welcome to White Bridge Boarding Kennels</h2>
					    <p>Becky, Paul &amp; Jacqui welcome you to White Bridge Dog Boarding Kennels, situated in North Devon about 8 miles from Barnstaple, South Molton and Torrington. Dogs enjoy fun and exercise throughout the day in secure paddocks set in 3½ acre grounds. We offer day crèche and overnight boarding.</p>
					    	<button type="submit" class="btn btn-lg btn-default"><a href="about">Learn more</a></button>
					</div>
				</div>
				<div class="item">
					<img src="images/3.png" alt="" />
					<div class="carousel-caption">
						<h2>Welcome to White Bridge Boarding Kennels</h2>
					    <p>Becky, Paul &amp; Jacqui welcome you to White Bridge Dog Boarding Kennels, situated in North Devon about 8 miles from Barnstaple, South Molton and Torrington. Dogs enjoy fun and exercise throughout the day in secure paddocks set in 3½ acre grounds. We offer day crèche and overnight boarding.</p>
					    	<button type="submit" class="btn btn-lg btn-default"><a href="about">Learn more</a></button>
					</div>
				</div>
			</div>
			
			<!-- Controls -->
			<a class="left carousel-control" href="#home_carousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#home_carousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		<!-- Slider end -->
		<?php  
			include 'services.php';
			include 'customers.php';
			include 'testimonials.php';
		?>