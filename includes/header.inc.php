		<!-- start the header -->

	<nav class="uk-navbar">
		<div class="uk-container uk-container-center">
		<a href="" class="uk-navbar-brand uk-hidden-small">
		<img src="/images/myAvatar.png" width="60px" height="180px">
		</a>

			<!-- for WEB -->

		<ul class="uk-navbar-nav uk-hidden-small">
		<?php include dirname(__FILE__).'/menu.inc.php'; ?>
		</ul>

		<div class="uk-navbar-flip uk-hidden-small">
		<ul class="uk-navbar-nav">
		<li><a href="https://twitter.com/vladimir586"><i class="uk-icon-twitter"></i></a></li>
		<li><a href="https://www.facebook.com/vladimirkitanovski"><i class="uk-icon-facebook"></i></a></li>
		<li><a href="https://www.instagram.com/vladimir_kitanovski/"><i class="uk-icon-instagram"></i></a></li>
		</ul>
		</div>

		<a href="#offcanvas-nav" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>

		<div class="uk-navbar-content uk-navbar-center uk-visible-small"> 
		<a href="" class="">
		<img src="/images/myAvatar.png" width="60px" height="180px">
		</a>
		</div> 


		</div>
		</nav>
				<!-- for MOBILE -->

		<div id="offcanvas-nav" class="uk-offcanvas">
		<div class="uk-offcanvas-bar">
		<ul class="uk-nav uk-nav-offcanvas" data-uk-nav">
	<?php include dirname(__FILE__).'/menu.inc.php'; ?>
		</ul>

		</div>
		</div>


		<!-- end of the header -->