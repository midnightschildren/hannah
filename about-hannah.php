<?php include_once("template/header.php"); ?>

<!-- Navigation, IDs are used to create certain widths of the <a> tag's. Designers choice not to use a font that has not been created into a web font yet. Thus this page being produced with a bunch of back ground images -->

<nav>
<div class="grid-2 m-grid-1 s-hidden">&nbsp;</div>
<div class="grid-8 m-grid-10 s-grid-12 s-padded-inner-sides">
<ul>
<li class="grid-3"><a href="about-hannah.php" id="active-nav-about">WHO IS HANNAH</a></li>
<li class="grid-3"><a href="http://www.genbook.com/bookings/slot/reservation/30051977?bookingSourceId=1000" target="_blank" id="nav-shedule">SCHEDULE/BOOK</a></li>
<li class="grid-2"><a href="services.php" id="nav-services">SERVICES</a></li>
<li class="grid-3"><a href="http://blog.hannahsowd.com" target="_blank" id="nav-blog">READ HER BLOG</a></li>
<li class="grid-1"><a href="http://shop.hannahsowd.com/" target="_blank" id="nav-shop">SHOP</a></li>
</ul>
</div>
<div class="grid-2 m-grid-1 s-hidden">&nbsp;</div>
</nav>

  
<div id="wraps">

<!-- left Content -->

<div class="column" id="left-column">

<?php include("pulsepro/data/blocks/About/About-Hannah.html"); ?>

</div>

<!-- Right Content -->

<div class="column" id="right-column">

<?php include("pulsepro/data/blocks/About/Serious-Skin-Care.html"); ?>

<?php include("pulsepro/data/blocks/About/Custom-Massage.html"); ?>

</div>

<?php include_once("template/footer.php"); ?>