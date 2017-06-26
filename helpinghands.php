<?php include_once("imagesFromFolder.php"); ?>
<html>

<head>
    <style>
        #text h1 {
            color: #C12525;
            margin: 0 10px;
        }
        
        .yr {
            display: inline-block;
        }
        
        .yr button {
            height: 25px;
            width: 80px;
            background-color: #bcaa56;
            margin: 20px 5px 0 10px;
            border-radius: 2px;
            border: 1px solid #fff;
        }
        
        .yr button:hover {
            border: 1px solid #333;
        }
        
        .yr button:focus {
            outline: none;
        }
        
        #content {
            height: 620px;
            width: 690px;
            background-color: #fff9df;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 10px;
            border: thin solid rgb(216, 204, 150);
            margin: 10px;
            overflow-y: auto;
            overflow-x: hidden;
        }
        
        .contentWrapper {
            line-height: 20px;
            font-family: verdana;
            font-size: 12px;
        }

        .contentWrapper table {
            font-size:13px;
        }
        
        #image_rotate {
            height:300px !important;
            margin:10px auto;
            overflow:hidden;
        }

        #image_rotate img{
            width:600px;
            height:300px;
        }
    </style>
    <script>
        function myfunction(s) {
            var i, a = ["content_a"];

            for (i = 0; i < a.length; i++) {
                document.getElementById(a[i]).style.display = "none";
            }
            document.getElementById(s).style.display = "block";

        }
    </script>
</head>

<body style="background-color:#fff9df;">
    <div id="text">
        <h1>
        Helping hands 
      </h1>
    </div>
    <div class="yr">
        <button onclick="myfunction('content_a')">
        2017
      </button>
    </div>

    <div id="content">
        <div id="content_a">
            <div class="contentWrapper">
                <p style="text-indent:40px">I am Mallesham Ghanapuram kondapak suffering from(CKD) Chronic kidney disease since last nine months(both the kidneys are failed) . Doctors are advised to go for kidney trans plantation. My wife is the donor for me keeping her life in
                    risk she gave me a second chance to live by donating her kidney to me. The transplantation was done on 19-11-2016. Now we both are patients. We have two kids studying 6th standard. I am in need of your help. Anna if possible please
                    do the needful help for me.i am already messaged all my details to Narsimmulanna. Transplantation was done at: NIMS hospital punjagutta. Hyderabad </p>
                <p>
                    <strong>Patient name: G. Mallesham</strong> <br/>
                    <strong>Admission no. 160909423</strong><br/>
                    <strong>Dept: Nefrology</strong><br/>
                    <strong>Ref.  Doctor: T. Gangadhar(head of the Dept)</strong><br/>
                </p>
                <p> <a href="https://www.gofundme.com/supportmallesh">Support Mallesh G</a></p>
                <p> For Bank account details or any Questions contact kondapak.com@gmail.com or mallesham.g@gmail.com</p>
                <p> Also can contact at (9866003091, 9133068666) </p>
                <p>
                <p>
                    <ul id="image_rotate" style="list-style: none;">  <?php echo getImages("helpinghands") ?> </ul>
                </p>
                <br/>
                <br/>
                <h2 style="margin-left:15px;">Supporters List</h2>
                <p>
                     <table width="650" border="0" cellspacing="1" cellpadding="2" bordercolor="#999999" align="center">


                        <tr bordercolor="#ffffff" bgcolor="#fdddcb">
                            <td width="38%" style="padding-left:10px;" align="center"><strong>Supporter</strong></td>
                            <td width="30%" style="padding-left:10px;" align="center"><strong>Amount_INR</strong></td>
                            <td width="16%" style="padding-left:10px;" align="center"><strong>Amount_USD</strong></td>
                            <td width="16%" style="padding-left:10px;" align="center"><strong>Location</strong></td>
							<td width="16%" style="padding-left:10px;" align="center"><strong>Project_year</strong></td>
                            <td width="16%" style="padding-left:10px;" align="center"><strong>Remarks</strong></td>
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

                        $sql = 'SELECT Prefix, FName, LName, Location, Amount_INR,Amount_USD,Project_year,remarks FROM `tblHelpingHands` where Project_year = "2017" ORDER BY FName ASC,LName ASC'; 

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
                                                                    <td>
                                                                        <?php echo $row['FName'];?> <span>&nbsp;</span>
                                                                        <?php echo $row['LName'];?>
                                                                    </td>
                                                                    <td align="right">
                                                                        <?php echo $row['Amount_INR'];?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['Amount_USD'];?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['Location'];?>
                                                                    </td>
                                                                     <td>
                                                                        <?php echo $row['Project_year'];?>
                                                                    </td>
																	<td>
                                                                        <?php echo $row['remarks'];?>
                                                                    </td>
                                                            </tr>
                                                            <?php   
                        }
                        mysql_free_result($result);  ?>
                            
                    </table>
                <p>
            </div>
        </div>
    </div>
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="/js/jquery.innerfade.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() { 
            $('#image_rotate').innerfade({ 
                speed: 'slow', 
                timeout: 5000, 
                type: 'sequence'
            });
        });
    </script>
</body>

</html>