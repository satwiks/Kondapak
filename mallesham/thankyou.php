<center><h1>Email Accepted (or Not)</h1></center>

<hr>



<?

 // Pull data in from CGI request

$info=$_REQUEST["info"];

$topic=$_REQUEST["topic"];

$name=$_REQUEST["name"];

$send=$_REQUEST["send"];

$toemail=$_REQUEST["toEmail"];

$email=$_REQUEST["email"];



if ($send=="") {   ?>

<P><center>

<P><b>nothing to do</b>

	</center><P>

<?

        }
		

elseif ($toemail=="") {

print ("To Email Address can not be Blank, return to ");

?>

<span><a href="sendmessage.html" target="innerFrame">Contact me.</a></span>

<?

}

elseif ($info=="") {

print ("Blank message, return to ");

?>

<span><a href="sendmessage.html" target="innerFrame">Contact me.</a></span>

<?

}



elseif ($topic=="") {

print ("Subject is required, return to ");

?>

<span><a href="sendmessage.html" target="innerFrame">Contact me.</a></span>

<?

	}



elseif ($name=="")  {  

print ("Name is required, return to ");

?>

<span><a href="sendmessage.html" target="innerFrame">Contact me.</a></span>

<?

	}



elseif (!$send=="")  {  

	// append to subject

$subject = "Subject M - $topic";

	// make up headers -- others added by Procmail

if ($email=="") {

        $email = ("listserv at domain.zone");

        };

$headers =  "X-Mailer: PHP/" . phpversion() . "\r\n";

$headers .= "From: ". "$name ". "<$email> \r\n";

	// mail handling: To, subject, body, headers

 mail(  "$toemail",

	"$subject",

	"$info",

	"$headers");

  ?> 

<pre> 

<? print ("From:  $name\n\n"); ?>

<? print ("Subject: $topic\n\n"); ?>

<? print ($info); ?>

</pre>

<hr>

<center>

<h3>Thank You</h3>

<br>

The information you posted has been sent.

</center>

<P>

<?

// end send text

	}

  ?>



