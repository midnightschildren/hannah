<?php include_once("template/header.php"); ?>

<!-- Navigation, IDs are used to create certain widths of the <a> tag's. Designers choice not to use a font that has not been created into a web font yet. Thus this page being produced with a bunch of back ground images -->

<nav>
<ul>

<div class="grid-2 m-grid-1 s-hidden">&nbsp;</div>
<div class="grid-8 m-grid-10 s-grid-12 s-padded-sides">
<li class="grid-1"><a href="about-hannah.php" id="nav-about">ABOUT</a></li>
<li class="grid-4"><div class="centerblock"><a href="http://www.genbook.com/bookings/slot/reservation/30051977?bookingSourceId=1000" target="_blank" id="nav-shedule">SCHEDULE/BOOK</a></div></li>
<li class="grid-2"><div class="centerblock"><a href="services.php" id="active-nav-services">SERVICES</a></div></li>
<li class="grid-4"><div class="centerblock little-ad"><a href="http://blog.hannahsowd.com" target="_blank" id="nav-blog">HANNAH'S BLOG</a></div></li>
<li class="grid-1"><a href="http://shop.hannahsowd.com/" target="_blank" id="nav-shop">SHOP</a></li>
	
</div>
<div class="grid-2 m-grid-1 s-hidden">&nbsp;</div>
</ul>
</nav>

  
<div id="wraps" class="grid-whole">

<!-- left Content -->
<div class="grid-5 s-grid-12 padded-righter flow-opposite">
<div class="column" style="padding-bottom: 30px; padding-top: 37px;" id="right-column">

<?php include("pulsepro/data/blocks/Services/Hours-of-Business.html"); ?>

<?php include("pulsepro/data/blocks/Services/Types-of-Payment.html"); ?>

</div>
</div>
<!-- Right Content -->
<div class="grid-7 s-grid-12 padded-lefter flow-opposite">
<div class="column grid-whole spc" style="padding-bottom: 30px; padding-top: 37px;" id="left-column">

<?php include("pulsepro/data/blocks/Services/Services-List.html"); ?>

</div>
</div>
<?php include_once("template/footer.php"); ?>