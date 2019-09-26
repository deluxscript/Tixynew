@extends('Emails.Layouts.Master')

@section('message_content')
<div class="main-content" style="box-sizing: border-box;">
    <img src="{{asset('assets/images/new-banner.png')}}" class="border-left border-right border-top" alt="thumbs up" style="border-top-right-radius: 4px;border-top-left-radius: 4px;margin-bottom: -2px;z-index: 100;width: 100%;box-sizing: border-box;border: 0 none;line-height: 100%;outline: none;text-decoration: none;vertical-align: middle;font-size: 0;border-top: 1px solid #f0f0f0;border-left: 1px solid #f0f0f0;border-right: 1px solid #f0f0f0;">
    <table class="box" cellpadding="0" cellspacing="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;border-collapse: collapse;width: 100%;background: #ffffff;border-radius: 3px;-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);border: 1px solid #f0f0f0;-premailer-cellpadding: 0;-premailer-cellspacing: 0;">
      <tr>
        <td style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;">
          <table cellpadding="0" cellspacing="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;border-collapse: collapse;width: 100%;-premailer-cellpadding: 0;-premailer-cellspacing: 0;">
            <tr>
              <td class="content" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;padding: 40px 48px;">
              <p style="line-height: 1.5; font-size: 16px;">Dear {{$attendee->order->full_name}}</p>
                                   
                <p style="line-height: 1.5; font-size: 16px;">Thank you for purchasing a ticket to attend the 4th Edition of ART X Lagos on Saturday 2nd November 2019.</p>
                <p style="line-height: 1.5; font-size: 16px;">
                    Please have your ticket with you on arrival. A wristband will be given to you at the registration desk which will grant you access to the ART X Lagos fair.
                <p/>
                <p style="line-height: 1.5; font-size: 16px;">
                    The ART X Lagos fair is open from 10am – 8pm and the ART X Talks will hold from 3pm - 7:45pm. Please note, your ticket does not guarantee a seat for the ART X Talks so please arrive early to secure a seat. Check out our website <a href="www.artxlagos.com">www.artxlagos.com</a> for more details on all of the fair sections.
                <p/>
                <p style="line-height: 1.5; font-size: 16px;">
                    We look forward to welcoming you to ART X Lagos this year. 
                <p/>
                <p style="line-height: 1.5; font-size: 16px;">
                    Warm regards,
                <p/>
                <p style="line-height: 1.5; font-size: 16px;">
                    Team ART X
                </p>
              </td>
            </tr>
            <tr>
                <td class="content text-center border-top" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;padding: 40px 48px;text-align: center;border-top: 1px solid #f0f0f0;">
                 <img src="{{asset('assets/images/footer.png')}}" class="border-left border-right border-top" alt="thumbs up" style="border-top-right-radius: 4px;border-top-left-radius: 4px;margin-bottom: -2px;z-index: 100;width: 100%;box-sizing: border-box;border: 0 none;line-height: 100%;outline: none;text-decoration: none;vertical-align: middle;font-size: 0;border-top: 1px solid #f0f0f0;border-left: 1px solid #f0f0f0;border-right: 1px solid #f0f0f0;" />
                </td>
              </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>
@stop
