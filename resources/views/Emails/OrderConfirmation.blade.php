@extends('Emails.Layouts.Master')

@section('message_content')

               <!--  <div
                  class="rounded p-md mb-sm border border-green"
                >
                  <table
                    class="row row-flex"
                    cellspacing="0"
                    cellpadding="0"
                  >
                    <tr>
                      <td class="col w-1p">
                        <img
                          src="./assets/sample-qrcode.png"
                          width="160"
                          height="160"
                          alt=""
                        />
                      </td>
                      <td class="col-spacer"></td>
                      <td class="col">
                        <h4 class="text-green text-uppercase">
                          
                        </h4>
                        <div>
                          Ticket Type: , Amount:
                          ₦2,500<br />
                          Payment Date: 5 September 2018
                        </div>
                        <div class="font-sm text-muted mt-md">
                          Show this confirmation at the
                          reception at check-in.
                        </div>
                      </td>
                    </tr>
                  </table>
                </div> -->

                <p class="h1" style="font-weight: bold">
                  Dear {{$order->full_name}},
                </p>
                <p>
                  Your order for the event <b>{{$order->event->title}}</b> was successful.<br><br>
Your tickets are attached to this email.<br />
                  <br />
                  You can also view you order details and download your tickets at: {{route('showOrderDetails', ['order_reference' => $order->order_reference])}}
                </p>
              </td>
            </tr>
            <tr>
              <td class="content border-top">
                <h4>Order details</h4>
                <table
                  class="table"
                  cellspacing="0"
                  cellpadding="0"
                >
                  <tr>
                    <td>Order Reference</td>
                    <td class="font-strong text-right">
                      {{$order->order_reference}}
                    </td>
                  </tr>
                  <tr>
                    <td>Name</td>
                    <td class="font-strong text-right">
                      {{$order->full_name}}
                    </td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td class="font-strong text-right">
                      {{$order->email}}
                    </td>
                  </tr>
                  <tr>
                    <td>Order Date</td>
                    <td class="font-strong text-right">
                      {{$order->created_at->toDayDateTimeString()}}
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td class="content border-top">
                <h4>Order Items</h4>
                <table
                  class="table"
                  cellspacing="0"
                  cellpadding="0"
                >
                  <tr>
                    <th colspan="2"></th>
                    <th
                      class="text-right"
                      style="padding-right:12px"
                    >
                      Qty
                    </th>
                    <th
                      class="text-right"
                      style="padding-right:12px"
                    >
                      Price
                    </th>
                    <th colspan="2" class="text-right">
                      Total
                    </th>
                  </tr>
                  @foreach($order->orderItems as $order_item)
                  <tr>
                    <td colspan="2" class="pl-md w-100p">
                      <strong>{{$order->event->title}}</strong><br />
                      <span class="text-muted"
                        >{{$order->full_name}} • {{$order_item->title}}</span
                      >
                    </td>
                    <td class="text-right">{{$order_item->quantity}}</td>
                    <td class="text-right">
                      @if((int)ceil($order_item->unit_price) == 0)
                        FREE
                        @else
                       {{money($order_item->unit_price, $order->event->currency)}}
                        @endif
                    </td>
                    <td colspan="2" class="text-right">
                      @if((int)ceil($order_item->unit_price) == 0)
                        FREE
                        @else
                        {{money(($order_item->unit_price + $order_item->unit_booking_fee) * ($order_item->quantity), $order->event->currency)}}
                        @endif
                    </td>
                  </tr>
                  @endforeach
                  <tr class="border-top">
                    <td
                      colspan="4"
                      class="text-right font-strong h3 m-0"
                    >
                      Total
                    </td>
                    <td
                      colspan="2"
                      class="font-strong h3 m-0 text-right"
                    >
                      {{money($order->amount + $order->order_fee, $order->event->currency)}}
                    </td>
                  </tr>
                </table>

                <p>
                  We have also sent tickets to each recipient.
                </p>
              </td>
            </tr>
            <tr>
              <td class="content text-center border-top">
                <p>
                  Do you have any questions? Simply respond to
                  this email.<br /><br />
                  Happy planning!<br />
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
