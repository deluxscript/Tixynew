<style>
    /* @font-face {
        font-family: 'FuturaPTBook';
        src: url('https://dev.tixy.ng/assets/stylesheet/icons/iconfont/fonts/FuturaPTBook.ttf') format('woff'),
            url('https://dev.tixy.ng/assets/stylesheet/icons/iconfont/fonts/FuturaPTBook.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    } */
    #hidee {
        display: none!important;
    }
    .btn-success[disabled] {
        cursor: not-allowed !important;
        pointer-events: auto;
    }
    .dim-pay {
        background: black;
        height: 100%;
        position: fixed;
        width: 100%;
        top: 0px;
        left: 0;
        opacity: 0.5;
        display: none;
    }
    .dim-pay div {
        text-align: center;
        margin-top: 70px;
    }
</style>
<style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            -webkit-font-smoothing: antialiased;
            color: #495057;
        }
        .ticket {
            color: #495057;
        }
        .ticket-title {
            color: #212529;
        }
        .btn {
            text-transform: none;
            font-weight: 700;
            border-radius: 4px;
            transition: 250ms ease-in-out;
            text-shadow: none;
            border: none !important
        }
        .btn.btn-secondary {
            background: #dbe4ff;
            color: #1e2edb !important;
            margin-bottom: 16px
        }
        .btn:hover {
            opacity: 0.8
        }
        .btn.disabled, .btn[disabled] {
            background: #e9ecef;
            color: #868e96 !important
        }
        h3 {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            color: #495057;
            padding-bottom: 8px
        }
        label {
            color: #868e96
        }
        input[type="text"] {
            border-radius: 4px;
            border: none;
            background: #e9ecef;
            color: #212529 !important
        }
        .panel {
            border-radius: 4px;
            border-color: #dee2e6;
            box-shadow: 0 16px 32px -4px #dee2e6;
            border-bottom-width: 1px;
        }
        .panel-heading {
            padding-top: 4px;
        }
        .panel-footer {
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px;
            color: #212529 !important;
            background: #FCF7E9 !important;
            border-top: none
        }
        .panel-primary .panel-heading {
            background: #FCF7E9 !important;
            border-top-right-radius: 4px;
            border-top-left-radius: 4px;
            border-left: 1px solid #dee2e6 !important;
            border-top: 1px solid #dee2e6 !important;
            border-right: 1px solid #dee2e6 !important;
            color: #212529 !important
        }
        .help-block {
            padding: 16px;
            border-radius: 4px;
            background: #f1f3f5;
            color: #495057
        }
        .humane {
            background: #ffa94d;
            text-align: center;
            color: #212529;
            box-shadow: 0 32px 64px -8px #ffe8cc
        }
</style>
<script src="https://js.paystack.co/v1/inline.js"></script>
<section id='order_form' class="container">
    <div class="row">
        {{-- <h1 class="section_head">
            Order Details
        </h1> --}}
    </div>
    <div class="row">
        <div class="col-md-4 col-md-push-8">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="ico-cart mr5"></i>
                        Order Summary
                    </h3>
                </div>

                <div class="panel-body pt0">
                    <table class="table mb0 table-condensed">
                        @foreach($tickets as $ticket)
                        <tr>
                            <td class="pl0">{{{$ticket['ticket']['title']}}} X <b>{{$ticket['qty']}}</b></td>
                            <td style="text-align: right;">
                                @if((int)ceil($ticket['full_price']) === 0)
                                FREE
                                @else
                                {{ money($ticket['full_price'], $event->currency) }}
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                @if($order_total > 0)
                <div class="panel-footer">
                    <h5>
                        Total: <span style="float: right;" id="totAmt"><b>{{ money($order_total + $total_booking_fee,$event->currency) }}</b></span>
                    </h5>
                </div>
                @endif

            </div>
            <div class="help-block" style="font-size: 20px;">
                Please note you only have <span id='countdown'></span> to complete this transaction before your tickets are re-released.
		<br>
		<br>
		To edit ticket information, refresh page.
            </div>
        </div>
        <div class="col-md-8 col-md-pull-4">
            <div class="event_order_form">
                {!! Form::open(['url' => route('postCreateOrder', ['event_id' => $event->id]), 'id' => 'enablee', 'class' => ($order_requires_payment && @$payment_gateway->is_on_site) ? 'ajax payment-form' : 'ajax', 'data-stripe-pub-key' => isset($account_payment_gateway->config['publishableKey']) ? $account_payment_gateway->config['publishableKey'] : '']) !!}

                {!! Form::hidden('event_id', $event->id) !!}

                <h3>Your Information</h3>

                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            {!! Form::label("order_first_name", 'First Name') !!}
                            {!! Form::text("order_first_name", null, ['required' => 'required', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            {!! Form::label("order_last_name", 'Last Name') !!}
                            {!! Form::text("order_last_name", null, ['required' => 'required', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label("order_email", 'Email') !!}
                            {!! Form::text("order_email", null, ['required' => 'required', 'id' => 'pemail', 'class' => 'form-control']) !!}
                            <p style="font-size: 13px"><span style="font-size: 10px">*</span> Please note that tickets will only be sent to buyer's email</p>
                        </div>
                    </div>
                </div>
                @for ($i = 0; $i < count($tickets); $i++)
                    {{print_r($tickets[$i]['qty'])}}
                @endfor
                @foreach($tickets as $ticket)
                @if($ticket['qty']<=2)
                <div class="p20 pl0">
                    <a href="javascript:void(0);" class="btn btn-primary" style="width:100%; text-transform: uppercase;" id="mirror_buyer_info">
                        Copy buyer's name to all ticket holders
                    </a>
                </div>
                @endif
                @endforeach

                <div class="row">
                    <div class="col-md-12">
                        <div class="ticket_holders_details" >
                            <h3>Ticket Holder Information</h3>
                            <?php
                                $total_attendee_increment = 0;
                            ?>
                            @foreach($tickets as $ticket)
                                @for($i=0; $i<=$ticket['qty']-1; $i++)
                                <div class="panel panel-primary">

                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <b>{{$ticket['ticket']['title']}}</b>: Ticket Holder {{$i+1}} Details
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {!! Form::label("ticket_holder_first_name[{$i}][{$ticket['ticket']['id']}]", 'First Name') !!}
                                                    {!! Form::text("ticket_holder_first_name[{$i}][{$ticket['ticket']['id']}]", null, ['required' => 'required', 'class' => "ticket_holder_first_name.$i.{$ticket['ticket']['id']} ticket_holder_first_name ffname form-control"]) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {!! Form::label("ticket_holder_last_name[{$i}][{$ticket['ticket']['id']}]", 'Last Name') !!}
                                                    {!! Form::text("ticket_holder_last_name[{$i}][{$ticket['ticket']['id']}]", null, ['required' => 'required', 'class' => "ticket_holder_last_name.$i.{$ticket['ticket']['id']} ticket_holder_last_name llname form-control"]) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    {!! Form::label("ticket_holder_email[{$i}][{$ticket['ticket']['id']}]", 'Email Address') !!}
                                                    {!! Form::text("ticket_holder_email[{$i}][{$ticket['ticket']['id']}]", null, ['required' => 'required', 'class' => "ticket_holder_email.$i.{$ticket['ticket']['id']} ticket_holder_email eemail form-control"]) !!}
						    <p style="font-size: 13px"><span style="font-size: 10px">*</span> Please note that tickets will only be sent to buyer's email</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                </div>
                                @endfor
                            @endforeach
                            @include('Public.ViewEvent.Partials.AttendeeQuestions', ['ticket' => $ticket['ticket'],'attendee_number' => $total_attendee_increment++])
                        </div>
                    </div>
                </div>

                <style>
                    .offline_payment_toggle {
                        padding: 20px 0;
                    }
                </style>

                @if($order_requires_payment)

                @if($event->enable_offline_payments)
                    <div class="offline_payment_toggle">
                        <div class="custom-checkbox">
                            <input data-toggle="toggle" id="pay_offline" name="pay_offline" type="checkbox" value="1">
                            <label for="pay_offline">Pay using offline method</label>
                        </div>
                    </div>
                    <div class="offline_payment" style="display: none;">
                        <h5>Offline Payment Instructions</h5>
                        <div class="well">
                            {!! Markdown::parse($event->offline_payment_instructions) !!}
                        </div>
                    </div>

                @endif


                @if(@$payment_gateway->is_on_site)
                    <div class="online_payment" id="hidee" style="display: none;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::label('card-number', 'Card Number') !!}
                                    <input required="required" type="text" autocomplete="off" placeholder="**** **** **** ****" value="4242424242424242" class="form-control card-number" size="20" data-stripe="number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    {!! Form::label('card-expiry-month', 'Expiry Month') !!}
                                    {!!  Form::selectRange('card-expiry-month',1,12,10, [
                                            'class' => 'form-control card-expiry-month',
                                            'data-stripe' => 'exp_month'
                                        ] )  !!}
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    {!! Form::label('card-expiry-year', 'Expiry Year') !!}
                                    {!!  Form::selectRange('card-expiry-year',date('Y'),date('Y')+10,2020, [
                                            'class' => 'form-control card-expiry-year',
                                            'data-stripe' => 'exp_year'
                                        ] )  !!}</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::label('card-expiry-year', 'CVC Number') !!}
                                    <input required="required" placeholder="***" value="123" class="form-control card-cvc" data-stripe="cvc">
                                </div>
                            </div>
                        </div>
                    </div>

                @endif

                @endif

                @if($event->pre_order_display_message)
                <div class="well well-small">
                    {!! nl2br(e($event->pre_order_display_message)) !!}
                </div>
                @endif

            {!! Form::hidden('is_embedded', $is_embedded) !!}
            {!! Form::submit('Checkout', ['class' => 'btn btn-lg btn-success card-submit', 'style' => 'width:100%;', 'id' => 'paystacksubmit']) !!}

            </div>
        </div>
        <div class="dim-pay" id="dimpay" style="display: none;">
            <div class="loader loader--style3" title="2">
                <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   width="40px" height="40px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                <path fill="#fff" d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
                  <animateTransform attributeType="xml"
                    attributeName="transform"
                    type="rotate"
                    from="0 25 25"
                    to="360 25 25"
                    dur="0.6s"
                    repeatCount="indefinite"/>
                  </path>
                </svg>
                <p style="color: white; font-size: 20px; margin-top: 200px; font-weight:bold;">Do not close this page. Processing ticket...</p>
              </div>
        </div>
    </div>
</section>
{{-- <script>
    var toHide = document.getElementsByClassName('survey_question');
    console.log(toHide);
    if (toHide < 1 || toHide = null) {
        document.getElementById("paystacksubmit").disabled = false;
    }
</script> --}}
@if(session()->get('message'))
    <script>showMessage('{{session()->get('message')}}');</script>
@endif

