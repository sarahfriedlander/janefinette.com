<?php
	ob_start();
	
	/*
	Name: 		Ryan's Super Awesome Mailer script
	Author: 		Ryan Doherty
	E-mail:		ryan.doherty@gmail.com
	Date: 		3/17/2005 5:22PM
	Description:	This script emails the information that a user submits into the 
				form to the supplied e-mail.
				
				PUT THIS AT THE VERY TOP OF YOUR PAGE, IF THERE IS ANY WHITESPACE
				BEFORE THE BEGINNING OF THIS SCRIPT IT WILL NOT WORK!
	*/
	
	
	function validate_email($email_raw) {

	   // replace any ' ' and \n in the email
	   $email_nr = eregi_replace("\n", "", $email_raw);
	   $email = eregi_replace(" +", "", $email_nr);
	  
	   // do the ergei to look for bad characters
	  if( !eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*".
	"@([a-z0-9]+([\.-][a-z0-9]+))*$",$email) ){
	   // okay not a good email
	   
	   return false;
	   } else {
	       // okay now check the domain
	       // split the email at the @ and check what's left
	       $item = explode("@", $email);
	       $domain = $item["1"];
	       if( gethostbyname($domain) == $domain) {
	           $feedback = "Error: $domain isn't a valid domain!";
	           return false;
	       } else {
	           $feedback = "valid";
	           return true;
	       }
	   }
	}
	
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		
		//IP addresses to block if someone is spamming the form
		$referers = array();
		
		//Email address to send the form info
		$toEmail = "jfriedsew@aol.com";
		//What page to send them after the form is submitted
		$redirect = "thanks.php";
		
		$errorMessage = "";
		
		//Check to see if the IP is not blocked
		if(!in_array($_SERVER['REMOTE_ADDR'], $referers))
		{
			
			$_POST = array_map("trim", $_POST);
			
			if($_POST['name'] == "")
			{
				$errorMessage .= '<li>Your name</li>';
			}
			
			if($_POST['email'] == "")
			{
				$errorMessage .= '<li>Email</li>';
			}
			elseif(!validate_email($_POST['email']))
			{
				$errorMessage .= '<li>Invalid Email Address</li>';
			}
			
		
				
			
			
			if($errorMessage == "")
			{
				
				$body = 'The following was submitted on '.date("F j, Y, g:i a").".\n\n";
				$body .= 'Name: '.$_POST['name']."\n";
				$body .= 'Email: '.$_POST['email']."\n";
				$body .= 'Phone: '.$_POST['phone']."\n";
				$body .= 'Country: '.$_POST['country']."\n";
				$body .= 'Subject: '.$_POST['subject']."\n";
				$body .= 'Comments: '.$_POST['comments']."\n\n\n\n\n\n\n\n";
				
				$body .= 'IP: '.$_SERVER['REMOTE_ADDR']."\n";
				$body .= 'Browser & OS: '.$_SERVER['HTTP_USER_AGENT']."\n"; 
				
				$headers = 'From: '.$_POST['email']."\r\n" .
				   'Reply-To: '.$_POST['email']."\r\n" .
				   'X-Mailer: PHP/' . phpversion();
				
				mail($toEmail, "Contact info form submission from Friedlander Sewing Website", $body, $headers);
				
				header("Location: $redirect");
			}
			else
			{
				$errorMessage = '<p><font color="red">The following information was incorrect and/or missing:<ul>'.$errorMessage.'</ul></font></p>';
			}
				
		}
	}
	




?>