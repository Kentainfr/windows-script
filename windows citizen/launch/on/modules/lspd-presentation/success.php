<!DOCTYPE html>
<html class="no-js" prefix="og: https://ogp.me/ns#" lang="fr"><!--<![endif]-->
<head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover"><meta name="msapplication-tap-highlight" content="no">
	<link rel="stylesheet" href="assets/css/style1.css" data-wnd_typography_file="">
	<link rel="stylesheet" href="assets/css/style2.css" data-wnd_typography_file="">
	<link rel="stylesheet" href="assets/css/style3.css" data-wnd_typography_file="">
	<link rel="stylesheet" href="assets/css/style4.css" data-wnd_typography_file="">
	<link rel="stylesheet" href="assets/css/style5.css" data-wnd_typography_file="">

</head><body class="l l-03 layout-03 c-s-m wt-page ac-s ac-i   b-btn-sq b-btn-s-l b-btn-dn b-btn-bw-1 img-d-n img-t-u img-h-n line-solid b-e-ds lbox-d c-s-m   wnd-fe">
	<div class="wnd-page cs-gray ac-twine">

		<div id="wrapper" class="l-w t-07">

			<header id="header" class="l-h">

				<div class="section-wrapper cf">
	<div class="section-wrapper-content cf"><div data-space="true" class="s section header header-03 page sc-d">
	<div class="header-wrapper header-fixed wnd-fixed header-bg cf">
	<div class="section-bg s-bg">
		<div class="section-bg-layer">
			
		</div>
		<div class="section-bg-layer section-bg-overlay"></div>
	</div>

	<div class="nav-line initial-state section-inner">
		<div class="logo logo-default josefix wnd-logo-with-text wnd-iar-1-1" id="wnd_LogoBlock_939848" data-wnd_mvc_type="wnd.fe.LogoBlock">
    <div class="logo-content">
        <a href="../home/index.html">
            
	        <div class="logo-text">
                <span class="logo-text-cell"></span>
	        </div>
        </a>
    </div>
</div>
		

		<nav id="menu" role="navigation"><div class="menu-font">
	<a href="#" class="close-menu" rel="nofollow">
		<span>Close Menu</span>
	</a>
	<ul class="level-1"><li>
	
	<?php
	include("../../../config/config.php");
	// Get contents of the lspd table
	$reponse = $bdd->query('SELECT * FROM lspd_presentation');
	
	// Display each entry one by one
	while ($data = $reponse->fetch()) {
	?>
			<a class="menu-item" href="index.php"><span class="menu-item-text"><?php echo $data['nav_accueil']; ?></span></a>
			
		</li><li>
			<a class="menu-item" href="a-propos.php"><span class="menu-item-text"><?php echo $data['nav_a_propos']; ?></span></a>
			
		</li><li>
			<a class="menu-item" href="recrutement.php"><span class="menu-item-text"><?php echo $data['nav_recrutement']; ?></span></a>
			
		</li>
	</ul><span class="more-text">Plus</span>
</div></nav><div id="menu-mobile" class="hidden">
			<a href="#" id="menu-submit"><span></span>Menu</a>
		</div>
	</div>
</div>
</div></div>
</div>

			</header><main id="main" class="l-m" role="main">

				<div class="section-wrapper cf">
	<div class="section-wrapper-content cf"><section data-space="true" class="s section default-01 spacing sc-d"><div class="section-bg s-bg">
		<div class="section-bg-layer">
			
		</div>
		<div class="section-bg-layer section-bg-overlay"></div>
	</div>
	<div class="section-inner">
		<div class="content ez cf wnd-no-cols">
	<div class="ez-c"><div class="b-gal b-gal-feed b-gal-grid b cf grid-2" id="wnd_PhotoGalleryBlock_28497">
</div><div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><p class="wnd-align-center"><strong><?php echo $data['success_recrutement']; ?></strong></p></div>
</div><div class="b form block cf typo-03">

	
</div></div>
</div>
	</div>
</section></div>
</div>

			</main><footer id="footer" class="l-f">

				<div class="section-wrapper cf">
	<div class="section-wrapper-content cf"><section wn-border="top" wn-border-element="footer-line" class="s section footer-01 footer-font borderless sc-d"><div class="section-bg s-bg">
		<div class="section-bg-layer">
			
		</div>
		<div class="section-bg-layer section-bg-overlay"></div>
	</div>
	<div class="section-inner">
		<div class="footer-line cf">
			<div class="footer-texts cf">
				<div class="copyright cf">
					<span class="inline-text">
	<span>Los Santos Police Department</span>
</span><br>
					<span class="inline-text">
	<span><b>XLife</b> Tous droits réservés&nbsp;2019-2020</span>
</span>
				</div>
				<div class="system-footer cf">
					<div class="lang-select cf">
	
</div>
				</div>
			</div>
		</div>
	</div>
</section></div>
</div>

			</footer></div>

	</div>
<?php
}
$reponse->closeCursor(); // Complete query ?>

	
<div id="wnd_footer"><style type="text/css">#wnd_footer {display: block; box-sizing: border-box; text-align: center; overflow: hidden; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; position: relative; width: 100%; font-family: Arial, Roboto, Helvetica, sans-serif; font-weight: normal; font-style: normal; font-size: 15px; line-height: 1.5; background-color: rgba(0, 0, 0, 0.7);}#wnd_footer a {color: #fff; text-decoration: none; display: inline-block;}#wnd_footer_left {width: 100%;}#wnd_footer_left_wrapper {padding: 12px 12px 6px;}#wnd_footer_right {width: 100%;}#wnd_footer_right_wrapper {padding: 6px 12px 14px;}#wnd_footer_logo {background: url(https://d1di2lzuh97fh2.cloudfront.net/client/img/wnd-logo2.svg?ph=15f1bfc71f) no-repeat; display: inline-block; width: 103px; height: 20px; opacity: .83;}#wnd_footer_logo b {opacity: 0;}@media only screen and (min-width: 480px) {#wnd_footer_left {float: left; min-height: 60px; width: auto; display: table;}#wnd_footer_left_wrapper {text-align: left; padding: 8px 160px 8px 12px; display: table-cell; vertical-align: middle;}#wnd_footer_right {position: absolute; top: 0; left: auto; right: 12px; bottom: 0; width: auto;}#wnd_footer_right_wrapper {text-align: right; padding: 19px 0;}}@media only screen and (min-width: 768px) {#wnd_footer_left_wrapper {padding: 16px 160px 16px 20px;}#wnd_footer_right {right: 20px;}}@media only screen and (min-width: 1200px) {#wnd_footer_left_wrapper {padding-left: 30px;}#wnd_footer_right {right: 30px;}}@media print {#wnd_footer style {display: none !important;}}</style><div id="wnd_footer_right"></div></div><script type="text/javascript" src="assets/js/script1.js"></script><script type="text/javascript" src="assets/js/script2.js"></script><script type="text/javascript" src="assets/js/script3.js"></script><script type="application/javascript">!function(){if(document.body.classList.contains("wnd-cms")===!1){var e=document.querySelectorAll(".copyright .inline-text"),t=document.getElementsByClassName("sf")[0];null!==e&&([].forEach.call(e,function(e){""===e.querySelector("span").innerHTML.trim()&&(e.className+=" empty")}),void 0!==t&&""===t.querySelector(".sf-content").innerHTML.trim()&&(t.className+=" empty"))}}(),function(){if(0==document.getElementsByClassName("wnd-cms").length)for(var e=document.getElementsByClassName("column-content"),t=0;t<e.length;t++){var s=e[t].querySelector("div"),n=s.getElementsByClassName("b-text-c");void 0!=n[0]&&s.firstChild==s.lastChild&&""===n[0].innerText&&(e[t].classList?e[t].classList.add("column-empty"):(e[t].classList?e[t].classList.contains("column-empty"):new RegExp("\\bcolumn-empty\\b").test(e[t].className))&&(e[t].className+=" column-empty"))}}()</script></script></script></body></html>
