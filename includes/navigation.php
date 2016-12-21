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
					<h1><a class="navbar-brand" href="home"><strong>White</strong> Bridge<br />
						<span data-hover="Kennels">Boarding Kennels</span>
					</a></h1>
				</div>	
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li <?=echoActiveClassIfRequestMatches("home")?>>
	        				<a href="home">Home</a>
	        			</li>
						<li <?=echoActiveClassIfRequestMatches("boarding")?>>
							<a href="boarding" title="boarding"><span data-hover="Boarding">Boarding</span></a>
						</li>
						<li <?=echoActiveClassIfRequestMatches("daycreche")?>>
							<a href="day-creche" title="day crèche"><span data-hover="Day crèche">Day crèche</span></a>
						</li>
						<li <?=echoActiveClassIfRequestMatches("about")?>>
							<a href="about" title="About us"><span data-hover="About us">About us</span></a>
						</li>
						<li <?=echoActiveClassIfRequestMatches("contactme")?> class="hidden-md hidden-lg hidden-sm">
							<a href="contactme" title="Contact us"><span data-hover="Contact us">CONTACT</span></a>
						</li>
<!-- 						<li class="dropdown">
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
						</li> -->
			<!-- 			<li>
							<a href="contact.html" title="Contact us"><span data-hover="Contact us">Contact us</span></a>
						</li> -->
						<li class="purchase-btn">
							<form method="get" action="contactme">
								<button type="submit" class="btn btn-default"><a href="contactme" title="Contact us" class="contact-link">Contact us</a></button>
							</form>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Navigation end -->