		<!-- Navigation -->
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="home"><strong>White Bridge</strong><br />
						<span data-hover="Kennels">Boarding Kennels</span>
					</a></h1>
				</div>	
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li <?=echoActiveClassIfRequestMatches("home")?>>
	        				<a href="home">Home</a>
	        			</li>
						<li <?=echoActiveClassIfRequestMatches("prices")?>>
							<a href="prices" title="Prices"><span data-hover="Prices">Prices</span></a>
						</li>
						<li <?=echoActiveClassIfRequestMatches("about")?>>
							<a href="about" title="About us"><span data-hover="About us">About us</span></a>
						</li>
						<li class="dropdown">
							<a href="services.html" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Services">Services</span> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href="adoption.html" title="Adoption centre">Adoption centre</a>
								</li>
								<li>
									<a href="services.html" title="Dog boarding kennels">Dog boarding kennels</a>
								</li>
								<li>
									<a href="services-single.html" title="Dog walking">Dog walking</a>
								</li>
								<li>
									<a href="services.html" title="Home boarding">Home boarding</a>
								</li>
								<li>
									<a href="services.html" title="Puppy crèche">Puppy crèche</a>
								</li>
							</ul>
						</li>
			<!-- 			<li>
							<a href="contact.html" title="Contact us"><span data-hover="Contact us">Contact us</span></a>
						</li> -->
						<li class="purchase-btn">
							<form method="get" action="index.html">
								<button type="submit" class="btn btn-default"><a href="contactme" title="Contact us" class="contact-link">Contact us</a></button>
							</form>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Navigation end -->