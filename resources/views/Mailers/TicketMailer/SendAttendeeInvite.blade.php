@extends('Emails.Layouts.Master')

@section('message_content')
Hello,<br><br>

Your order for the event <b>{{$attendee->order->event->title}}</b> was successful.<br><br>

Your tickets are attached to this email. You can also view you order details and download your tickets at: {{route('showOrderDetails', ['order_reference' => $attendee->order->order_reference])}}

@if(!$attendee->order->is_payment_received)
<br><br>
<b>Please note: This order still requires payment. Instructions on how to make payment can be found on your order page: {{route('showOrderDetails', ['order_reference' => $attendee->order->order_reference])}}</b>
<br><br>
@endif
<h3>Order Details</h3>
Order Reference: <b>{{$attendee->order->order_reference}}</b><br>
Order Name: <b>{{$attendee->order->full_name}}</b><br>
Order Date: <b>{{$attendee->order->created_at->toDayDateTimeString()}}</b><br>
Order Email: <b>{{$attendee->order->email}}</b><br>
<h3>Order Items</h3>
<div style="padding:10px; background: #F9F9F9; border: 1px solid #f1f1f1;">
    <table style="width:100%; margin:10px;">
        <tr>
            <td>
                <b>Ticket</b>
            </td>
            <td> 
                <b>Qty.</b>
            </td>
            <td>
                <b>Price</b>
            </td>
            <td>
                <b>Fee</b>
            </td>
            <td>
                <b>Total</b>
            </td>
        </tr>
        @foreach($attendee->order->orderItems as $order_item)
        {{dd($order_item) }}
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
		                                       {{money($order_item->unit_price, $attendee->order->event->currency)}}
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
                                        {{money($order_item->unit_booking_fee, $attendee->order->event->currency)}}
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
                                        {{money(($order_item->unit_price + $order_item->unit_booking_fee) * ($order_item->quantity), $attendee->order->event->currency)}}
                                        @endif
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
        <tr>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
                <b>Sub Total</b>
            </td>
            <td colspan="2">
               {{money($attendee->order->amount + $attendee->order->order_fee, $attendee->order->event->currency)}}
            </td>
        </tr>
    </table>

    <br><br>
</div>
<br><br>
Thank you
@stop
