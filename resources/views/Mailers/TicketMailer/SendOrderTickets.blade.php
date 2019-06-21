@extends('Emails.Layouts.Master')

@section('message_content')
<div class="main-content" style="box-sizing: border-box;">
    <img src="{{asset('assets/images/default-banner.jpg')}}" class=" va-middle border-left border-right border-top" alt="thumbs up" style="border-top-right-radius: 4px;border-top-left-radius: 4px;margin-bottom: -2px;z-index: 100;width: 100%;box-sizing: border-box;border: 0 none;line-height: 100%;outline: none;text-decoration: none;vertical-align: middle;font-size: 0;border-top: 1px solid #f0f0f0;border-left: 1px solid #f0f0f0;border-right: 1px solid #f0f0f0;">
    <table class="box" cellpadding="0" cellspacing="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;border-collapse: collapse;width: 100%;background: #ffffff;border-radius: 3px;-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);border: 1px solid #f0f0f0;-premailer-cellpadding: 0;-premailer-cellspacing: 0;">
      <tr>
        <td style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;">
          <table cellpadding="0" cellspacing="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;border-collapse: collapse;width: 100%;-premailer-cellpadding: 0;-premailer-cellspacing: 0;">
            <tr>
              <td class="content" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;padding: 40px 48px;">
                <p class="h1" style="font-weight: bold;margin: 0 0 .5em;font-size: 28px;line-height: 130%;">
                  Dear {{$order->full_name}},
                </p>
                <p style="margin: 0 0 1em;">
                  Your order for the event <b>{{$order->event->title}}</b> was successful.<br><br>
Your tickets are attached to this email.<br>
                  <br>
                  You can also view you order details and download your tickets at: {{route('showOrderDetails', ['order_reference' => $order->order_reference])}}
                </p>
              </td>
            </tr>
            <tr>
              <td class="content border-top" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;padding: 40px 48px;border-top: 1px solid #f0f0f0;">
                <h4 style="font-weight: 600;margin: 0 0 .5em;font-size: 16px;">Order details</h4>
                <table class="table" cellspacing="0" cellpadding="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;border-collapse: collapse;width: 100%;-premailer-cellpadding: 0;-premailer-cellspacing: 0;">
                  <tr>
                    <td style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;padding: 4px 12px;padding-left: 0;">Order Reference</td>
                    <td class="font-strong text-right" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;text-align: right;font-weight: 600;padding: 4px 12px;padding-right: 0;">
                      {{$order->order_reference}}
                    </td>
                  </tr>
                  <tr>
                    <td style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;padding: 4px 12px;padding-left: 0;">Name</td>
                    <td class="font-strong text-right" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;text-align: right;font-weight: 600;padding: 4px 12px;padding-right: 0;">
                      {{$order->full_name}}
                    </td>
                  </tr>
                  <tr>
                    <td style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;padding: 4px 12px;padding-left: 0;">Email</td>
                    <td class="font-strong text-right" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;text-align: right;font-weight: 600;padding: 4px 12px;padding-right: 0;">
                      {{$order->email}}
                    </td>
                  </tr>
                  <tr>
                    <td style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;padding: 4px 12px;padding-left: 0;">Order Date</td>
                    <td class="font-strong text-right" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;text-align: right;font-weight: 600;padding: 4px 12px;padding-right: 0;">
                      {{$order->created_at->toDayDateTimeString()}}
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td class="content border-top" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;padding: 40px 48px;border-top: 1px solid #f0f0f0;">
                <h4 style="font-weight: 600;margin: 0 0 .5em;font-size: 16px;">Order Items</h4>
                <table class="table" cellspacing="0" cellpadding="0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;border-collapse: collapse;width: 100%;-premailer-cellpadding: 0;-premailer-cellspacing: 0;">
                  <tr>
                    <th colspan="2" style="padding: 0 0 4px 0;text-transform: uppercase;font-weight: 600;color: #9eb0b7;font-size: 12px;padding-left: 0;"></th>
                    <th class="text-right" style="padding-right: 12px;text-align: right;padding: 0 0 4px 0;text-transform: uppercase;font-weight: 600;color: #9eb0b7;font-size: 12px;">
                      Qty
                    </th>
                    <th class="text-right" style="padding-right: 12px;text-align: right;padding: 0 0 4px 0;text-transform: uppercase;font-weight: 600;color: #9eb0b7;font-size: 12px;">
                      Pricee
                    </th>
                    <th colspan="2" class="text-right" style="text-align: right;padding: 0 0 4px 0;text-transform: uppercase;font-weight: 600;color: #9eb0b7;font-size: 12px;padding-right: 0;">
                      Total
                    </th>
                  </tr>
                  @foreach($order->orderItems as $order_item)
                  <tr>
                    <td colspan="2" class="pl-md w-100p" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;width: 100%;padding-left: 0;padding: 4px 12px;">
                      <strong style="font-weight: 600;">{{$order->event->title}}</strong><br>
                      <span class="text-muted" style="color: #9eb0b7;">{{$order->full_name}} • {{$order_item->title}}
                    </span></td>
                    <td class="text-right" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;text-align: right;padding: 4px 12px;">{{$order_item->quantity}}</td>
                    <td class="text-right" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;text-align: right;padding: 4px 12px;">
                      @if((int)ceil($order_item->unit_price) == 0)
                        FREE
                        @else
                       {{money($order_item->unit_price, $order->event->currency)}}
                        @endif
                    </td>
                    <td colspan="2" class="text-right" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;text-align: right;padding: 4px 12px;padding-right: 0;">
                      @if((int)ceil($order_item->unit_price) == 0)
                        FREE
                        @else
                        {{money(($order_item->unit_price + $order_item->unit_booking_fee) * ($order_item->quantity), $order->event->currency)}}
                        @endif
                    </td>
                  </tr>
                  @endforeach
                  <tr class="border-top" style="border-top: 1px solid #f0f0f0;">
                    <td colspan="4" class="text-right font-strong h3 m-0" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;font-weight: 600;margin: 0;font-size: 20px;line-height: 120%;text-align: right;padding: 4px 12px;padding-left: 0;">
                      Total
                    </td>
                    <td colspan="2" class="font-strong h3 m-0 text-right" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;font-weight: 600;margin: 0;font-size: 20px;line-height: 120%;text-align: right;padding: 4px 12px;padding-right: 0;">
                      {{money($order->amount + $order->order_fee, $order->event->currency)}}
                    </td>
                  </tr>
                </table>

                <p style="margin: 0 0 1em;">
                  We have also sent tickets to each recipient.
                </p>
              </td>
            </tr>
            <tr>
              <td class="content text-center border-top" style="font-family: Open Sans, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;padding: 40px 48px;text-align: center;border-top: 1px solid #f0f0f0;">
                <p style="margin: 0 0 1em;">
                  Do you have any questions? Simply respond to
                  this email.<br><br>
                  Happy planning!<br>
                  Tixy Support
                </p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>
@stop
