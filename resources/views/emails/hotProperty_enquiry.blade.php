<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>New Hot Property Enquiry</title>

    <!-- MOBILE RESPONSIVE FIX -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Gmail/Outlook Safe CSS -->
    <style>
        /* Force full width on mobiles */
        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
            }

            .padding-responsive {
                padding: 15px !important;
            }

            h1 {
                font-size: 20px !important;
            }

            p,
            td {
                font-size: 14px !important;
            }
        }
    </style>
</head>

<body style="font-family: Arial, sans-serif; background:#f5f5f5; margin:0; padding:0;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background:#f5f5f5; padding:20px 0;">
        <tr>
            <td align="center">

                <!-- Container (Responsive) -->
                <table class="email-container" width="600" cellpadding="0" cellspacing="0"
                    style="max-width:600px; width:100%; background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.1);">

                    <!-- Header -->
                    <tr>
                        <td style="background:#e63946; padding:20px; text-align:center;">
                            <h1 style="color:white; margin:0; font-size:24px;">New Hot Property Enquiry</h1>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td class="padding-responsive" style="padding:25px;">

                            <p style="font-size:16px; color:#333; margin-bottom:20px;">
                                You have received a new enquiry for a Hot Property.
                            </p>

                            <table width="100%" cellpadding="0" cellspacing="0" style="font-size:15px; color:#333;">
                                <tr>
                                    <td style="padding:8px 0; width:120px;"><strong>Name:</strong></td>
                                    <td style="padding:8px 0;">{{ $data['name'] }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:8px 0;"><strong>Email:</strong></td>
                                    <td style="padding:8px 0;">{{ $data['email'] }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:8px 0;"><strong>Phone:</strong></td>
                                    <td style="padding:8px 0;">{{ $data['number'] }}</td>
                                </tr>
                                <tr>
                                    <td valign="top" style="padding:8px 0;"><strong>Message:</strong></td>
                                    <td style="padding:8px 0;">{{ $data['message'] }}</td>
                                </tr>
                            </table>

                            <hr style="border:none; border-top:1px solid #ddd; margin:25px 0;">

                            <p style="font-size:13px; color:#777;">
                                Submitted on <strong>{{ now()->format('d M Y, h:i A') }}</strong>
                            </p>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
