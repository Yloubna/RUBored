<?php
//including the database connection file
include_once("config.php");
$Category = $_POST['Category'];
$Time = $_POST['Time'];
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM Story ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM Story WHERE Time='$Time' AND Category='$Category' ORDER BY id DESC"); // using mysqli_query instead
?>
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
    max-width: 60% !important;
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
<body style="margin: 0 !important; padding: 0; !important background-color: #ffffff;" bgcolor="#ffffff">

<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    Lorem ipsum dolor que ist
</div>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center" valign="top" width="100%" background="images/bg.jpg" bgcolor="#3b4a69" style="background: #3b4a69 url('images/bg.jpg'); background-size: cover; padding: 50px 15px;" class="mobile-padding">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                <tr>
                    <td align="center" valign="top" style="padding: 0 0 20px 0;">
                        <img src="images/litmus-wheel-white.png" width="50" height="50" border="0" style="display: block;">
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top" style="padding: 0; font-family: Open Sans, Helvetica, Arial, sans-serif;">
                        <h1 style="font-size: 40px; color: #ffffff;">Newsletter</h1>
                        <p style="color: #b7bdc9; font-size: 20px; line-height: 28px; margin: 0;">
                          Mandeville carneiro robbins goas ross kelly ragan rodriguez stig jordan hodgekiss merlin yeaman
                        </p>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td align="center" height="100%" valign="top" width="100%" bgcolor="#f6f6f6" style="padding: 50px 15px;" class="mobile-padding">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                	<?php 
	while($res = mysqli_fetch_array($result)) { 	
        $string = $res['Text'];
        $stringCut = substr($string, 0, 100);
                ?>
                <form method="POST" action="read.php">
                     <?php echo '<input style="visibility: hidden;" type="text" name="nam" value="'.$res['name'].'"/>';
                        ?>
                <tr>
                    <td align="center" valign="top" style="padding: 0 0 25px 0; font-family: Open Sans, Helvetica, Arial, sans-serif;">
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td align="center" bgcolor="#ffffff" style="border-radius: 3px 3px 0 0;padding-top:40px;">
                                    <?php echo '<img src="'.$res['Url'].'" style="display: block; border-radius: 3px 3px 0 0; font-family: sans-serif; font-size: 16px; color: #999999;" class="img-max"/>';
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" bgcolor="#ffffff" style="border-radius: 0 0 3px 3px; padding: 25px;">
                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                        <tr>
                                            <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif;">
                                                <h2 style="font-size: 20px; color: #444444; margin: 0; padding-bottom: 10px;"><?php echo "<h1>".$res['name']."<h1>"; ?></h2>
                                                <p style="color: #999999; font-size: 16px; line-height: 24px; margin: 0;">
                                               <?php  echo "<p>".$stringCut."</p>";	?>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="padding: 30px 0 0 0;">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td align="center" style="border-radius: 26px;" bgcolor="#75b6c9">
                                                            <input type="submit" style="font-size: 16px; font-family: Open Sans, Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; border-radius: 26px; background-color: #75b6c9; padding: 14px 26px; border: 1px solid #75b6c9; display: block;" value="Read More"/>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <br>
                          <br>
                         <br>
                            <?php
                                }
                            ?>
                      </table>
                    </td>
                </tr>
                </form>
                  
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td align="center" height="100%" valign="top" width="100%" bgcolor="#f6f6f6" style="padding: 0 15px 40px 15px;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                <tr>
                    <td align="center" valign="top" style="padding: 0 0 5px 0;">
                        <img src="images/litmus-wheel-grey.png" width="35" height="35" border="0" style="display: block;">
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top" style="padding: 0; font-family: Open Sans, Helvetica, Arial, sans-serif; color: #999999;">
                        <p style="font-size: 14px; line-height: 20px;">
                          675 Massachusetts Avenue<br>
                          Cambridge, MA 02139

                          <br><br>

                          <a href="http://litmus.com" style="color: #999999;" target="_blank">View Online</a>
                          &nbsp; &bull; &nbsp;
                          <a href="http://litmus.com" style="color: #999999;" target="_blank">Unsubscribe</a>
                        </p>
                    </td>
                </tr>
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
