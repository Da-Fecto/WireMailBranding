<?php

/**
 * Template
 *
 * The tag
 * There's API access through the wire() function. (see example)
 *
 * echo wire('page')->title;
 *
 *
 */

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
        <td align="center" valign="top" bgcolor="#F0F0F0" style="background-color: #F0F0F0;"> <br>
        <!-- 600px container (white background) -->
        <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width: 600px;max-width: 600px">
            <tr>
                <td class="container-padding header" align="left" style="font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: bold; padding-bottom: 12px; color: #DF4726;">
                    HEADER
                </td>
            </tr>
            <tr>
                <td class="container-padding content" align="left" style="padding-left: 24px; padding-right: 24px; padding-top: 12px; padding-bottom: 12px; background-color: #ffffff">
                    <div class="body-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: left; color: #333333">
                        {bodyHTML}
                    </div>
                </td>
            </tr>
            <tr>
                <td class="container-padding footer-text" align="center" style="font-family: Helvetica, Arial, sans-serif;font-size: 12px;line-height: 16px;color: #aaaaaa;">
                    <br>
                    FOOTER
                    <br>
                    <br>
                </td>
            </tr>
        </table>
        <!--/600px container -->
        </td>
    </tr>
</table>
<!-- /background wrapper -->
</body>
</html>
