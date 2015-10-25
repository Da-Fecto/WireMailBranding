<?php

/**
 * Wire Mail Branding wrapper example (this wrapper should not be used in production)
 *
 * When you use wireMail() in your template, the wrapper hass access to the page with
 * the wire('Page') function call.
 *
 */

// Vaiables
$page = wire('page');
$config = wire('config');
$domain = "http" . (($config->https) ? 's' : '') . '://' . $config->httpHost;
$base_url = $domain . $config->urls->get('WireMailBranding') . 'example/';

// background-image: url('http://www.abcwidgets.com/bg.jpg');
// background-repeat: repeat-y no-repeat;
// background-position: top center;
// background-color: #d9c092;


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
                            <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width: 600px;max-width: 600px">
                                <tr>
                                    <td class="container-padding footer-text" align="left">
                                        <br>
                                            <img src="data:image/gif;base64,R0lGODlh5AA0APfaAP///+z0/fr8//X5/vH3/kGS7vT5/v3+/8Td+uv0/e72/oi79O71/bTU+Pn8/vf6/vf7/uvz/fj7/vD2/lef8O/2/u31/f7///P4/kqX7/b6/nex8/v9/0iW773Z+fL4/rDS+Fmg8NDk+02Z73Ov89vq/MHc+nu089np/Mjg+pnF9kOT7vz9/+Dt/Ojy/ZPB9USU7m6s8kKT7tzr/OXw/erz/UmX77XV+Ony/bbV+Yq89ZbD9lOc8GWn8bfW+YK39KjN94W59JfD9kuY74y99UaV74G39Guq8rrX+X219N7s/Nbn+9jp/LHT+I+/9XWw83Sw89Ll++Tv/U+a70eV72eo8sff+kWU71Od8LjW+Ya69EeW79bo+3aw80yY79Tm+6/R+OPv/efx/WKl8Wan8V+j8WGk8ZDA9eLv/J7H9tXn+8ng+rHS+LvY+a7Q+KvP+KbM93619Obx/Vae8KHJ94O49FWe8JC/9YS49H+29JzG9lif8Mzi+mSm8VSd8Fuh8Hy086rO977a+aTL91Cb8Iu99cXe+qPK98be+nmy89fo+8/j+9Pm+1+k8d/s/LPT+N/t/L/a+W+t8oe69E6a753H9nCt8qXL92io8rnX+ZXC9o299crg+qDJ95jE9qLK946+9XGt8sHb+Wyr8nqz85TC9nKu85LA9Vyi8Wqq8l6j8afN963Q+K7R+MPc+uHu/F2i8Xiy85nE9t3s/FKc8Im79bzZ+brY+crh+mmp8rLT+NHl+9rq/G2r8lqh8M7j+5vG9p/I942+9WCk8cLc+nSv86XM98vh+s3i+5rF9lCa7+Lu/JHA9Wip8oS59M3j+6zQ+KnO932085/I9lGb8HGu8lyh8cDb+YC29GOm8T+R7gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMwMTQgNzkuMTU2Nzk3LCAyMDE0LzA4LzIwLTA5OjUzOjAyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE0IChNYWNpbnRvc2gpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAxNS0xMC0yNVQxMzoxMjo0MyswMTowMCIgeG1wOk1vZGlmeURhdGU9IjIwMTUtMTAtMjVUMTI6MTI6NTErMDE6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMTUtMTAtMjVUMTI6MTI6NTErMDE6MDAiIGRjOmZvcm1hdD0iaW1hZ2UvZ2lmIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjBFOTNBQTNDNzMzNjExRTU5Njg1QzM3ODUyMTdCQ0MzIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjBFOTNBQTNENzMzNjExRTU5Njg1QzM3ODUyMTdCQ0MzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MzYzQjA3ODk3MzM0MTFFNTk2ODVDMzc4NTIxN0JDQzMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MzYzQjA3OEE3MzM0MTFFNTk2ODVDMzc4NTIxN0JDQzMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4B//79/Pv6+fj39vX08/Lx8O/u7ezr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"/>
                                        <br>
                                    </td>
                                </tr>
                            </table>

                            <!-- white space -->
                            <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width: 600px; max-width: 600px" bgcolor="#FFFFFF">
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
                <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width: 600px; max-width: 600px">
                    <tr>
                        <td class="container-padding content" align="left" style="padding-left: 24px; padding-right: 24px; padding-top: 12px; padding-bottom: 24px; background-color: #ffffff">
                            <div class="body-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: left; color: #333333">
                                <!-- Required bodyHTML tag! bodyHTML will be inserted here -->
                                {bodyHTML}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="container-padding footer-text" align="center" style="font-family: Helvetica, Arial, sans-serif;font-size: 12px; line-height: 16px;color: #aaaaaa;">
                            <br>
                            © <?= date("Y") ?> <a href='https://github.com/Da-Fecto/' style='color: #aaaaaa; text-decoration: none;'>Martijn Geerts</a>
                            <span style='color: #dddddd'>&nbsp;|&nbsp;</span>
                            example wrapper for WireMailBranding
                            <br>
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
