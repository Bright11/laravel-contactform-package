<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('bright_config.company_name')}}</title>
    <style>
        /* Reset styles */
        body, table, td, a {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        table, td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
        img {
            -ms-interpolation-mode: bicubic;
        }
        /* Responsive styles */
        @media only screen and (max-width: 600px) {
            .responsive-table {
                width: 100% !important;
            }
            .logo img {
                width: 100px !important;
            }
        }
    </style>
</head>
<body style="font-family: Arial, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#f4f4f4">
    <tr>
        <td align="center" style="padding: 40px 0;">
            <table width="600" cellpadding="0" cellspacing="0" border="0" class="responsive-table">
                <!-- Logo -->

                <!-- Content -->
                <tr>
                    <td align="center" style="padding: 40px 20px;">
                        <h1 style="font-size: 24px; color: #333; margin: 0;">Message from {{$data['name']}}</h1>
                        <p style="font-size: 16px; color: #666; line-height: 1.6; margin: 20px 0;">{{ base64_decode($data['message']) }}</p>

                    </td>
                </tr>
                <!-- Footer -->
                <tr>
                    <td align="center" style="padding: 20px 0; background-color: #333; color: #fff;">
                        <p style="font-size: 14px; margin: 0;">&copy; 2024 {{config('bright_config.company_name')}}. All rights reserved.</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>
