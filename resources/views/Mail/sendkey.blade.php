@php
    $allowedProductIds = [1, 2, 3, 5, 9, 10, 11, 12, 13];
    $oneYearAgo = \Carbon\Carbon::now()->subYear();

    $paymentDetails = DB::table('payments')
        ->join('product_details', 'product_details.id', '=', 'payments.product_id')
        ->join('usersall', 'usersall.id', '=', 'payments.user_id')
        ->select(
            'payments.id', 
            'usersall.firstname', 
            'usersall.lastname', 
            'usersall.email', 
            'payments.pay_id', 
            'payments.product_key', 
            'payments.created_at', 
            DB::raw('DATE_ADD(payments.created_at, INTERVAL 1 YEAR) AS expire_date'),
            'payments.amount_total', 
            'payments.currency', 
            'payments.payment_method_types', 
            'product_details.key_type', 
            'product_details.plan_id'
        )
        ->where('payments.pay_id', $payment_intent)
        ->where('payments.product_key', $main_key)
        ->whereIn('payments.product_id', $allowedProductIds)
        ->where('payments.created_at', '>', $oneYearAgo)
        ->first();

    if ($paymentDetails) {
        $keytypeval = $paymentDetails->key_type;
        $keytype = DB::table('storepick')
            ->where('PICK_ID', $keytypeval)
            ->where('STORE_ID', 'key_type')
            ->select('PICK_TEXT')
            ->first();
    } else {
        $keytype = null;
    }
@endphp



<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <title>New Template</title>
    <!--[if (mso 16)]><style type="text/css">     a {text-decoration: none;}     </style><![endif]-->
    <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> <!--[if gte mso 9]><xml> <o:OfficeDocumentSettings> <o:AllowPNG></o:AllowPNG> <o:PixelsPerInch>96</o:PixelsPerInch> </o:OfficeDocumentSettings> </xml>
<![endif]-->
    <style type="text/css">
        #outlook a {
            padding: 0;
        }

        .es-button {
            mso-style-priority: 100 !important;
            text-decoration: none !important;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        .es-desk-hidden {
            display: none;
            float: left;
            overflow: hidden;
            width: 0;
            max-height: 0;
            line-height: 0;
            mso-hide: all;
        }

        @media only screen and (max-width:600px) {

            p,
            ul li,
            ol li,
            a {
                line-height: 150% !important
            }

            h1,
            h2,
            h3,
            h1 a,
            h2 a,
            h3 a {
                line-height: 120% !important
            }

            h1 {
                font-size: 36px !important;
                text-align: left
            }

            h2 {
                font-size: 26px !important;
                text-align: left
            }

            h3 {
                font-size: 20px !important;
                text-align: left
            }

            .es-header-body h1 a,
            .es-content-body h1 a,
            .es-footer-body h1 a {
                font-size: 36px !important;
                text-align: left
            }

            .es-header-body h2 a,
            .es-content-body h2 a,
            .es-footer-body h2 a {
                font-size: 26px !important;
                text-align: left
            }

            .es-header-body h3 a,
            .es-content-body h3 a,
            .es-footer-body h3 a {
                font-size: 20px !important;
                text-align: left
            }

            .es-menu td a {
                font-size: 12px !important
            }

            .es-header-body p,
            .es-header-body ul li,
            .es-header-body ol li,
            .es-header-body a {
                font-size: 14px !important
            }

            .es-content-body p,
            .es-content-body ul li,
            .es-content-body ol li,
            .es-content-body a {
                font-size: 14px !important
            }

            .es-footer-body p,
            .es-footer-body ul li,
            .es-footer-body ol li,
            .es-footer-body a {
                font-size: 14px !important
            }

            .es-infoblock p,
            .es-infoblock ul li,
            .es-infoblock ol li,
            .es-infoblock a {
                font-size: 12px !important
            }

            *[class="gmail-fix"] {
                display: none !important
            }

            .es-m-txt-c,
            .es-m-txt-c h1,
            .es-m-txt-c h2,
            .es-m-txt-c h3 {
                text-align: center !important
            }

            .es-m-txt-r,
            .es-m-txt-r h1,
            .es-m-txt-r h2,
            .es-m-txt-r h3 {
                text-align: right !important
            }

            .es-m-txt-l,
            .es-m-txt-l h1,
            .es-m-txt-l h2,
            .es-m-txt-l h3 {
                text-align: left !important
            }

            .es-m-txt-r img,
            .es-m-txt-c img,
            .es-m-txt-l img {
                display: inline !important
            }

            .es-button-border {
                display: inline-block !important
            }

            a.es-button,
            button.es-button {
                font-size: 20px !important;
                display: inline-block !important
            }

            .es-adaptive table,
            .es-left,
            .es-right {
                width: 100% !important
            }

            .es-content table,
            .es-header table,
            .es-footer table,
            .es-content,
            .es-footer,
            .es-header {
                width: 100% !important;
                max-width: 600px !important
            }

            .es-adapt-td {
                display: block !important;
                width: 100% !important
            }

            .adapt-img {
                width: 100% !important;
                height: auto !important
            }

            .es-m-p0 {
                padding: 0 !important
            }

            .es-m-p0r {
                padding-right: 0 !important
            }

            .es-m-p0l {
                padding-left: 0 !important
            }

            .es-m-p0t {
                padding-top: 0 !important
            }

            .es-m-p0b {
                padding-bottom: 0 !important
            }

            .es-m-p20b {
                padding-bottom: 20px !important
            }

            .es-mobile-hidden,
            .es-hidden {
                display: none !important
            }

            tr.es-desk-hidden,
            td.es-desk-hidden,
            table.es-desk-hidden {
                width: auto !important;
                overflow: visible !important;
                float: none !important;
                max-height: inherit !important;
                line-height: inherit !important
            }

            tr.es-desk-hidden {
                display: table-row !important
            }

            table.es-desk-hidden {
                display: table !important
            }

            td.es-desk-menu-hidden {
                display: table-cell !important
            }

            .es-menu td {
                width: 1% !important
            }

            table.es-table-not-adapt,
            .esd-block-html table {
                width: auto !important
            }

            table.es-social {
                display: inline-block !important
            }

            table.es-social td {
                display: inline-block !important
            }

            .es-m-p5 {
                padding: 5px !important
            }

            .es-m-p5t {
                padding-top: 5px !important
            }

            .es-m-p5b {
                padding-bottom: 5px !important
            }

            .es-m-p5r {
                padding-right: 5px !important
            }

            .es-m-p5l {
                padding-left: 5px !important
            }

            .es-m-p10 {
                padding: 10px !important
            }

            .es-m-p10t {
                padding-top: 10px !important
            }

            .es-m-p10b {
                padding-bottom: 10px !important
            }

            .es-m-p10r {
                padding-right: 10px !important
            }

            .es-m-p10l {
                padding-left: 10px !important
            }

            .es-m-p15 {
                padding: 15px !important
            }

            .es-m-p15t {
                padding-top: 15px !important
            }

            .es-m-p15b {
                padding-bottom: 15px !important
            }

            .es-m-p15r {
                padding-right: 15px !important
            }

            .es-m-p15l {
                padding-left: 15px !important
            }

            .es-m-p20 {
                padding: 20px !important
            }

            .es-m-p20t {
                padding-top: 20px !important
            }

            .es-m-p20r {
                padding-right: 20px !important
            }

            .es-m-p20l {
                padding-left: 20px !important
            }

            .es-m-p25 {
                padding: 25px !important
            }

            .es-m-p25t {
                padding-top: 25px !important
            }

            .es-m-p25b {
                padding-bottom: 25px !important
            }

            .es-m-p25r {
                padding-right: 25px !important
            }

            .es-m-p25l {
                padding-left: 25px !important
            }

            .es-m-p30 {
                padding: 30px !important
            }

            .es-m-p30t {
                padding-top: 30px !important
            }

            .es-m-p30b {
                padding-bottom: 30px !important
            }

            .es-m-p30r {
                padding-right: 30px !important
            }

            .es-m-p30l {
                padding-left: 30px !important
            }

            .es-m-p35 {
                padding: 35px !important
            }

            .es-m-p35t {
                padding-top: 35px !important
            }

            .es-m-p35b {
                padding-bottom: 35px !important
            }

            .es-m-p35r {
                padding-right: 35px !important
            }

            .es-m-p35l {
                padding-left: 35px !important
            }

            .es-m-p40 {
                padding: 40px !important
            }

            .es-m-p40t {
                padding-top: 40px !important
            }

            .es-m-p40b {
                padding-bottom: 40px !important
            }

            .es-m-p40r {
                padding-right: 40px !important
            }

            .es-m-p40l {
                padding-left: 40px !important
            }

            .es-desk-hidden {
                display: table-row !important;
                width: auto !important;
                overflow: visible !important;
                max-height: inherit !important
            }

            .h-auto {
                height: auto !important
            }
        }

        @media screen and (max-width:384px) {
            .mail-message-content {
                width: 414px !important
            }
        }
    </style>
</head>
@if ($paymentDetails)
<body data-new-gr-c-s-loaded="14.1185.0"
    style="width:100%;font-family:arial, 'helvetica neue', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
    <div dir="ltr" class="es-wrapper-color" lang="en" style="background-color:#FDFCFC">
        <!--[if gte mso 9]><v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t"> <v:fill type="tile" color="#fdfcfc"></v:fill> </v:background><![endif]-->
        <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" role="none"
            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#f1f1f1">
            <tr>
                <td valign="top" style="padding:0;Margin:0">
                    <table cellpadding="0" cellspacing="0" class="es-content" align="center" role="none"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
                        <tr>
                            <td align="center" style="padding:0;Margin:0">
                                <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0"
                                    cellspacing="0"
                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#ffffff;width:600px"
                                    role="none">
                                    <tr>
                                        <td align="left"
                                            style="padding:0;Margin:0;padding-top:15px;padding-left:20px;padding-right:20px">
                                            <table cellpadding="0" cellspacing="0" width="100%" role="none"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                    <td align="center" valign="top"
                                                        style="padding:0;Margin:0;width:560px">
                                                        <table cellpadding="0" cellspacing="0" width="100%"
                                                            role="presentation"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tr>
                                                                <td align="center" style="padding:0;Margin:0">
                                                                    <p
                                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#201f1f;font-size:12px">
                                                                        <a target="_blank"
                                                                            style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#12d2b3;font-size:12px"
                                                                            href=""></a><br></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center"
                                                                    style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px;font-size:0px">
                                                                    <img src="https://fhsfxgx.stripocdn.email/content/guids/CABINET_ed9b093fd8bb67be2cd398f18c4df5f95133af775045eafed93e36585bc10c9a/images/1.png"
                                                                        alt
                                                                        style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"
                                                                        width="75" height="75"></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center" class="es-m-txt-c"
                                                                    style="padding:0;Margin:0;padding-bottom:10px">
                                                                    <h1
                                                                        style="Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:36px;font-style:normal;font-weight:bold;color:#333333">
                                                                        Thank you for your trust in TTB!</h1>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="left" style="padding:0;Margin:0">
                                                                    <p
                                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
                                                                        <strong>Hello {{ $paymentDetails->firstname }} {{ $paymentDetails->lastname}},</strong><br>Your order for the TTB
                                                                        {{$keytype->PICK_TEXT}} valued at <strong>{{$paymentDetails->amount_total}} {{$paymentDetails->currency}}</strong> has
                                                                        been successfully processed. You can now
                                                                        activate your copy of the software using the
                                                                        product key attached.</p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0" class="es-content" align="center" role="none"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
                        <tr>
                            <td align="center" style="padding:0;Margin:0">
                                <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0"
                                    cellspacing="0"
                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#ffffff;width:600px"
                                    role="none">
                                    <tr>
                                        <td align="left" style="padding:20px;Margin:0">
                                            <table cellpadding="0" cellspacing="0" width="100%" role="none"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                    <td align="center" valign="top"
                                                        style="padding:0;Margin:0;width:560px">
                                                        <table cellpadding="0" cellspacing="0" width="100%"
                                                            role="presentation"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tr>
                                                                <td align="center" class="es-m-txt-l"
                                                                    style="padding:0;Margin:0">
                                                                    <h2
                                                                        style="Margin:0;line-height:19px;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:16px;font-style:normal;font-weight:bold;color:#333333;text-align:center">
                                                                        Product activation key:<br><span
                                                                            style="color:#13D5A8"><strong>{{ $paymentDetails->product_key }}</strong></span>
                                                                    </h2>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center" class="es-m-txt-l"
                                                                    style="padding:0;Margin:0;padding-bottom:15px;padding-top:25px">
                                                                    <span class="es-button-border"
                                                                        style="border-style:solid;border-color:#12d2b3;background:#12d2b3;border-width:2px;display:inline-block;border-radius:0px;width:auto">
                                                                        @if ($paymentDetails->key_type==501)
                                                                        <a href="{{route('user.vpn_download')}}"
                                                                        class="es-button" target="_blank"
                                                                        style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;padding:10px 30px 10px 30px;display:inline-block;background:#12d2b3;border-radius:0px;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center;mso-padding-alt:0;mso-border-alt:10px solid #12d2b3">Activate
                                                                        Now</a>
                                                                        @elseif ($paymentDetails->key_type == 502)
                                                                        <a href="{{route('user.antivirus_download')}}"
                                                                            class="es-button" target="_blank"
                                                                            style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;padding:10px 30px 10px 30px;display:inline-block;background:#12d2b3;border-radius:0px;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center;mso-padding-alt:0;mso-border-alt:10px solid #12d2b3">Activate
                                                                            Now</a>
                                                                        @endif

                                                                        </span></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center"
                                                                    style="padding:0;Margin:0;padding-bottom:20px">
                                                                    <h1
                                                                        style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:24px;font-style:normal;font-weight:bold;color:#333333">
                                                                        <strong>TTB {{$keytype->PICK_TEXT}}</strong></h1>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="left" style="padding:0;Margin:0">
                                                                    <p
                                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
                                                                        <strong>Download and Install TTB on each of your
                                                                            devices/computers you want to
                                                                            protect.</strong></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="left" style="padding:0;Margin:0">
                                                                    <ul>
                                                                        <li
                                                                            style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;Margin-bottom:15px;margin-left:0;color:#333333;font-size:12px">
                                                                            Click here to <strong>
                                                                                @if ($paymentDetails->key_type==501)
                                                                                <a href="{{route('user.vpn_download')}}"
                                                                                    target="_blank"
                                                                                    style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#12d2b3;font-size:12px">download</a>
                                                                                @elseif ($paymentDetails->key_type == 502)
                                                                                <a href="{{route('user.antivirus_download')}}"
                                                                                    target="_blank"
                                                                                    style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#12d2b3;font-size:12px">download</a>
                                                                                @endif
                                                                                    .</strong>
                                                                        </li>
                                                                        <li
                                                                            style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;Margin-bottom:15px;margin-left:0;color:#333333;font-size:12px">
                                                                            Follow the simple instructions to install
                                                                            TTB.</li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="left" style="padding:0;Margin:0">
                                                                    <p
                                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
                                                                        Your subscription to TTB is active on
                                                                        <strong>{{ $paymentDetails->created_at }}</strong>, and will
                                                                        automatically renew on<strong>
                                                                            {{$paymentDetails->expire_date}}</strong> for the original
                                                                        product price i.e. . Find the order details
                                                                        mentioned below:</p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left"
                                            style="padding:0;Margin:0;padding-top:10px;padding-left:20px;padding-right:20px">
                                            <table cellpadding="0" cellspacing="0" width="100%" role="none"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                    <td class="es-m-p0r" align="center"
                                                        style="padding:0;Margin:0;width:560px">
                                                        <table cellpadding="0" cellspacing="0" width="100%"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;border-top:2px solid #efefef;border-bottom:2px solid #efefef"
                                                            role="presentation">
                                                            <tr>
                                                                <td align="left" class="es-m-txt-r"
                                                                    style="padding:0;Margin:0;padding-top:10px;padding-bottom:20px">
                                                                    <p
                                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
                                                                        Order
                                                                        number:&nbsp;<strong>{{ $paymentDetails->pay_id }}</strong><br>Date
                                                                        of
                                                                        Order:&nbsp;<strong>{{ $paymentDetails->created_at }}</strong><br>Name:
                                                                        <b>{{ $paymentDetails->firstname }} {{ $paymentDetails->lastname }}</b><br><br>Supports <span
                                                                            style="color:#12D2B3"><strong>TTB
                                                                                {{$keytype->PICK_TEXT}}.</strong></span><br>Sign in to
                                                                        your TTB account for details. <strong><a
                                                                                href="https://www.ttbinternetsecurity.com/"
                                                                                target="_blank"
                                                                                style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#12d2b3;font-size:12px">Log
                                                                                in</a></strong><br>--------------------------------------------------------------------------------------------------------------------------------------------<br>Please
                                                                        note that all renewal prices are subject to
                                                                        change from time to time and you’ll be notified
                                                                        in advance about such changes via email. You may
                                                                        choose to continue to cancel your subscription
                                                                        by logging in to your account.</p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left"
                                            style="Margin:0;padding-bottom:10px;padding-top:20px;padding-left:20px;padding-right:20px">
                                            <table cellpadding="0" cellspacing="0" width="100%" role="none"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                    <td class="es-m-p0r" align="center"
                                                        style="padding:0;Margin:0;width:560px">
                                                        <table cellpadding="0" cellspacing="0" width="100%"
                                                            role="presentation"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tr>
                                                                <td align="left" style="padding:0;Margin:0">
                                                                    <p
                                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
                                                                        Customer Email:
                                                                        <strong>{{ $paymentDetails->email }}</strong></p>
                                                                    <p
                                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
                                                                        Order number:&nbsp;<strong>#1000{{ $paymentDetails->id }}</strong>
                                                                    </p>
                                                                    <p
                                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
                                                                        Invoice date:&nbsp;<strong>{{ $paymentDetails->created_at }}</strong>
                                                                    </p>
                                                                    <p
                                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
                                                                        Payment method:&nbsp;<strong>{{ $paymentDetails->payment_method_types }}</strong></p>
                                                                    <p
                                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
                                                                        Currency:&nbsp;<strong>{{ $paymentDetails->currency }}</strong></p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left"
                                            style="Margin:0;padding-bottom:10px;padding-top:15px;padding-left:20px;padding-right:20px">
                                            <table cellpadding="0" cellspacing="0" width="100%" role="none"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                    <td align="left" style="padding:0;Margin:0;width:560px">
                                                        <table cellpadding="0" cellspacing="0" width="100%"
                                                            role="presentation"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tr>
                                                                <td align="center"
                                                                    style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px">
                                                                    <p
                                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
                                                                        Got a question?&nbsp;Email us at&nbsp;<a
                                                                            target="_blank" href=""
                                                                            style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#5C68E2;font-size:12px">support@</a><a
                                                                            target="_blank" href=""
                                                                            style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#5C68E2;font-size:12px">stylecasual</a><a
                                                                            target="_blank" href=""
                                                                            style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#5C68E2;font-size:12px">.com</a>&nbsp;or
                                                                        give us a call at&nbsp;<a target="_blank"
                                                                            href=""
                                                                            style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#5C68E2;font-size:12px">+000
                                                                            123 456</a>.</p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0" class="es-footer" align="center" role="none"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
                        <tr>
                            <td align="center" style="padding:0;Margin:0">
                                <table class="es-footer-body" align="center" cellpadding="0" cellspacing="0"
                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px"
                                    role="none">
                                    <tr>
                                        <td align="left" bgcolor="#ffffff"
                                            style="Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px;background-color:#ffffff">
                                            <table cellpadding="0" cellspacing="0" width="100%" role="none"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                    <td align="left" style="padding:0;Margin:0;width:560px">
                                                        <table cellpadding="0" cellspacing="0" width="100%"
                                                            role="presentation"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tr>
                                                                <td align="center"
                                                                    style="padding:0;Margin:0;padding-top:15px;padding-bottom:15px;font-size:0">
                                                                    <table cellpadding="0" cellspacing="0"
                                                                        class="es-table-not-adapt es-social"
                                                                        role="presentation"
                                                                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                        <tr>
                                                                            <td align="center" valign="top"
                                                                                style="padding:0;Margin:0;padding-right:40px">
                                                                                <a target="_blank"
                                                                                    href="https://www.facebook.com/ttbinternetsecurities/"
                                                                                    style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#333333;font-size:12px"><img
                                                                                        title="Facebook"
                                                                                        src="https://fhsfxgx.stripocdn.email/content/assets/img/social-icons/logo-black/facebook-logo-black.png"
                                                                                        alt="Fb" width="32" height="32"
                                                                                        style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a>
                                                                            </td>
                                                                            <td align="center" valign="top"
                                                                                style="padding:0;Margin:0;padding-right:40px">
                                                                                <a target="_blank"
                                                                                    href="https://x.com/TTBisecure"
                                                                                    style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#333333;font-size:12px"><img
                                                                                        title="Twitter"
                                                                                        src="https://fhsfxgx.stripocdn.email/content/assets/img/social-icons/logo-black/twitter-logo-black.png"
                                                                                        alt="Tw" width="32" height="32"
                                                                                        style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a>
                                                                            </td>
                                                                            <td align="center" valign="top"
                                                                                style="padding:0;Margin:0;padding-right:40px">
                                                                                <a target="_blank"
                                                                                    href="https://www.instagram.com/ttbinternetsecurity/"
                                                                                    style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#333333;font-size:12px"><img
                                                                                        title="Instagram"
                                                                                        src="https://fhsfxgx.stripocdn.email/content/assets/img/social-icons/logo-black/instagram-logo-black.png"
                                                                                        alt="Inst" width="32"
                                                                                        height="32"
                                                                                        style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a>
                                                                            </td>
                                                                            <td align="center" valign="top"
                                                                                style="padding:0;Margin:0;padding-right:40px">
                                                                                <a target="_blank"
                                                                                    href="https://www.youtube.com/channel/UCda5n02Q-bHeQlyWwm3ieWg"
                                                                                    style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#333333;font-size:12px"><img
                                                                                        title="Youtube"
                                                                                        src="https://fhsfxgx.stripocdn.email/content/assets/img/social-icons/logo-black/youtube-logo-black.png"
                                                                                        alt="Inst" width="32"
                                                                                        height="32"
                                                                                        style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a>
                                                                            </td>
                                                                            <td align="center" valign="top"
                                                                                style="padding:0;Margin:0;padding-right:40px">
                                                                                <a target="_blank"
                                                                                    href="https://www.linkedin.com/company/ttbinternetsecurity"
                                                                                    style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#333333;font-size:12px"><img
                                                                                        title="LinkedIn"
                                                                                        src="https://fhsfxgx.stripocdn.email/content/assets/img/social-icons/logo-black/linkedin-logo-black.png"
                                                                                        alt="In" width="32" height="32"
                                                                                        style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a>
                                                                            </td>
                                                                            <td align="center" valign="top"
                                                                                style="padding:0;Margin:0;padding-right:40px">
                                                                                <a target="_blank"
                                                                                    href="https://in.pinterest.com/ttbsecurities01/_created/"
                                                                                    style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#333333;font-size:12px"><img
                                                                                        title="Pinterest"
                                                                                        src="https://fhsfxgx.stripocdn.email/content/assets/img/social-icons/logo-black/pinterest-logo-black.png"
                                                                                        alt="P" width="32" height="32"
                                                                                        style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center"
                                                                    style="padding:0;Margin:0;padding-bottom:35px">
                                                                    <p
                                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
                                                                        You have received this mail as a service manager
                                                                        from TTB {{$keytype->PICK_TEXT}} regarding the status of your
                                                                        TTB {{$keytype->PICK_TEXT}} product subscription</p>
                                                                    <p
                                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
                                                                        Copyright © <strong><a target="_blank"
                                                                                href="https://www.ttbinternetsecurity.com/"
                                                                                style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#13d5a8;font-size:12px">TTB
                                                                                {{$keytype->PICK_TEXT}}</a></strong> Inc. All rights
                                                                        reserved.</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:0;Margin:0">
                                                                    <table cellpadding="0" cellspacing="0" width="100%"
                                                                        class="es-menu" role="presentation"
                                                                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                        <tr class="links">
                                                                            <td align="center" valign="top" width="20%"
                                                                                style="Margin:0;padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;border:0">
                                                                                <a target="_blank"
                                                                                    href="https://www.ttbinternetsecurity.com/privacy_policy"
                                                                                    style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;font-family:arial, 'helvetica neue', helvetica, sans-serif;color:#282626;font-size:12px;font-weight:bold">
                                                                                    Privacy</a></td>
                                                                            <td align="center" valign="top" width="20%"
                                                                                style="Margin:0;padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;border:0;border-left:1px solid #cccccc">
                                                                                @if ($paymentDetails->key_type==501)
                                                                                <a target="_blank"
                                                                                href="{{route('user.vpn_download')}}"
                                                                                style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;font-family:arial, 'helvetica neue', helvetica, sans-serif;color:#282626;font-size:12px;font-weight:bold">
                                                                                Download</a></td>
                                                                                @elseif ($paymentDetails->key_type == 502)
                                                                                <a target="_blank"
                                                                                    href="{{route('user.antivirus_download')}}"
                                                                                    style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;font-family:arial, 'helvetica neue', helvetica, sans-serif;color:#282626;font-size:12px;font-weight:bold">
                                                                                    Download</a>
                                                                                @endif
                                                                                </td>
                                                                            <td align="center" valign="top" width="20%"
                                                                                style="Margin:0;padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;border:0;border-left:1px solid #cccccc">
                                                                                <a target="_blank"
                                                                                    href="https://www.ttbinternetsecurity.com/terms_conditions"
                                                                                    style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;font-family:arial, 'helvetica neue', helvetica, sans-serif;color:#282626;font-size:12px;font-weight:bold">Terms
                                                                                    of Service</a></td>
                                                                            <td align="center" valign="top" width="20%"
                                                                                style="Margin:0;padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;border:0;border-left:1px solid #cccccc">
                                                                                <a target="_blank"
                                                                                    href="https://www.ttbinternetsecurity.com/support"
                                                                                    style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;font-family:arial, 'helvetica neue', helvetica, sans-serif;color:#282626;font-size:12px;font-weight:bold">Support</a>
                                                                            </td>
                                                                            <td align="center" valign="top" width="20%"
                                                                                style="Margin:0;padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;border:0;border-left:1px solid #cccccc">
                                                                                <a target="_blank"
                                                                                    href="https://www.ttbinternetsecurity.com/return_policy"
                                                                                    style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;font-family:arial, 'helvetica neue', helvetica, sans-serif;color:#282626;font-size:12px;font-weight:bold">Legal</a>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0" class="es-content" align="center" role="none"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
                        <tr>
                            <td class="es-info-area" align="center" style="padding:0;Margin:0">
                                <table class="es-content-body" align="center" cellpadding="0" cellspacing="0"
                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px"
                                    bgcolor="#FFFFFF" role="none">
                                    <tr>
                                        <td align="left" style="padding:20px;Margin:0">
                                            <table cellpadding="0" cellspacing="0" width="100%" role="none"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                    <td align="center" valign="top"
                                                        style="padding:0;Margin:0;width:560px">
                                                        <table cellpadding="0" cellspacing="0" width="100%" role="none"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tr>
                                                                <td align="center"
                                                                    style="padding:0;Margin:0;display:none"></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>
@else
<p>please Contact Support Team</p>
<a href="{{route('user.contact_as')}}">Contact Page</a>  
@endif

</html>
