<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KONDAPAK - Donors</title>

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
	padding-left:20px; 
	padding-right:20px;
	padding-top:10px;
	
	
}
-->
</style></head>

<body>
<div class="infra">
<font style="font-family:Maiandra GD; font-size:26px; color:#bc1d03; font-weight:bold">Donor's List (Kondapak)</font><p>
 <table width="720"  border="0" cellspacing="0" cellpadding="0" bordercolor="#999999">

 <tr>
 <td>
  <A onclick="document.getElementById('1').style.display='block'; document.getElementById('2').style.display='none'; document.getElementById('3').style.display='none'; " href="#"><img src="images/donors1.jpg" border="0"></A>
 
 <A onclick="document.getElementById('2').style.display='block'; document.getElementById('1').style.display='none'; document.getElementById('3').style.display='none'; " href="#"><img src="images/donors2.jpg" border="0"></A>
 
 <A onclick="document.getElementById('3').style.display='block';  document.getElementById('1').style.display='none'; document.getElementById('2').style.display='none'; " href="#"><img src="images/donors3.jpg" border="0"></A>
 
<DIV id=1 style="Z-INDEX: 1; width:690px; height:640px; overflow:auto; font-family: arial; border:thin; border-style:solid; border-color:#d8cc96;
font-size:13px; font-family:verdana; line-height:20px; padding-top:10px; padding-left:10px; padding-right:10px; text-align:justify">
<b>Donor's for Rudreshwaralayam Construction:</b> 
<p>                   
                    <table width="650"  border="0" cellspacing="1" cellpadding="2" bordercolor="#999999" align="center">
                   
                    
                    <tr  bordercolor="#ffffff" bgcolor="#fdddcb">
                    <td width="38%" style="padding-left:10px;" align="center"><strong>Name</strong></td>
     	 			<td width="30%" style="padding-left:10px;" align="center"><strong>Father or Care of</strong></td>
                    <td width="16%" style="padding-left:10px;" align="center"><strong>Village</strong></td>
                    <td width="16%" style="padding-left:10px;" align="center"><strong>Amount(Rs.)</strong></td>
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

$sql = 'SELECT Prefix, FName, LName, Father, Village, Amount FROM `tblDonors` ORDER BY Amount DESC, FName ASC'; 

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
            <?php } $counter += 1;?>    
             <td><?php echo $row['Prefix'];?><span>&nbsp;</span><?php echo $row['FName'];?> <span>&nbsp;</span><?php  echo $row['LName'];?></td>
             <td><?php echo $row['Father'];?></td>
             <td><?php echo $row['Village'];?></td>
             <td align="right"><?php echo $row['Amount'];?></td>
             </tr>
             <?php  
}
mysql_free_result($result);
?>
   <tr>

<td colspan="4"><span class="style1"><strong>Note:</strong> This is not the completed list, listed names are who donated more than Rs. 5000 and more, this will be get updated as donations are received. Please send your questions/comments and suggestions at. <b><A href=mailto:kondapak.com@gmail.com>kondapak.com@gmail.com</A></b></span></td>

</tr>
                   </table><p>
</div>

<DIV id=2 style="Z-INDEX: 1; width:685px;  height:640px;; overflow:auto; font-family: arial; border:thin; border-style:solid; border-color:#d8cc96;
font-size:13px; font-family:verdana; line-height:20px; padding-top:10px; padding-left:10px; padding-right:10px; text-align:justify; display:none;">
<b>Manchi Manasulu(KOSA):</b> <p>
Donors and Details(Listed names are who helped with considerable amount of money etc.)<p>
This is not the complete and finished list, we are updating as per the members suggestions, there may be small changes or mistakes in our list we will update the changes as per suggestions we receive. If you have any please email us at <a href="mailto:kondapak.com@gmail.com">kondapak.com@gmail.com</a><p>
Note: Based on the donorâs interest we would display their contact details.<p>
<b>Agaiah Gudala:</b>
    Agaiah Gaaru donated Rs.5,00,000 for Jr.College and he is supporting to the college by various activities paying fee to poor students, conducting seminars on personality development tips for better studies and trying to support in all aspects. He also gives merit scholarship to 10th class students(Boys and Girls) with 70% (or 1st ranker) every year.
    <div align="center"><img src="images/page1a.jpg" width="450" height="750"/></div>
</div>

<DIV id=3 style="Z-INDEX: 1; width:690px; height:640px; overflow:auto; font-family: arial; border:thin; border-style:solid; border-color:#d8cc96;
font-size:12px; font-family:verdana; line-height:20px; padding-top:10px; padding-left:10px; padding-right:10px; text-align:justify; display:none;">
<b>Sri SitaRama ChandraSwami Temple & Shopping Complex Donor's List</b> 
<p>                   
                    <table width="650"  border="0" cellspacing="1" cellpadding="2" bordercolor="#999999" align="center">
                   
                    <tr><td align="center" colspan="3"><font style="color:red; font-weight:bold"> -: Received Donations / Expenditures Details as of March 2010 :- </font></td></tr>
                    <tr  bordercolor="#ffffff" bgcolor="#fdddcb">
                    <td width="45%" style="padding-left:10px;" align="center"><strong>Donor's Name</strong></td>
     	 			<td width="35%" style="padding-left:10px;" align="center"><strong>Donation</strong></td>
                    <td width="20%" style="padding-left:10px;" align="center"><strong>Value(Rs.)</strong></td>
                   
   </tr>
                    <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td style="padding-left:10px;">Sri Mandapally LaxmaReddy</td>
     				  <td  style="padding-left:10px;">Place for Shopping Complex</td>
                      <td  style="padding-right:10px;" align="right">50,000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#faf2cb" height="30px">
                      <td style="padding-left:10px;">Sri S Ramalinga Reddy (Ex-MLA)</td>
     				  <td  style="padding-left:10px;">200 bags cement</td>
                      <td  style="padding-right:10px;" align="right">40,000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td style="padding-left:10px;">Sri Dudam Venkateshwarlu S/O Srihari</td>
     				  <td  style="padding-left:10px;">200 bags cement</td>
                      <td  style="padding-right:10px;" align="right">40,000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#faf2cb" height="30px">
                      <td style="padding-left:10px;">Sri Akula Veeresham and Sri Tamishetti Mallikarjun</td>
     				  <td  style="padding-left:10px;">Electriciti meterial and fitting</td>
                      <td  style="padding-right:10px;" align="right">20,000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td style="padding-left:10px;">Sri Barre Srinival (Upa Surpunch)</td>
     				  <td  style="padding-left:10px;">Brick</td>
                      <td  style="padding-right:10px;" align="right">5000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#faf2cb" height="30px">
                      <td style="padding-left:10px;">Sri Barre Yaddayya</td>
     				  <td  style="padding-left:10px;">Brick</td>
                      <td  style="padding-right:10px;" align="right">5000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td style="padding-left:10px;">&nbsp; </td>
     				  <td  style="padding-left:10px;" align="center"><b>Total</b></td>
                      <td  style="padding-right:10px;" align="right"><b>1,60,000</b></td>
					
   </tr>
   
  
   
                   </table><p>
                   
 <table width="650"  border="0" cellspacing="1" cellpadding="2" bordercolor="#999999" align="center">
                   
                    <tr><td align="center" colspan="3"><font style="color:red; font-weight:bold">-: Donations received in Cash :-</font></td></tr>
                    <tr  bordercolor="#ffffff" bgcolor="#fdddcb">
                    <td width="80%" style="padding-left:10px;" align="center"><strong>Donor's Name</strong></td>
     	 			<td width="20%" style="padding-left:10px;" align="center"><strong>Amount(Rs.)</strong></td>
                   
   </tr>
                    <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td style="padding-left:10px;">Sri Bejgam Chandrayya</td>
     				  <td  style="padding-right:10px;" align="right">50,000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#faf2cb" height="30px">
                      <td style="padding-left:10px;">Smt. Ellanki Jyothi Sambasiva Reddy (USA)</td>
     				   <td  style="padding-right:10px;" align="right">50,000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td style="padding-left:10px;">Sri Dommata Rajavenkata Reddy and Sri Pratap Reddy sons (USA)</td>
     				  <td  style="padding-right:10px;" align="right">50,000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#faf2cb" height="30px">
                      <td style="padding-left:10px;">Sri Devulapally purushotham(Kiodipally)</td>
     				 <td  style="padding-right:10px;" align="right">50,000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td style="padding-left:10px;">Sri Devulaplly Vitoba(Sholapur)</td>
     				  <td  style="padding-right:10px;" align="right">50,000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#faf2cb" height="30px">
                      <td style="padding-left:10px;">Sri SitaRama Chandraswami Temple (Kondapak)</td>
     				  <td  style="padding-right:10px;" align="right">30,000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td style="padding-left:10px;">Sri Dr. Biru Venkataramana Reddy(Nizamabad)</td>
     				   <td  style="padding-right:10px;" align="right">17,000</td>
					
   </tr>
   
   <tr bordercolor="#ffffff" bgcolor="#faf2cb" height="30px">
                      <td style="padding-left:10px;">Sri A. Muthyam Reddy (Hyderabad)</td>
     				  <td  style="padding-right:10px;" align="right">15,015</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td style="padding-left:10px;">Sri Gudala Ashok (Hyderabad)</td>
     				   <td  style="padding-right:10px;" align="right">11,000</td>
					
   </tr>
    <tr bordercolor="#ffffff" bgcolor="#faf2cb" height="30px">
                      <td style="padding-left:10px;">Sri Cheryala Gopalakrishnamurthy (Rajgopalpeta)</td>
     				  <td  style="padding-right:10px;" align="right">6,000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td style="padding-left:10px;">Sri Gundaram Sreedhar Reddy</td>
     				   <td  style="padding-right:10px;" align="right">5,000</td>
					
   </tr>
     <tr bordercolor="#ffffff" bgcolor="#faf2cb" height="30px">
                      <td style="padding-left:10px;">Smt. P. Venkatalaxmi Madhava Reddy (GodavariKhani)</td>
     				  <td  style="padding-right:10px;" align="right">5,000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td style="padding-left:10px;">Sri Chekka Yadaiah (HYD)</td>
     				   <td  style="padding-right:10px;" align="right">5,000</td>
					
   </tr>
     <tr bordercolor="#ffffff" bgcolor="#faf2cb" height="30px">
                      <td style="padding-left:10px;">Sri Dommata Tulasi Ramulu (Nizamabad)</td>
     				  <td  style="padding-right:10px;" align="right">5,000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td style="padding-left:10px;">Smt. Susheela Bhoopathi Reddy Kommuri</td>
     				   <td  style="padding-right:10px;" align="right">5,000</td>
					
   </tr>
     <tr bordercolor="#ffffff" bgcolor="#faf2cb" height="30px">
                      <td style="padding-left:10px;">Smt. Dr. Sunita Gundamraj (USA)</td>
     				  <td  style="padding-right:10px;" align="right">5,000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td style="padding-left:10px;">Small amounts together</td>
     				   <td  style="padding-right:10px;" align="right">22,770</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td style="padding-left:10px;" align="right"><b>Total</b></td>
     				   <td  style="padding-right:10px;" align="right"><b>3,81,785</b></td>
					
   </tr>
                   </table><p>
                   <table width="650"  border="0" cellspacing="1" cellpadding="2" bordercolor="#999999" align="center">
                   
                    <tr><td align="center" colspan="3"><font style="color:red; font-weight:bold"> -: Construction Expenditure :- </font></td></tr>
                    <tr  bordercolor="#ffffff" bgcolor="#fdddcb">
                    <td width="80%" style="padding-left:10px;" align="center"><strong>Name</strong></td>
     	 			<td width="20%" style="padding-left:10px;" align="center"><strong>Amount(Rs.)</strong></td>
                   
   </tr>
                    <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td style="padding-left:10px;">Iron + Concrete + Sand + Brick etc..</td>
     				<td  style="padding-right:10px;" align="right">2,58,755</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#faf2cb" height="30px">
                      <td style="padding-left:10px;">Paid to Mestri Ghanapuram Narsimhulu </td>
     				  <td  style="padding-right:10px;" align="right">70,000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td style="padding-left:10px;">Paid to Centring Satthaiah </td>
     				  <td  style="padding-right:10px;" align="right">54,000</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#faf2cb" height="30px">
                      <td style="padding-left:10px;">Other expenditures( Inauguration + Salaries + Interest and Labor) </td>
     				  <td  style="padding-right:10px;" align="right">86,100</td>
					
   </tr>
   <tr bordercolor="#ffffff" bgcolor="#efe5bb" height="30px">
                      <td style="padding-left:10px;" align="right"><strong>Total</strong></td>
     				  <td  style="padding-right:10px;" align="right"><strong>4,68,855</strong></td>
					
   </tr>
					<tr bordercolor="#ffffff" bgcolor="#FFCC66" height="30px">
                      <td style="padding-left:10px;" align="center"><strong>Still we are in need of</strong></td>
     				  <td  style="padding-right:10px;" align="left"><strong>Rs. 87,070</strong></td>
					
   </tr>
  
   
                   </table><p>
</div>
 </td>
 </tr>                  
</table>
</div>
</body>
</html>