<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KONDAPAK - NRIs</title>

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
	width:720px;
	padding-left:20px; 
	padding-right:20px;
	padding-top:10px;
	text-align:justify;
	
}
-->
</style></head>

<body>
<div class="infra">
<font style="font-family:Maiandra GD; font-size:26px; color:#bc1d03; font-weight:bold">Non-Residents of India</font><p>
  <strong>Non-Residents of India</strong>(Listed names are in alphabetical order)
  This   is not the complete and finished list, we are updating as per the   members suggestions, there may be small changes or mistakes in our list   we will update the changes as per suggestions we receive. If you have   any please email us at. <a href="mailto:kondapak.com@gmail.com">kondapak.com@gmail.com</a>

<table width="600"  border="0" cellspacing="1" cellpadding="2" bordercolor="#999999" align="center">
                    <tr><td align="center" colspan="3"><font style="color:#FF0000; font-weight:bold;">-: UNITED STATES :-</font></td></tr>
                    
                    <tr  bordercolor="#ffffff" bgcolor="#fdddcb">
                    <td width="50%" style="padding-left:15px;" align="center"><strong>NAME</strong></td>
     	 			<td width="50%" style="padding-left:15px;" align="center"><strong>ADDRESS</strong></td>
   </tr>
                   <?php 
  $conn = mysql_connect("localhost", "id1705420_a3199749_kpk", "mallesh15");

if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("id1705420_a3199749_kpk")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}

$sql = 'SELECT * FROM `tblNRIS` WHERE `Country` = 1 order by `FName`';

$result = mysql_query($sql);

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
<?php }else{ ?>
<tr bordercolor="#ffffff" bgcolor="#faf2cb" height="30px">
<?php } $counter += 1?> 
 <td style="padding-left:15px;"><?php echo $row['Prefix']; echo $row['FName'];?> <span>&nbsp;</span><?php  echo $row['LName'];?></td>
 <td style="padding-left:15px;"><?php echo $row['Address'];?></td>
 </tr>
 <?php 
}
mysql_free_result($result);
?>
                   </table><p>
                   
  <table width="600"  border="0" cellspacing="1" cellpadding="2" bordercolor="#999999" align="center">
                    <tr><td align="center" colspan="3"><font style="color:#FF0000; font-weight:bold;">-: UNITED KINGDOM and AUTRALIA etc.:-</font></td></tr>
                    
                    <tr  bordercolor="#ffffff" bgcolor="#fdddcb">
                    <td width="50%" style="padding-left:15px;" align="center"><strong>NAME</strong></td>
     	 			<td width="50%" style="padding-left:15px;" align="center"><strong>ADDRESS</strong></td>
   </tr>
                                       <?php
  $conn = mysql_connect("localhost", "id1705420_a3199749_kpk", "mallesh15");

if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("id1705420_a3199749_kpk")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}

$sql = 'SELECT * FROM `tblNRIS` WHERE `Country` = 2 order by `FName`';

$result = mysql_query($sql);

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
?>
<?php if(($counter % 2) == 0){?>
<tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
<?php }else{ ?>
<tr bordercolor="#ffffff" bgcolor="#faf2cb" height="30px">
<?php } $counter += 1?> 
 <td style="padding-left:15px;"><?php echo $row['Prefix']; echo $row['FName'];?> <span>&nbsp;</span><?php  echo $row['LName'];?></td>
 <td style="padding-left:15px;"><?php echo $row['Address'];?></td>
 </tr>
 <?php 
}
mysql_free_result($result);
?>
                   </table>
                   <p>
                   
  <table width="600"  border="0" cellspacing="1" cellpadding="2" bordercolor="#999999" align="center">
                    <tr><td align="center" colspan="3"><font style="color:#FF0000; font-weight:bold;">-: UAE :-</font></td></tr>
                    
                    <tr  bordercolor="#ffffff" bgcolor="#fdddcb">
                    <td width="50%" style="padding-left:15px;" align="center"><strong>NAME</strong></td>
     	 			<td width="50%" style="padding-left:15px;" align="center"><strong>ADDRESS</strong></td>
   </tr>
                                       <?php 
  $conn = mysql_connect("localhost", "id1705420_a3199749_kpk", "mallesh15");

if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("id1705420_a3199749_kpk")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}

$sql = 'SELECT * FROM `tblNRIS` WHERE `Country` = 3 order by `FName`';

$result = mysql_query($sql);

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
?>
<?php if(($counter % 2) == 0){?>
<tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
<?php }else{ ?>
<tr bordercolor="#ffffff" bgcolor="#faf2cb" height="30px">
<?php }$counter += 1 ?> 
 <td style="padding-left:15px;"><?php echo $row['Prefix']; echo $row['FName'];?> <span>&nbsp;</span><?php  echo $row['LName'];?></td>
 <td style="padding-left:15px;"><?php echo $row['Address'];?></td>
 </tr>
 <?php 
}
mysql_free_result($result);
?>
                       </table>
                </div>
</body>
</html>