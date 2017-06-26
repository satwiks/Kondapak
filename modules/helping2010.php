<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KONDAPAK - Helping hands</title>

<link href="css/kpk.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-color: #fff9df;
}
.infra {
	line-height: 19px;
	font-family: verdana;
	font-size: 12px;
	height:700px; overflow:auto;
	scrollbar-base-color: #c7c7c9;
	width:690px;
	padding-left:20px; 
	padding-right:30px;
	padding-top:10px;
	text-align:justify;
	
}

.helpingbg
{
  background:url(images/helping.jpg) no-repeat center; vertical-align:center;
  }
-->
</style></head>

<body>

<table><tr><td class="helpingbg">
<div class="infra">
<font style="font-family:Maiandra GD; font-size:26px; color:#bc1d03; font-weight:bold">2010 Helping Hands Projects</font><p>
Dear Kondapak Friends,<br>
We were able to execute identified  "2010 Helping Hands Projects"  successfully, we appreciate their help each and every one who participated in this project.<p>

Projects under taken for educational support and executed are:<p>

<strong>1. Library</strong>: Buy some useful books to our library. Initial discussion were held with Perla Veeresham sir and Librarian, they are so happy to provide the information what books are important and have list ready. Expected cost will be approx 35,000 Rs including books and library setup cost.
<p>
 <a href="http://picasaweb.google.com/112170760842163493852/HelpingHands2010?authkey=Gv1sRgCMmlye-HhYD_sgE#5480786287773395650" target="inlineframe"><img src="../images/hh2010.gif" width="125" align="left" alt="Click on this image to see photos" title="Click on this image to see photos"></a>
<p><span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="style1"><a href="http://picasaweb.google.com/112170760842163493852/HelpingHands2010?authkey=Gv1sRgCMmlye-HhYD_sgE#5480786287773395650"  target="innerFrame"><strong>Thanks to The Donors:(Click here to to see photos)</strong> </a></span> Some amount spent to buy books for library and delivered to librarian Linga Reddy, for details have a look at these photos.</span><p>
    <br><strong>2. Computer Training & Coaching</strong>: Establish computers institute, develop & conduct regular computer trainings. D. Srinivas Reddy (S/O vepalabavi Narsimha Reddy) and Perla Veeresham sir worked with Infosys contacts to get sponsorship. Infosys agreed and donated 10 computers. Work remained to setup computers, infrastructure and conduct trainings.
    <p>

 <a href="http://picasaweb.google.com/112170760842163493852/Computer_lab_inauguration?authkey=Gv1sRgCL3I-Kiak4rEuwE#" target="inlineframe"><img src="../images/pclab.jpg" width="125" align="left" alt="Click on this image to see photos" title="Click on this image to see photos"></a>
<p><span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="style1"><a href="http://picasaweb.google.com/112170760842163493852/Computer_lab_inauguration?authkey=Gv1sRgCL3I-Kiak4rEuwE#"  target="innerFrame"><strong>Thanks to The Donors:(Click here to to see photos)</strong> </a></span> All the pledged amount has been transferred to Perla Veeresham garu and he spent his valuable time on computer lab setup and inaugurated by our Ananthula Sharada(MPP) and Rama Krishna Reddy B(Sarpanch) in the presence of NRI's parents, for more details have a look at these photos.  Once again we highly appreciate each and every one who contributed their efforts in this project.</span><p>
<br> 

  For any questions please feel free to contact: 
                   
  <table width="600"  border="0" cellspacing="1" cellpadding="2" bordercolor="#999999" align="center">
                                       
                    <tr  bordercolor="#ffffff" bgcolor="#efe5bb">
                    <td width="40%"  style="padding-left:5px;">Perla Veeresham @Kondapak</td>
     	 			<td width="40%"  style="padding-left:5px;">perla.veeresham@gmail.com</td>
                    <td width="30%" >998-923-4689</td>
   </tr>

   <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td  style="padding-left:5px;">Kondapak web site Admin</td>
     				  <td  style="padding-left:5px;" >kondapak.com@gmail.com</td>
                      <td  >801-810-6268</td>

   </tr>
      </table><p>
      <table align="center">
      <tr><td><span class="style1">Here is the balance sheet on this project I received from Sri Perla Veeresham Sir, he spent some money (Rs. 12,270 ) from his pocket. So, still we are expecting some donations from you to pay this money back to Veeresham sir, please  contact us if you are interested to donate, your help would be greatly appreciated.</span></td></tr>
<tr ><td align="center"><img src="balancesheet.jpg" width="472"  height="384" align="middle" /></td></tr>
</table>
      <strong>Donors deatails for above projects</strong><p>
        <table width="670"  border="0" cellspacing="1" cellpadding="2" bordercolor="#999999" align="center">
                                       
        <tr bordercolor="#ffffff" bgcolor="#fdddcb" height="30px">
                      <td >&nbsp;</td>
     				  <td  >&nbsp;</td>
                      <td colspan="2" align="center"><b>Amount(approx)</b> </td>
                      <td  >&nbsp;</td>
                   

   </tr>
                    <tr  bordercolor="#ffffff" bgcolor="#fdddcb">
                    <td  align="center"><b>Name</b></td>
     	 			<td  align="center"><b>Location</b></td>
                    <td  align="center"><b>&nbsp;USD&nbsp;</b></td>
                    <td  align="center"><b>INR(Rs.)</b></td>
                    <td  align="center"><b>Remarks</b></td>
   </tr>                   
		<?
      $conn = mysql_connect("mysql11.000webhost.com", "a3199749_kpk", "mallesh15");
    
    if (!$conn) {
        echo "Unable to connect to DB: " . mysql_error();
        exit;
    }
    
    if (!mysql_select_db("a3199749_kpk")) {
        echo "Unable to select mydbname: " . mysql_error();
        exit;
    }
    
    $sql = 'SELECT * FROM `tblHelpingHands` ORDER BY Amount_INR DESC, FName ASC';
    
    $result = mysql_query($sql);
    $sumAmount = 0.0;
    if (!$result) {
        echo "Could not successfully run query ($sql) from DB: " . mysql_error();
        exit;
    }
    
    if (mysql_num_rows($result) == 0) {
        echo "No rows found, nothing to print so am exiting";
        exit;
    }
    
    // While a row of data exists, put that row in $row as an associative array
    // Note: If you're expecting just one row, no need to use a loop
    // Note: If you put extract($row); inside the following loop, you'll
    //       then create $userid, $fullname, and $userstatus
	$counter = 0;
    while ($row = mysql_fetch_assoc($result)) {
     if(($counter % 2) == 0){?>
    <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
    <? }else{ ?>
    <tr bordercolor="#ffffff" bgcolor="#faf2cb" height="30px">
    <? } $counter += 1?>     

    <TD style="padding-left:5px;"><? echo $row['Prefix']; echo $row['FName'];?> <span>&nbsp;</span><?  echo $row['LName'];?></TD>
    <TD><? echo $row['Location'];?></TD>
    <TD align="center"><? echo $row['Amount_USD'];?></TD><TD><? echo $row['Amount_INR'];?></TD>
    <TD align="center"><? echo $row['Remarks'];?></TD></tr>
    
    <? $sumAmount += $row['Amount_INR'];
    }
    mysql_free_result($result);
    ?>
   
  
      </table><p>
      Note:This is not the completed list, this will be get updated as donations are received. Please send your questions/comments and suggestions at. <a href="mailto:kondapak.com@gmail.com">kondapak.com@gmail.com</a>
                </div>
</td></tr></table>
</body>
</html>
