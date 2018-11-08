@extends('Emails.Layouts.Master')

<style type="text/css">

    body {
          background: #F8F9FA;
          margin: 0; 
          padding: 0; 
          min-width: 100%!important;
          font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
          font-size: 16px;
          line-height: 160%;
          -webkit-font-smoothing: antialiased
        }
        table {
          color: #495057;
        }
        td {
          padding-bottom: 8px;
        }
        .header {
          color: #212529;
          font-size: 24px;
          font-weight: 600;
          line-height: 120%;
          display: block;
          margin-bottom: 8px;
        }
        .section-header {
          font-size: 14px;
          margin-top: 32px;
          border-bottom: 1px solid #dee2e6;
          padding-bottom: 8px;
          color: #868e96;
        }
        .order-detail {
          font-size: 16px;
        }
        .order-item {
          font-size: 14px;
        }
        .container {
          padding: 32px 16px;
        }
        .content {
          position:relative;
          width: 100%;
          max-width: 600px;
          background: white;
          border-radius: 4px;
          overflow: hidden;
        }
        .button {
          background: #1756E5;
          color: white;
          border-radius: 4px;
          padding: 16px 32px;
          display: inline-block;
          text-decoration: none;
          font-weight: 600;
        }
        .button:hover {
          background: #1756F6;
        }
        .message, .section, .theader {
          padding: 0 16px;
        }
        .theader {
          font-size: 12px;
        }
        .section {
          border-top: 1px solid #dee2e6;
          margin-top: 16px;
          padding-top: 32px;
          width: 100%;
        }
        .footer {
          text-align: center;
          color: #868e96;
          margin-bottom: 32px;
        }
        p {
          margin: 0;
        }
        .links {
          margin-top: 16px;
        }
        a {
          color: #1756E5;
        }
        .links a {
          color: #212529;
        }
        .logo {
          margin-bottom: 32px;
        }
        .tixy-logo {
          margin-top: 8px;
          display: inline-block;
          margin: 8px 0 0 0;
        }
        .image {
          margin-bottom: 16px;
        }
</style>

@section('message_content')
<table class="content" align="center" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td>
                <img class="image" width="100%" src="{{url(asset('assets/images/header.png'))}}"  alt='Header.jpg'/>
            </td>
        </tr>
        <tr>
            <td>
                <div class="message">
                    <span class="header">Dear Guest,</span>
                    You have been invited {{$order->event->title}} to attend the 2018 edition of ART X Lagos, happening from the 3rd to 4th of November
                    2018.
                    <br>
                    <br> Please find attached your ticket(s), which you can either print-out or access on your smartphone
                    for scanning at the venue.
                    <br>
                    {{-- <br> You can also view your order details and download your tickets at
                    <span style="color: #1756E5;">{{route('showOrderDetails', ['order_reference' => $order->order_reference])}}</span> --}}
                </div>
            </td>
        </tr>
                    <tr>
                        <td>
                            <div class="message">
                                <span class="header section-header">Order Details</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="content">
                                <tr>
                                    <td>
                                        <div class="message">
                                            Order Reference
                                            <span class="header order-detail">{{$order->order_reference}}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="message">
                                            Order Name
                                            <span class="header order-detail">{{$order->full_name}}</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="message">
                                            Order Date
                                            <span class="header order-detail">{{$order->created_at->toDayDateTimeString()}}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="message">
                                            Order Email
                                            <span class="header order-detail">{{$order->email}}</span>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a class="message" style="color: #1756E5;" href="{!! route('downloadCalendarIcs', ['event_id' => $order->event->id]) !!}">Add to calendar</a>

                            <div class="message">
                                <span class="header section-header">Order Items</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="content">
                                <th>
                                    <tr>
                                        <td>
                                            <div class="theader">
                                                Tickets
                                            </div>
                                        </td>
                                        <td>
                                            <div class="theader">
                                                Qty.
                                            </div>
                                        </td>
                                        <td>
                                            <div class="theader">
                                                Price
                                            </div>
                                        </td>
                                        <td>
                                            <div class="theader">
                                                Fee
                                            </div>
                                        </td>
                                        <td>
                                            <div class="theader">
                                                Total
                                            </div>
                                        </td>
                                    </tr>
                                </th>
                                {{ dd($order->orderItems) }}
                                @foreach($order->orderItems as $order_item)
                                
                                <tr>
                                    <td>
                                        <div class="message">
                                            <span class="header order-item">{{$order_item->title}}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="message">
                                            <span class="header order-detail">{{$order_item->quantity}}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="message">
                                            <span class="header order-detail">
                                            	@if((int)ceil($order_item->unit_price) == 0)
		                                        FREE
		                                        @else
		                                       {{money($order_item->unit_price, $order->event->currency)}}
		                                        @endif
                                    		</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="message">
                                            <span class="header order-detail">
                                            	@if((int)ceil($order_item->unit_price) == 0)
                                        -
                                        @else
                                        {{money($order_item->unit_booking_fee, $order->event->currency)}}
                                        @endif
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="message">
                                            <span class="header order-detail">
                                            	@if((int)ceil($order_item->unit_price) == 0)
                                        FREE
                                        @else
                                        {{money(($order_item->unit_price + $order_item->unit_booking_fee) * ($order_item->quantity), $order->event->currency)}}
                                        @endif
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            <p class="message" style="font-size: 14px;">Please note that:</p>
                            <ul style="line-height: 1.5; font-size: 14px;">
                                <li>Your ticket is valid for <b>one day only</b>. </li>
                                <li>Each ticket grants access to the fair to one person only, on the specified day, from 10am to 8pm only.</li>
                                <li>Your ticket grants access to ART X Talks, however seating is limited, and is <b>not</b> guaranteed.</li>
                                <li>Saturday Day-Tickets do <b>not</b> grant access to ART X Live! (this is an invitation-only event).</li>
                                <li>Tickets are non-changeable and non-refundable.</li>
                            </ul>
                            <p class="message" style="line-height: 1.5; font-size: 14px;">
                                    You can follow the excitement leading up to our art fair at <a href="www.artxlagos.com">www.artxlagos.com</a> and on our <a href="https://www.instagram.com/artxlagos/">Instagram</a>, <a href="https://web.facebook.com/artxlagos">Facebook</a> and <a href="https://twitter.com/artxlagos">Twitter</a> channels.
                                </p>
                                <br><br>
                                <p class="message" style="font-size: 14px;">We look forward to seeing you at ART X Lagos!</p>
                                <br><br>
                                <p class="message" style="font-size: 14px;">Team ART X.</p>
                                <br><br>
                                <p class="message" style="font-size: 14px;">ART X Lagos is proudly sponsored by;</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="image" width="100%" src="{{url(asset('assets/images/footer.jpg'))}}"  alt='Footer.jpg'
                            />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
@stop
