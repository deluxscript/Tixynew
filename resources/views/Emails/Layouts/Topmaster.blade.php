<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        @section('subject')
            Tixy.ng Email
        @show
    </title>
    

</head>

<body class="bg-body" style="margin: 0;padding: 0;background-color: #f5f7fb;font-size: 15px;line-height: 160%;mso-line-height-rule: exactly;color: #444444;width: 100%;font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;">

<!-- body -->
<center>
    <table class="main bg-body" width="100%" cellspacing="0" cellpadding="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;border-collapse: collapse;width: 100%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;background-color: #f5f7fb;">
      <tr>
        <td align="center" valign="top" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;">
          <!--[if (gte mso 9)|(IE)]>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" valign="top" width="640">
          <![endif]-->
          <span class="preheader" style="padding: 0;font-size: 0;display: none;max-height: 0;mso-hide: all;line-height: 0;color: transparent;height: 0;max-width: 0;opacity: 0;overflow: hidden;visibility: hidden;width: 0;">Your Ticket(s)</span>
          <table class="wrap" cellspacing="0" cellpadding="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;border-collapse: collapse;width: 100%;max-width: 640px;text-align: left;-premailer-cellpadding: 0;-premailer-cellspacing: 0;">
            <tr>
              <td class="p-sm" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;padding: 8px;">
                <table cellpadding="0" cellspacing="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;border-collapse: collapse;width: 100%;-premailer-cellpadding: 0;-premailer-cellspacing: 0;">
                  <tr>
                    <td class="py-lg" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;padding-top: 24px;padding-bottom: 24px;">
                      <table cellspacing="0" cellpadding="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;border-collapse: collapse;width: 100%;-premailer-cellpadding: 0;-premailer-cellspacing: 0;">
                        <tr>
                          <td align="center" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;">
                            <a href="https://tixy.ng/" style="color: #467fcf;text-decoration: none;"><img src="{{url(asset(isset($email_logo) ? $email_logo : 'assets/images/yellow-mark.png'))}}" height="64" alt="" style="border: 0 none;line-height: 100%;outline: none;text-decoration: none;vertical-align: baseline;font-size: 0;"></a>
                          </td>
                          
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
                @yield('message_content')

<!-- /body -->

<!-- footer -->
<table cellspacing="0" cellpadding="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;border-collapse: collapse;width: 100%;-premailer-cellpadding: 0;-premailer-cellspacing: 0;">
  <tr>
    <td class="py-xl" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;padding-top: 48px;padding-bottom: 48px;">
      <table class="font-sm text-center text-muted" cellspacing="0" cellpadding="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;border-collapse: collapse;width: 100%;color: #9eb0b7;text-align: center;font-size: 13px;-premailer-cellpadding: 0;-premailer-cellspacing: 0;">
        <tr>
          <td class="px-lg" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;padding-right: 24px;padding-left: 24px;">
            <a href="mailto:info@tixy.ng" class="text-muted" style="color: #9eb0b7;text-decoration: none;">
              Event Ticketing by Tixy
            </a>
          </td>
        </tr>
        <tr>
          <td align="center" class="pb-md" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;padding-bottom: 16px;">
            <table class="w-auto" cellspacing="0" cellpadding="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;border-collapse: collapse;width: auto;-premailer-cellpadding: 0;-premailer-cellspacing: 0;">
              <tr>
                <td class="px-sm pt-sm" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;padding-top: 8px;padding-right: 8px;padding-left: 8px;">
                  <a href="https://tixy.ng" style="color: #467fcf;text-decoration: none;">
                    <img src="{{asset('assets/images/tixy.png')}}" class=" va-middle" style="display: block;border: 0 none;line-height: 100%;outline: none;text-decoration: none;vertical-align: middle;font-size: 0;" height="64" alt="tixy logo">
                  </a>
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

<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
</td>
</tr>
</table>
</center>
</body>
</html>
