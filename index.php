<?php
	$page_id = 1;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vladimir Kitanovski - Web Development Story</title>
 <?php include dirname(__FILE__).'/includes/head.inc.php'; ?>

</head>
<body>

	<?php include dirname(__FILE__).'/includes/header.inc.php'; ?>

<div class="uk-slidenav-position" data-uk-slideshow>

	<!--slides-->
    <ul class="tm-home-slideshow uk-slideshow uk-slideshow-fullscreen" data-uk-slideshow>
        <li>
        	<img src="/images/slider/hacking.png"/>
        	<div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-top uk-text-center">
        	<div>
        		<h1 class="uk-heading-large">WEB DEVELOPMENT</h1>
        		<a href="/contact.php" class="uk-button uk-button-primary uk-button-large tm-button-huge">CONTACT NOW</a>
        </div>
        </div>
        </li>
        <li>
        	<img src="/images/slider/ux.png"/>
        	<div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-top uk-text-center">
        	<div>
        		<h1 class="uk-heading-large">WEB DESIGN</h1>
        		<a href="/contact.php" class="uk-button uk-button-primary uk-button-large tm-button-huge">CONTACT NOW</a>
        </li>
             <li>
            <img src="/images/slider/camera.png"/>
            <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-top uk-text-center">
            <div>
                <h1 class="uk-heading-large">Video Production</h1>
                <a href="/contact.php" class="uk-button uk-button-primary uk-button-large tm-button-huge">CONTACT NOW</a>
        </div>
        </div>
        </li>
    </ul>
    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
    <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
        <li data-uk-slideshow-item="0"><a href=""></a></li>
        <li data-uk-slideshow-item="1"><a href=""></a></li>
        <li data-uk-slideshow-item="2"><a href=""></a></li>

    </ul>
</div>
	
<!-- Home page content starts here -->
<div class="uk-block uk-block-secondary uk-contrast">
    <div class="uk-container uk-container-center">
        <h1 class="uk-text-center">specialties menu</h1>
         <!-- our packages -->
         <div class="uk-grid">
             <div class="uk-width-medium-1-3">
                <div class="uk-panel uk-panel-box uk-margin-large-top">
                <div class="uk-panel-teaser">
                     <img src="/images/packages/code.jpg">
                </div>
                 <h3 class="uk-panel-title uk-text-center">Code</h3>
                 <p class="uk-text-center">
                     Focusing on<br>ux/uiand web<br>design which<br>helps me fight<br>ugly interfaces<br>and shake things<br>up.
                 </p>
                </div>
            </div>
      <div class="uk-width-medium-1-3">
                <div class="uk-panel uk-panel-box uk-margin-large-top">
                <div class="uk-panel-teaser">
                     <img src="/images/packages/whiteboard.jpg">
                </div>
                 <h3 class="uk-panel-title uk-text-center">design</h3>
                 <p class="uk-text-center">
                     delight in exploring <br>ideas, receiving <br>feedback and<br>iterating on visual<br>solutions -<br>understanding the<br>end user.
                 </p>
                </div>
            </div>

                  <div class="uk-width-medium-1-3">
                <div class="uk-panel uk-panel-box uk-margin-large-top">
                <div class="uk-panel-teaser">
                     <img src="/images/packages/pm.jpg">
                </div>
                 <h3 class="uk-panel-title uk-text-center">project management</h3>
                 <p class="uk-text-center">
                     I practice user<br>centered design<br>principles basing<br>design decisions<br>on user needs <br>and business<br>goals.
                 </p>
                </div>
            </div>

         </div>
    </div>
</div>

    <!-- Work process -->

    <div class="uk-block uk-block-primary uk-contrast">
        <div class="uk-container uk-container-center">
        <h2 class="uk-h1 uk-text-center">Work process</h2>
        </div>
        <div class="uk-container uk-container-center uk-text-center">
            <h3><p class="uk-icon-lightbulb-o"><br><br>  IDEA   </p>     <p class="uk-icon-arrow-right"> <br></p>
            <p class="uk-icon-puzzle-piece">  <br><br>  CONCEPT   </p>      <p class="uk-icon-arrow-right"> <br></p>
            <p class="uk-icon-paint-brush">  <br><br>  DESIGN   </p>      <p class="uk-icon-arrow-right"> <br></p>
            <p class="uk-icon-code">  <br><br>  CODE   </p>      <p class="uk-icon-arrow-right"> <br></p>
            <p class="uk-icon-bug" >  <br><br>  TEST   </p>      <p class="uk-icon-arrow-right"> <br></p>
            <p class="uk-icon-rocket">  <br><br>LAUNCH  </p>
        </h3>
        </div>
    </div>

    <!-- Work with me page ending -->

    <div class="uk-block uk-block-muted">
        <div class="uk-container uk-container-center">
            <h2 class="uk-text-center">LET'S WORK TOGETHER</h2>
        </div>
        <p class=" uk-text-center">GOT AN INTERESTING<br>PROJECT AND WOULD<br>LIKE TO WORK ON IT WITH ME<br><br>
        </p>
        <p class="uk-text-center">
            <a href="/contact.php" class="uk-button tm-button-huge">GET IN TOUCH</a>
        </p>
    </div>

<?php include dirname(__FILE__).'/includes/footer.inc.php'; ?>


	<script src="jquery-2.0.2.js"></script>
    <script src="jquery.stellar.min.js"></script>
    <script>
    $.stellar();
    </script>
</body>
</html>