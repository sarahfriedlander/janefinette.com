<?php
	$thisPage = "Contact";

	include('includes/config.php');

	include('php/contact.inc.php');
	
	//Configuration variables for template
	$pageName = "Contact";
	$leftContent = "page_content/contact_left_content.php";
	$mainContent = "page_content/contact_content.php";
	
	include('templates/main.php');
?>