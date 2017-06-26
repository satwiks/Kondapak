<center><h1>Email Accepted (or Not)</h1></center>
<hr>

<?php 
 // Pull data in from CGI request
$info=$_REQUEST["info"];
$topic=$_REQUEST["topic"];
$name=$_REQUEST["name"];
$send=$_REQUEST["send"];
$email=$_REQUEST["email"];

if ($send=="") {   ?>
<P><center>
<P><b>nothing to do</b>
	</center><P>
<?php 
        }

elseif ($info=="") {
print ("Blank message, return to ");
?>
<span><a href="contactme.html" target="innerFrame">Contact me.</a></span>
<?php 
}

elseif ($topic=="") {
print ("Subject is required, return to ");
?>
<span><a href="contactme.html" target="innerFrame">Contact me.</a></span>
<?php 
	}

elseif ($name=="")  {  
print ("Name is required, return to ");
?>
<span><a href="contactme.html" target="innerFrame">Contact me.</a></span>
<?php 
	}

elseif (!$send=="")  {  
	// append to subject
$subject = "Subject KPK - $topic";
	// make up headers -- others added by Procmail
if ($email=="") {
        $email = ("listserv at domain.zone");
        };
$headers =  "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "From: ". "$name ". "<$email> \r\n";
	// mail handling: To, subject, body, headers
 mail(  "kondapak.com@gmail.com",
	"$subject",
	"$info",
	"$headers");
  ?> 
<pre> 
<?php print ("From:  $name\n\n"); ?>
<?php print ("Subject: $topic\n\n"); ?>
<?php print ($info); ?>
</pre>
<hr>
<center>
<h3>Thank You</h3>
<br>
The information you posted has been sent.
</center>
<P>
<?php 
// end send text
	}
  ?>