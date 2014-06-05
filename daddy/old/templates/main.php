<html>
<head>
<title>Friedlander Sewing - <?php echo $pageName;?> - Industrial Sewing Machines, Highlead Sewing Machines, Global Sewing Machine Sales</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- ImageReady Preload Script (HeaderDesign.psd) -->
<script type="text/javascript">
<!--

function newImage(arg) {
	if (document.images) {
		rslt = new Image();
		rslt.src = arg;
		return rslt;
	}
}

function changeImages() {
	if (document.images && (preloadFlag == true)) {
		for (var i=0; i<changeImages.arguments.length; i+=2) {
			document[changeImages.arguments[i]].src = changeImages.arguments[i+1];
		}
	}
}

var preloadFlag = false;
function preloadImages() {
	if (document.images) {
		home_over = newImage("/images/home-over.gif");
		about_over = newImage("/images/about-over.gif");
		products_over = newImage("/images/products-over.gif");
		high_lead_sewing_over = newImage("/images/high-lead-sewing-over.gif");
		contact_us_over = newImage("/images/contact_us-over.gif");
		preloadFlag = true;
	}
}

// -->
</script>
<!-- End Preload Script -->
<link href="/friedlandersewing.css" rel="stylesheet" type="text/css">
<meta content="description" content="Internation buyers and sellers of industrial sewing machines. United States agents for Highlead brand sewing machines.">
</head>
<body onLoad="preloadImages();">
<!-- ImageReady Slices (HeaderDesign.psd) -->
<div align="center">
<table class="container" border="0" cellspacing="0" cellpadding="0" width="760">
<tr>
<td>
<table width="760" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="7">
			<img src="/images/top_grey_line.gif" width="760" height="11" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
		<a href="/index.php">
			<img src="/images/logo.gif" width="234" height="88" alt="Friedlander Sewing Machine Co., Inc" border="0"></a></td>
		<td colspan="4">
			<img src="/images/tagline.gif" width="526" height="88" alt="Buyers and sellers of Highlead sewing machines"></td>
	</tr>
	<tr>
	<!-- Navigation -->
		<td>
			<img src="/images/tagline-04.gif" width="66" height="1" alt=""></td>
		<td rowspan="3">
			<a href="/about.php"
				onmouseover="changeImages('about', '/images/about-over.gif'); return true;"
				onmouseout="changeImages('about', '/images/about.gif'); return true;"
				onmousedown="changeImages('about', '/images/about-over.gif'); return true;"
				onmouseup="changeImages('about', '/images/about-over.gif'); return true;">
				<img name="about" src="/images/about.gif" width="72" height="26" border="0" alt="About"></a></td>
		<td rowspan="3">
			<a href="/products/index.php"
				onmouseover="changeImages('products', '/images/products-over.gif'); return true;"
				onmouseout="changeImages('products', '/images/products.gif'); return true;"
				onmousedown="changeImages('products', '/images/products-over.gif'); return true;"
				onmouseup="changeImages('products', '/images/products-over.gif'); return true;">
				<img name="products" src="/images/products.gif" width="96" height="26" border="0" alt="Products"></a></td>
		<td rowspan="3">
			<a href="/highlead/index.php"
				onmouseover="changeImages('high_lead_sewing', '/images/high-lead-sewing-over.gif'); return true;"
				onmouseout="changeImages('high_lead_sewing', '/images/high-lead-sewing.gif'); return true;"
				onmousedown="changeImages('high_lead_sewing', '/images/high-lead-sewing-over.gif'); return true;"
				onmouseup="changeImages('high_lead_sewing', '/images/high-lead-sewing-over.gif'); return true;">
				<img name="high_lead_sewing" src="/images/high-lead-sewing.gif" width="145" height="26" border="0" alt="Highlead Sewing Machines"></a></td>
		<td rowspan="3">
			<a href="/contact.php"
				onmouseover="changeImages('contact_us', '/images/contact_us-over.gif'); return true;"
				onmouseout="changeImages('contact_us', '/images/contact_us.gif'); return true;"
				onmousedown="changeImages('contact_us', '/images/contact_us-over.gif'); return true;"
				onmouseup="changeImages('contact_us', '/images/contact_us-over.gif'); return true;">
				<img name="contact_us" src="/images/contact_us.gif" width="107" height="26" border="0" alt="Contact Us"></a></td>
		<td colspan="2">
			<img src="/images/tagline-13.gif" width="274" height="1" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<a href="/index.php"
				onmouseover="changeImages('home', '/images/home-over.gif'); return true;"
				onmouseout="changeImages('home', '/images/home.gif'); return true;"
				onmousedown="changeImages('home', '/images/home-over.gif'); return true;"
				onmouseup="changeImages('home', '/images/home-over.gif'); return true;">
				<img name="home" src="/images/home.gif" width="66" height="25" border="0" alt="Home"></a></td>
		<td>
			<img src="/images/HeaderDesign_11.gif" width="179" height="24" alt=""></td>
		<td rowspan="2">
			<img src="/images/HeaderDesign_12.gif" width="95" height="25" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="/images/HeaderDesign_13.gif" width="179" height="1" alt=""></td>
	</tr>
</table>


<table width="760" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="2"><img src="<?php echo $headerImage;?>" alt="<?php echo $headerImageAlt;?>"></td>
	</tr>
	<tr>
	
		<!-- Left Bar -->
		<td valign="top" width="220">
		    <div id="leftcontent">
			<?php include($leftContent);?>
    </div>
		</td>
		
		<!-- Main Content -->
		<td valign="top" width="540">
			<div id="content">
			<?php include($mainContent);?>
			</div>
		</td>
	
	</tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="0" class="footer">
	<tr>
		<td align="center">
		<div class="footer">
			<a href="/index.php">Home</a> 
			| <a href="/about.php">About</a> 
			| <a href="/products/index.php">Products</a> 
			| <a href="/highlead/index.php">Highlead Sewing</a> 
			| <a href="/contact.php">Contact Us</a><br/>
			Copyright <?php echo date("Y");?> Friedlander Sewing :: <a href="/privacy.php">Privacy Policy</a>		</div>
		</td>
	</tr>
</table>

</td>
</tr>
</table>
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3942294-3");
pageTracker._initData();
pageTracker._trackPageview();
</script>


</body>
</html>

