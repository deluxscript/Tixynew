<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="telephone=no" name="format-detection" />
    <title></title>
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
    </style>
    <!--[if mso]>
      <style type="text/css">
        body,
        table,
        td {
          font-family: Arial, Helvetica, sans-serif !important;
        }

        img {
          -ms-interpolation-mode: bicubic;
        }

        .box {
          border-color: #eee !important;
        }
      </style>
    <![endif]-->
    
  </head>

  <body class="bg-body" style="font-size: 15px; margin: 0; padding: 0; line-height: 160%; mso-line-height-rule: exactly; color: #444444; width: 100%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;" bgcolor="#f5f7fb">
    <center>
      <table class="main bg-body" width="100%" cellspacing="0" cellpadding="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; border-collapse: collapse; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;" bgcolor="#f5f7fb">
        <tr>
          <td align="center" valign="top" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;">
            <!--[if (gte mso 9)|(IE)]>
              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center" valign="top" width="640">
            <![endif]-->
            <span class="preheader" style="font-size: 0; padding: 0; display: none; max-height: 0; mso-hide: all; line-height: 0; color: transparent; height: 0; max-width: 0; opacity: 0; overflow: hidden; visibility: hidden; width: 0;">Your Ticket(s) for {{$event->title}}</span>
            <table class="wrap" cellspacing="0" cellpadding="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; border-collapse: collapse; width: 100%; max-width: 640px; text-align: left;">
              <tr>
                <td class="p-sm" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; padding: 8px;">
                  <div class="main-content" style="box-sizing: border-box;">
                    @foreach($attendees as $attendee)
                      @if(!$attendee->is_cancelled)
                    <table class="box" cellpadding="0" cellspacing="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; border-collapse: collapse; width: 100%; border-radius: 3px; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05); box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05); border: 1px solid #f0f0f0;" bgcolor="#ffffff">
                      <tr>
                        <td style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;">
                          <table cellpadding="0" cellspacing="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; border-collapse: collapse; width: 100%;">
                            <tr>
                              <td class="content border-top" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; border-top-width: 1px; border-top-color: #f0f0f0; border-top-style: solid; padding: 40px 48px;">
                                {{-- <a href="https://tixy.ng/" style="color: #467fcf; text-decoration: none;"><img src="{{asset('assets/images/slay-logo.png')}}" height="32" alt="" style="line-height: 100%; outline: none; text-decoration: none; vertical-align: baseline; font-size: 0; border: 0 none;" /></a> --}}
                                <br />
                                <br />
                                <div class="barcode">
                            {!! DNS2D::getBarcodeSVG($attendee->private_reference_number, "QRCODE", 6, 6) !!}
                            <img
                              src="data:image/png;base64, {{$image}}"
                                      width="130"
                                      alt=""
                                      style="float: right"
                                    />
                        </div>
                        @if($event->is_1d_barcode_enabled)
                        <div class="barcode_vertical">
                            {!! DNS1D::getBarcodeSVG($attendee->private_reference_number, "C39+", 1, 50) !!}
                            <img alt="{{$event->title}}" src="data:image/png;base64, {{$image}}" width="130" 
                            style="float: right" >
                            <img
                              src="{{asset('assets/images/ticketimg.png')}}"
                                      width="130"
                                      height="130"
                                      alt=""
                                      style="float: right"
                                    />
                        </div>
                        @endif
                                <br />
                                <br />
                                <h4 style="font-weight: 600; font-size: 16px; margin: 0 0 .5em;">Order details</h4>
                                <table class="table" cellspacing="0" cellpadding="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; border-collapse: collapse; width: 100%;">
                                  <tr>
                                    <td class="col" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; padding: 4px 0;" valign="top"></td>
                                  </tr>
                                  <tr>
                                    <td style="width: 30%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; padding: 4px 12px 4px 0;">Event</td>
                                    <td class="font-strong text-right" style="width: 70%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: 600; padding: 4px 0 4px 12px;" align="right">
                                      {{$event->title}}
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="width: 30%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; padding: 4px 12px 4px 0;">Name</td>
                                    <td class="font-strong text-right" style="width: 70%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: 600; padding: 4px 0 4px 12px;" align="right">
                                      {{$attendee->first_name.' '.$attendee->last_name}}
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="width: 30%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; padding: 4px 12px 4px 0;">Organiser</td>
                                    <td class="font-strong text-right" style="width: 70%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: 600; padding: 4px 0 4px 12px;" align="right">
                                     {{$event->organiser->name}}
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="width: 30%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; padding: 4px 12px 4px 0;">Ticket Type</td>
                                    <td class="font-strong text-right" style="width: 70%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: 600; padding: 4px 0 4px 12px;" align="right">
                                      {{$attendee->ticket->title}}
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="width: 30%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; padding: 4px 12px 4px 0;">Venue</td>
                                    <td class="font-strong text-right" style="width: 70%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: 600; padding: 4px 0 4px 12px;" align="right">
                                      {{$event->venue_name}}
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="width: 30%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; padding: 4px 12px 4px 0;">Order Reference</td>
                                    <td class="font-strong text-right" style="width: 70%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: 600; padding: 4px 0 4px 12px;" align="right">
                                      {{$order->order_reference}}
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="width: 30%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; padding: 4px 12px 4px 0;">Attendee Reference</td>
                                    <td class="font-strong text-right" style="width: 70%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: 600; padding: 4px 0 4px 12px;" align="right">
                                      {{$attendee->reference}}
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="width: 30%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; padding: 4px 12px 4px 0;">Start Date</td>
                                    <td class="font-strong text-right" style="width: 70%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: 600; padding: 4px 0 4px 12px;" align="right">
                                      {{$event->start_date->format('M dS g:iA')}}
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="width: 30%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; padding: 4px 12px 4px 0;">End Date</td>
                                    <td class="font-strong text-right" style="width: 70%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: 600; padding: 4px 0 4px 12px;" align="right">
                                      {{$event->end_date->format('M dS g:iA')}}
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="width: 30%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; padding: 4px 12px 4px 0;">Price</td>
                                    <td class="font-strong text-right" style="width: 70%; font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: 600; padding: 4px 0 4px 12px;" align="right">
                                      {{money($attendee->ticket->total_price, $order->event->currency)}} (inc. {{money($attendee->ticket->total_booking_fee, $order->event->currency)}} Fees)
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                    @endif
            @endforeach
                  </div>
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
