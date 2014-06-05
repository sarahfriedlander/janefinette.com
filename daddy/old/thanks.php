<?php
	
	include('includes/config.php');
	
	include('php/contact.inc.php');
	
	//Configuration variables for template
	$pageName = "Contact Us";
	$headerImage = "/images/titles/title_contactus.jpg";
	$headerImageAlt = "Contact Us";
	$leftContent = "page_content/contact_left_content.php";
	$mainContent = "page_content/contact_thanks.php";
	
	include('templates/main.php');
?>