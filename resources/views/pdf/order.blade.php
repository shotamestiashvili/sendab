<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <!--[if mso]>
    <noscript>
    <xml>
        <o:OfficeDocumentSettings>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    </noscript>
    <![endif]-->
    <style>
        table, td, div, h1, p {font-family: Arial, sans-serif;}
    </style>
</head>
<body style="margin:0;padding:0;">
<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
    <tr>
        <td align="center" style="padding:0;">
            <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                <tr>
                    <td align="center" style="padding:40px 0 30px 0;background:#70bbd9;">
                        <img src="https://assets.codepen.io/210284/h1.png" alt="" width="300" style="height:auto;display:block;" />
                    </td>
                </tr>
                <tr>
                    <td style="padding:36px 30px 42px 30px;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                            <tr>
                                <td style="padding:0 0 36px 0;color:#153643;">
                                    <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">SENDAB</h1>
                                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                        <div>
                                            <div>
                                               Order :  {{ $array[0]['order']['order']}}
                                            </div>
                                            <div>
                                               USER ID:  {{ $array[0]['order']['user_id']}}
                                            </div>
                                            <div>
                                               Amount : {{ $array[0]['order']['amount']}}
                                            </div>
                                        <div>
                                            Status :  {{ $array[0]['order']['status']}}
                                        </div>


                                        <div>
                                            Pickup Type:  {{ $array[0]['pickup']['pickup_type']}}
                                        </div>
                                        <div>
                                            Source City: {{ $array[0]['pickup']['source_city']}}
                                        </div>
                                        <div>
                                            Source Address1 :  {{ $array[0]['pickup']['source_address1']}}
                                        </div>
                                        <div>
                                            Source Address2 :  {{ $array[0]['pickup']['source_address2']}}
                                        </div>


                                        <div>
                                            Firstname:  {{ $array[0]['person']['firstname']}}
                                        </div>
                                        <div>
                                            Lastname: {{ $array[0]['person']['lastname']}}
                                        </div>

                                        <div>
                                            Phone: {{ $array[0]['person']['phone']}}
                                        </div>

                                        <div>
                                            Company Name: {{ $array[0]['person']['company_name']}}
                                        </div>

                                        <div>
                                            Country: {{ $array[0]['person']['country']}}
                                        </div>

                                        <div>
                                            City: {{ $array[0]['person']['city']}}
                                        </div>


                                        <div>
                                            Address 1: {{ $array[0]['person']['address1']}}
                                        </div>


                                        <div>
                                            Address2: {{ $array[0]['person']['address2']}}
                                        </div>


                                        <div>
                                            Zip Code: {{ $array[0]['person']['postal']}}
                                        </div>

                                        <div>
                                            Comment: {{ $array[0]['person']['comment']}}
                                        </div>


                                        <div>
                                            Order Value: {{ $array[0]['insuarence']['order_value']}}
                                        </div>

                                        <div>
                                            Contents: {{ $array[0]['insuarence']['content']}}
                                        </div>

                                    </div>
                                    </p>
<!--                                    <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="http://www.example.com" style="color:#ee4c50;text-decoration:underline;">In tempus felis blandit</a></p>-->
                                </td>
                            </tr>
<!--                            <tr>-->
<!--                                <td style="padding:0;">-->
<!--                                    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">-->
<!--                                        <tr>-->
<!--                                            <td style="width:260px;padding:0;vertical-align:top;color:#153643;">-->
<!--                                                <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><img src="https://assets.codepen.io/210284/left.gif" alt="" width="260" style="height:auto;display:block;" /></p>-->
<!--                                                <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, est nisi libero ultricies ipsum, in posuere mauris neque at erat.</p>-->
<!--                                                <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="http://www.example.com" style="color:#ee4c50;text-decoration:underline;">Blandit ipsum volutpat sed</a></p>-->
<!--                                            </td>-->
<!--                                            <td style="width:20px;padding:0;font-size:0;line-height:0;">&nbsp;</td>-->
<!--                                            <td style="width:260px;padding:0;vertical-align:top;color:#153643;">-->
<!--                                                <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><img src="https://assets.codepen.io/210284/right.gif" alt="" width="260" style="height:auto;display:block;" /></p>-->
<!--                                                <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Morbi porttitor, eget est accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed.</p>-->
<!--                                                <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="http://www.example.com" style="color:#ee4c50;text-decoration:underline;">In tempus felis blandit</a></p>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                    </table>-->
<!--                                </td>-->
<!--                            </tr>-->
                        </table>
                    </td>
                </tr>
<!--                <tr>-->
<!--                    <td style="padding:30px;background:#ee4c50;">-->
<!--                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">-->
<!--                            <tr>-->
<!--                                <td style="padding:0;width:50%;" align="left">-->
<!--                                    <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">-->
<!--                                        &reg; Someone, Somewhere 2021<br/><a href="http://www.example.com" style="color:#ffffff;text-decoration:underline;">Unsubscribe</a>-->
<!--                                    </p>-->
<!--                                </td>-->
<!--                                <td style="padding:0;width:50%;" align="right">-->
<!--                                    <table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">-->
<!--                                        <tr>-->
<!--                                            <td style="padding:0 0 0 10px;width:38px;">-->
<!--                                                <a href="http://www.twitter.com/" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/tw_1.png" alt="Twitter" width="38" style="height:auto;display:block;border:0;" /></a>-->
<!--                                            </td>-->
<!--                                            <td style="padding:0 0 0 10px;width:38px;">-->
<!--                                                <a href="http://www.facebook.com/" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/fb_1.png" alt="Facebook" width="38" style="height:auto;display:block;border:0;" /></a>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                    </table>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                        </table>-->
<!--                    </td>-->
<!--                </tr>-->
            </table>
        </td>
    </tr>
</table>
</body>
</html>
<!--<div>-->
<!--    <div>-->
<!--        {{ $array[0]['order']['amount']}}-->
<!--    </div>-->
<!--    <div>-->
<!--        {{ $array[0]['person']['firstname']}}-->
<!--    </div>-->
<!--    <div>-->
<!--        {{ $array[0]['pickup']['source_city']}}-->
<!--    </div>-->
<!---->
<!--</div>-->
