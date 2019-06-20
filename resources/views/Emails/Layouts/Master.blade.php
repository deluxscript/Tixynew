<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>
        @section('subject')
            Tixy.ng Email
        @show
    </title>
    <style type="text/css" data-premailer="ignore">
        @import url("https://fonts.googleapis.com/css?family=Nunito:300,400,500,600,700");
      </style>
      <style data-premailer="ignore">
        @media screen and (max-width: 600px) {
          u + .body {
            width: 100vw !important;
          }
        }
  
        a[x-apple-data-detectors] {
          color: inherit !important;
          text-decoration: none !important;
          font-size: inherit !important;
          font-family: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
        }
        body {
  margin: 0;
  padding: 0;
  background-color: #f5f7fb;
  font-size: 15px;
  line-height: 160%;
  mso-line-height-rule: exactly;
  color: #444444;
  width: 100%;
}
</style>
</head>

<body class="bg-body">

<!-- body -->
<center>
    <table class="main bg-body" width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" valign="top">
          <!--[if (gte mso 9)|(IE)]>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" valign="top" width="640">
          <![endif]-->
          <span class="preheader">Your Ticket(s)</span>

          <table class="wrap" cellspacing="0" cellpadding="0">
            <tr>
              <td class="p-sm">
                <table cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="py-lg">
                      <table cellspacing="0" cellpadding="0">
                        <tr>
                          <td align="center">
                            <a href="https://tixy.ng/"
                              ><img
                              src="{{url(asset(isset($email_logo) ? $email_logo : 'assets/images/tixy.png'))}}"
                                height="32"
                                alt=""
                            /></a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
                @yield('message_content')

<!-- /body -->

<!-- footer -->
<table cellspacing="0" cellpadding="0">
    <tr>
      <td class="py-xl">
        <table
          class="font-sm text-center text-muted"
          cellspacing="0"
          cellpadding="0"
        >
          <tr>
            <td class="px-lg">
              <a href="mailto:info@tixy.ng" class="text-muted">
                Event ticketing by Tixy
              </a>
            </td>
          </tr>
          <tr>
            <td align="center" class="pb-md">
              <table
                class="w-auto"
                cellspacing="0"
                cellpadding="0"
              >
                <tr>
                  <td class="px-sm pt-sm">
                    <a
                      href="https://tixy.ng"
                    >
                      <img
                        src="url({{asset('assets/images/yellow-mark.png')}})"
                        class=" va-middle"
                        style="display:block"
                        width="24"
                        alt="tixy logo"
                      />
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
