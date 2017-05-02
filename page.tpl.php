<script type="text/javascript" src="https://use.fontawesome.com/d15167a9e5.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<nav>
	<div class="contenedor-general">
		<div id="logo">
			<img src="img/OpenCharity.png">
		</div>

		<ul>
			<a href="#">
				<li class="uppercase">About Open Charity</li>
			</a>
			<a href="#">
				<li class="uppercase">The blog</li>
			</a>
			<a href="#">
				<li class="btn verde-negativo uppercase">Join Us</li>
			</a>
		</ul>

	</div>
</nav>

<div class="main-slider">
	<div class="slide">
		<img src="img/slide.jpg">
		<div class="contenedor-general">
			<div class="txt">
				<?php if ($page['content']): ?>    
					<?php print render($page['content']); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="eventos">
	<div class="contenedor-general">
		<div class="eventos-left">
			<h3 class="txt-gris-oscuro"><span class="txt-verde">Next Event:</span> June 23rd 2016  18:30 - 21:00</h3>
			<p class="txt-gris-medio">Cancer Research UK, Angel Building, 407 St John Street, London EC1V 4AD </p>
		</div>

		<div class="eventos-right">
			<button type="submit" class="btn verde uppercase">Register</button>
		</div>

	</div>
</div>

<div class="canales">
	<div class="contenedor-general">
		<h1 class="uppercase txt-gris-oscuro">Get Involved</h1>
		<div class="item-canales">
			<img src="img/meetup.png" class="icon-item-canales">
			<h4 class="uppercase txt-gris-oscuro">We Do Meetings</h4>
			<p class="txt-gris-medio">We organise our meetings through the OpenCharity MeetUp group</p>
			<br>
			<button class="btn verde-negativo uppercase">Meetup Group</button>
		</div>

		<div class="item-canales">
			<img src="img/Slack.png" class="icon-item-canales">
			<h4 class="uppercase txt-gris-oscuro">We Collaborate</h4>
			<p class="txt-gris-medio">OpenCharity have a slack group for daily collaboration</p>
			<br>
			<button class="btn verde-negativo uppercase">Slack Group</button>
		</div>

		<div class="item-canales">
			<img src="img/google.png" class="icon-item-canales">
			<h4 class="uppercase txt-gris-oscuro">We Share</h4>
			<p class="txt-gris-medio">We have a Google Group set up to share tools and documents</p>
			<br>
			<button class="btn verde-negativo uppercase">Google Group</button>
		</div>
	</div>
</div>

<div class="nosotros">
	<div class="contenedor-general">
		<div class="mision">
			<h2 class="uppercase txt-gris-oscuro">Our Mission</h2>
			<span class="txt-gris-medio">Charities and Partners collaborating and sharing open solutions and ideas to create value in the digital space.</span>
			<br>
			<br>
			<h5 class="txt-gris-oscuro">If you are a charity or a supplier, we are ready to welcome you.</h5>

			<br>
			<br>

			<div class="mision-item col-3">
				<div class="img-item-mision">
					<img src="img/mision1.png">
				</div>
				<h4 class="titulo-item-mision txt-verde">We help charities</h4>
				<p class="desc-item-mision">Share knowledge and working practice to make the best technology choices.</p>
			</div>

			<div class="mision-item col-3">
				<div class="img-item-mision">
					<img src="img/mision2.png">
				</div>
				<h4 class="titulo-item-mision txt-verde">We bring together</h4>
				<p class="desc-item-mision">charities and suppliers to the charity sector to share best practices.</p>
			</div>

			<div class="mision-item col-3">
				<div class="img-item-mision">
					<img src="img/mision3.png">
				</div>
				<h4 class="titulo-item-mision txt-verde">We encourage</h4>
				<p class="desc-item-mision">collaboration and innovation for the good of the charity sector.</p>
			</div>
		</div>

		<div class="separador"></div>

		<div class="aliados">
			<h2 class="uppercase">Our Members</h2>
			<div class="slide-aliados">
				<div class="aliado-img">
					<img src="img/aliado1.png">
				</div>
				<div class="aliado-img">
					<img src="img/aliado2.png">
				</div>
				<div class="aliado-img">
					<img src="img/aliado3.png">
				</div>
				<div class="aliado-img">
					<img src="img/aliado4.png">
				</div>
				<div class="aliado-img">
					<img src="img/aliado5.png">
				</div>
			</div>
		</div>
		
	</div>

</div>

<div class="blog">
	<div class="contenedor-general bg-white" style="padding:25px 0;">
		<div class="arrow-left">
			<i class="fa fa-chevron-left txt-verde"></i>
		</div>
		<div class="arrow-right">
			<i class="fa fa-chevron-right txt-verde"></i>
		</div>
		<h2 class="uppercase txt-gris-oscuro">Blog</h2>
		<div class="item-blog col-4">
			<h5 class="titulo-item-blog txt-verde">Online Donations Special...</h5>
			<p class="desc-item-blog txt-gris-medio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<p class="fecha-item-blog txt-gris-medio">14 nov. 2014</p>
		</div>
		<div class="item-blog col-4">
			<h5 class="titulo-item-blog txt-verde">Online Donations Special...</h5>
			<p class="desc-item-blog txt-gris-medio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<p class="fecha-item-blog txt-gris-medio">14 nov. 2014</p>
		</div>
		<div class="item-blog col-4">
			<h5 class="titulo-item-blog txt-verde">Online Donations Special...</h5>
			<p class="desc-item-blog txt-gris-medio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<p class="fecha-item-blog txt-gris-medio">14 nov. 2014</p>
		</div>
		<div class="item-blog col-4">
			<h5 class="titulo-item-blog txt-verde">Online Donations Special...</h5>
			<p class="desc-item-blog txt-gris-medio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<p class="fecha-item-blog txt-gris-medio">14 nov. 2014</p>
		</div>
	</div>
</div>

<footer  style="padding-bottom:20px;">
	<div class="contenedor-general">
		<div class="social-media-icons txt-verde">
			<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-google-plus"></i>
		</div>
		<div class="separador" style="margin:20px 0;"></div>
		<p>The site was built as a collaboration between Edward Alarcón and Compucorp</p>
	</div>
</footer>