<?php

/**
 * Wire Mail Branding wrapper example
 *
 */


// ProcessWire variables available via the wire function.
$page = wire('page');

?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- So that mobile will display zoomed in -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- enable media queries for windows phone 8 -->
    <meta name="format-detection" content="telephone=no">
    <!-- disable auto telephone linking in iOS -->
    <title> Wire Mail Templates </title>
    <style type="text/css">
    body {
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }
    table { border-spacing: 0 }
    table td { border-collapse: collapse }
    /* Outlook.com */
    .ExternalClass { width: 100% }
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100% }
    /* Outlook.com */
    .ReadMsgBody {
        width: 100%;
        background-color: #ebebeb;
    }
    /* Outlook */
    table {
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
    }
    img { -ms-interpolation-mode: bicubic }
    .yshortcuts a { border-bottom: none !important }
    @media screen and (max-width: 599px) {
        .force-row, .container {
            width: 100% !important;
            max-width: 100% !important;
        }
    }
    @media screen and (max-width: 400px) {
        .container-padding {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }
    }
    </style>
</head>
<body style="margin: 0; padding: 0;" bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <!-- background wrapper -->
    <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#F0F0F0">
        <tr>
            <td align="center" valign="top" bgcolor="#F0F0F0" style="background-color: #F0F0F0;">
                <!-- Branding header -->
                <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#3F91EE">
                    <tr>
                        <td align="center" valign="top" bgcolor="#F0F0F0" style="background-color: #3F91EE;">
                            <center>
                                <!-- Logo (branding) -->
                                <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width: 600px; max-width: 600px;">
                                    <tr>
                                        <td class="container-padding footer-text" align="left" style='padding-top: 12px; padding-bottom: 12px;'>
                                            <br>
                                            <span style='color: #126ACE; font-family: "Times New Roman", Times, serif; font-size: 26px; opacity: 0.2;'>wireMail</span>
                                            <span style='color: #FFFFFF; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: bold;'>Branding</span>
                                            <br>
                                        </td>
                                    </tr>
                                </table>
                                <!-- white space -->
                                <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width: 600px; max-width: 600px;" bgcolor="#FFFFFF">
                                    <tr>
                                        <td align="center" valign="top" bgcolor="#FFFFFF" style="background-color: #FFFFFF;">
                                            <br>
                                        </td>
                                    </tr>
                                </table>
                            </center>
                        </td>
                    </tr>
                </table>
                <!-- Container body -->
                <center>
                    <!-- 600px container (white background) -->
                    <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width: 600px; max-width: 600px;">
                        <tr>
                            <td class="container-padding content" align="left" style="padding-left: 24px; padding-right: 24px; padding-top: 12px; padding-bottom: 24px; background-color: #ffffff;">
                                <div class="body-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: left; color: #333333;">
                                    <!-- Required bodyHTML tag! -->
                                    {bodyHTML}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="container-padding footer-text" align="center" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 16px; color: #aaaaaa;">
                                <br>
                                © <?= date("Y") ?> <a href='http://processwire.com/' style='color: #aaaaaa; text-decoration: none;'>Build for ProcessWire</a>
                                <span style='color: #dddddd'>&nbsp;|&nbsp;</span>
                                example wrapper WireMailBranding
                                <br>
                            </td>
                        </tr>
                    </table>
                    <!--/600px container -->
                </center>
            </td>
        </tr>
    </table>
    <!-- /background wrapper -->
</body>
</html>
