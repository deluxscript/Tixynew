<!DOCTYPE html>
<html lang="en">
    <head>
        <!--
                  _   _                 _ _
             /\  | | | |               | (_)
            /  \ | |_| |_ ___ _ __   __| |_ _______   ___ ___  _ __ ___
           / /\ \| __| __/ _ \ '_ \ / _` | |_  / _ \ / __/ _ \| '_ ` _ \
          / ____ \ |_| ||  __/ | | | (_| | |/ /  __/| (_| (_) | | | | | |
         /_/    \_\__|\__\___|_| |_|\__,_|_/___\___(_)___\___/|_| |_| |_|

        -->
        <title>{{{$event->title}}} - Tixy</title>


        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="canonical" href="{{$event->event_url}}" />


        <!-- Open Graph data -->
        <meta property="og:title" content="{{{$event->title}}}" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{{$event->event_url}}?utm_source=fb" />
        @if($event->images->count())
        <meta property="og:image" content="{{config('attendize.cdn_url_user_assets').'/'.$event->images->first()['image_path']}}" />
        @endif
        <meta property="og:description" content="{{Str::words(strip_tags(Markdown::parse($event->description))), 20}}" />
        <meta property="og:site_name" content="Attendize.com" />
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        @yield('head')

       {!!HTML::style(config('attendize.cdn_url_static_assets').'/assets/stylesheet/frontend.css')!!}

        <!--Bootstrap placeholder fix-->
        <style>
                ::-webkit-input-placeholder { /* WebKit browsers */
                        color:    #ccc !important;
                    }
                    :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
                        color:    #ccc !important;
                        opacity:  1;
                    }
                    ::-moz-placeholder { /* Mozilla Firefox 19+ */
                        color:    #ccc !important;
                        opacity:  1;
                    }
                    :-ms-input-placeholder { /* Internet Explorer 10+ */
                        color:    #ccc !important;
                    }
        
                    input, select {
                        color: #999 !important;
                    }
        
                    .btn {
                        color: #fff !important;
                    }
        
                    @font-face {
                        font-family: 'FuturaPTBook';
                        src: url('http://dev.tixy.ng/assets/stylesheet/icons/iconfont/fonts/FuturaPTBook.woff') format('woff'),
                            url('http://dev.tixy.ng/assets/stylesheet/icons/iconfont/fonts/FuturaPTBook.ttf') format('truetype');
                        font-weight: normal;
                        font-style: normal;
                    }
        
                    .attendize, *  {
                        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol" !important;
                    }
        
                </style>
        
            <style>
                body {
                            background: url("./tixy-pattern.png");
                            background-size: 1000px;
                        }
                    </style>
        
            <style>
                body {
                    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
                    -webkit-font-smoothing: antialiased;
                    color: #495057;
                }
                #event_page_wrap {
                    background: rgba(255,255,255,0.4)
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
                .btn.btn-primary {
                    background-color: #1e2edb !important;
                }
                .btn:hover {
                    opacity: 0.8
                }
                .btn.disabled, .btn[disabled] {
                    background: #e9ecef;
                    color: #868e96 !important
                }
                #event_page_wrap #intro .event_buttons .btn-event-link {
                    text-transform: none;
                    letter-spacing: 0;
                    background:#dbe4ff;
                    color:#1e2edb !important;
                    box-shadow: 0 8px 16px white
                }
                #event_page_wrap #organiserHead {
                    background: rgba(0, 0, 0, 0.1);
                    color: #212529
                }
                #event_page_wrap #intro h1 {
                    font-weight: 700
                }
                #event_page_wrap #intro {
                    color: #212529;
                    padding-top: 64px
                }
                .container {
                    border-radius: 4px;
                    overflow: hidden;
                    padding-bottom: 0;
                    box-shadow: 0 32px 64px -8px rgba(0, 0, 0, 0.1);
                    position: relative;
                    z-index: 1
                }
                #intro {
                    box-shadow: none
                }
                .section_head {
                    font-weight: 700;
                    letter-spacing: 0;
                    color: #212529
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
                .rrssb-text {
                    text-transform: capitalize;
                }
                #footer {
                    background: none;
                }
        
                #footer .container {
                    box-shadow: none
                }
        
                #footer a,
                #footer {
                    color: #495057
                }
                </style>
        @if ($event->bg_type == 'color' || Input::get('bg_color_preview'))
            <style>body {background-color: {{(Input::get('bg_color_preview') ? '#'.Input::get('bg_color_preview') : $event->bg_color)}} !important; }</style>
        @endif

        @if (($event->bg_type == 'image' || $event->bg_type == 'custom_image' || Input::get('bg_img_preview')) && !Input::get('bg_color_preview'))
            <style>
                body {
                    /* background: url({{(Input::get('bg_img_preview') ? '/'.Input::get('bg_img_preview') :  asset(config('attendize.cdn_url_static_assets').'/'.$event->bg_image_path))}}) no-repeat center center fixed; */
                    /* background-size: cover; */
                    background: url('http://tixy-event-page.surge.sh/tixy-pattern.png');
                    background-size: 1000px;
                }
            </style>
        @endif

    </head>
    <body class="attendize">
        <div id="event_page_wrap" vocab="http://schema.org/" typeof="Event">
            @yield('content')

            {{-- Push for sticky footer--}}
            @stack('footer')
        </div>

        {{-- Sticky Footer--}}
        @yield('footer')

        <a href="#intro" style="display:none;" class="totop"><i class="ico-angle-up"></i>
            <span style="font-size:11px;">TOP</span></a>

        {!!HTML::script(config('attendize.cdn_url_static_assets').'/assets/javascript/frontend.js')!!}


        @if(isset($secondsToExpire))
        <script>if($('#countdown')) {setCountdown($('#countdown'), {{$secondsToExpire}});}</script>
        @endif

        @include('Shared.Partials.GlobalFooterJS')
    </body>
</html>
