<?php

$name = $_POST['name'];
$email    = $_POST['email'];
$phone   = $_POST['phone'];
$comments   = $_POST['comments'];
$rating = $_POST['rate'];

if(trim($name) == '') {
	echo '<div class="error_message">Attention! You must enter your name.</div>';
	exit();
}  
else if(trim($email) == '') {
	echo '<div class="error_message">Attention! Please enter a valid email address.</div>';
	exit();
} 
else if(trim($phone) == '') {
	echo '<div class="error_message">Attention! Please enter your phone.</div>';
	exit();
}

else if(trim($comments) == '') {
	echo '<div class="error_message">Attention! Please enter your message.</div>';
	exit();
}


$to = "mohammadashif0045@gmail.com";


$subject = 'You\'ve been contacted by ' . $name . '.';

$msg = "Name: ".$name."\n\nemail: ".$email."\n\nphone: ".$phone."\n\nFeedback:\n".$comments. "\n\nRating: ".$rating;

$headers = "From: $email";

if(mail($to, $subject, $msg, $headers))
 {

	// Email has sent successfully, echo a success page.
	echo "</fieldset>";
    echo "<div id='success_page'>";
	echo "<h1>Your Message Sent Successfully.</h1>";
	echo "<p>Thank you <strong>$name </strong>, your Feedback and Rating Sent Successfully.</p>";
	echo "</div>";
	echo "</fieldset>";

	echo "<a href='index.html'>Return to Home</a>";
} 
else {

	echo 'ERROR!';

}