<?php
//including the database connection file
include_once("config.php");
$nam = $_POST['nam'];
//$result = mysql_query("SELECT * FROM Story ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM Story WHERE name='$nam'"); // using mysqli_query instead
?>
<!doctype html>
<!doctype html>
<html>
<head>
<title></title>
<style type="text/css">
/* CLIENT-SPECIFIC STYLES */
body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
img { -ms-interpolation-mode: bicubic; }

/* RESET STYLES */
img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
table { border-collapse: collapse !important; }
body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }

/* iOS BLUE LINKS */
a[x-apple-data-detectors] {
   color: inherit !important;
   text-decoration: none !important;
   font-size: inherit !important;
   font-family: inherit !important;
   font-weight: inherit !important;
   line-height: inherit !important;
}

/* MOBILE STYLES */
@media screen and (max-width: 600px) {
 .img-max {
   width: 100% !important;
   max-width: 100% !important;
   height: auto !important;
 }

 .max-width {
   max-width: 100% !important;
 }

 .mobile-wrapper {
   width: 85% !important;
   max-width: 85% !important;
 }

 .mobile-padding {
   padding-left: 5% !important;
   padding-right: 5% !important;
 }
}

/* ANDROID CENTER FIX */
div[style*="margin: 16px 0;"] { margin: 0 !important; }
</style>
</head>
<body style="margin: 0 !important; padding: 0; !important background-color: #f6f6f6;" bgcolor="#f6f6f6">

<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
   Lorem ipsum dolor que ist
</div>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
   <tr>
       <td align="center" valign="top" width="100%" background="images/bg.jpg" bgcolor="#3b4a69" style="background: #3b4a69 url('images/bg.jpg'); background-size: cover; background-attachment: fixed; padding: 50px 15px 0 15px;" class="mobile-padding">
           <!--[if (gte mso 9)|(IE)]>
           <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
           <tr>
           <td align="center" valign="top" width="600">
           <![endif]-->
           <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
               
               <?php 
	     //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use     mysqli_fetch_array 
	 while($res = mysqli_fetch_array($result)) { 
        ?>
               <tr>
                   <td align="center" valign="top" style="padding: 0 0 50px 0;">
                       <img src="images/litmus-wheel-white.png" width="50" height="50" border="0" style="display: block;">
                   </td>
               </tr>
               <tr>
                   <td align="left" valign="top" style="padding: 50px; font-family: Open Sans, Helvetica, Arial, sans-serif; border-radius: 3px; box-shadow: 0 0 5px rgba(0,0,0,.5);" bgcolor="#f6f6f6">
                       <p style="color: #999999; font-size: 16px; line-height: 26px; margin: 0;">
                      <?php echo '<p style="font-size:30px;">'.$res['Text'].'</p>';	?>
                           Cheers,<br>
                           <img src="images/signature.png" width="131" height="64" style="display: block; border: 0px;"/>
                           Admin
                       </p>
                   </td>
               </tr>
               <tr>
                   <td align="center" valign="top" style="padding: 25px 0; font-family: Open Sans, Helvetica, Arial, sans-serif; color: #ffffff;">
                       <p style="font-size: 14px; line-height: 20px;">
                        All Right reserved at<br>
                           <b>RUBored</b>

                         <br><br>
                         Designed By
                         <a href="http://www.amine-smahi.ga/" style="color: #ffffff;" target="_blank">Amine Smahi </a>
                        
                         
                       </p>
                   </td>
               </tr>
               <?php
               }
	?>
           </table>
           <!--[if (gte mso 9)|(IE)]>
           </td>
           </tr>
           </table>
           <![endif]-->
       </td>
   </tr>
</table>

</body>
</html>