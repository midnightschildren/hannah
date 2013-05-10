<?php include_once("template/header.php"); ?>

<!-- Navigation, IDs are used to create certain widths of the <a> tag's. Designers choice not to use a font that has not been created into a web font yet. Thus this page being produced with a bunch of back ground images -->

	<nav>
	<ul>
	<li><a href="about-hannah.php" id="nav-about">WHO IS HANNAH</a></li>
	<li><a href="http://www.genbook.com/bookings/slot/reservation/30051977?bookingSourceId=1000" target="_blank" id="nav-shedule">SCHEDULE/BOOK</a></li>
	<li><a href="services.php" id="active-nav-services">SERVICES</a></li>
	<li><a href="http://blog.hannahsowd.com" target="_blank" id="nav-blog">READ HER BLOG</a></li>
	<li><a href="http://shop.hannahsowd.com/" target="_blank" id="nav-shop">SHOP</a></li>
	</ul>
	</nav>

  
<div id="wrap">

<!-- left Content -->

<div class="column" id="left-column">

<?php include("pulsepro/data/blocks/Services/Services-List.html"); ?>

</div>

<!-- Right Content -->

<div class="column" id="right-column">

<?php include("pulsepro/data/blocks/Services/Hours-of-Business.html"); ?>

<?php include("pulsepro/data/blocks/Services/Types-of-Payment.html"); ?>

</div>

<?php include_once("template/footer.php"); ?>