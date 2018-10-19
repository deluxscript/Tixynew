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
        <title>{{{$organiser->name}}} - Tixy</title>


        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0" />


        <!-- Open Graph data -->
        <meta property="og:title" content="{{{$organiser->name}}}" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{{URL::to('')}}" />
        <meta property="og:image" content="{{URL::to($organiser->full_logo_path)}}" />
        <meta property="og:description" content="{{{Str::words(strip_tags($organiser->description)), 20}}}" />
        <meta property="og:site_name" content="Attendize.com" />
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

       {!!HTML::style('assets/stylesheet/frontend.css')!!}

       <style>
            body {
                background-color: #EEEEEE !important;
            }
    
            section#intro {
                background-color: #76a867 !important;
                color: #FFFFFF !important;
            }
    
            .event-list>li>time {
                color: #FFFFFF;
                background-color: #76a867;
            }
        </style>
        <style>
            body,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            .h1,
            .h2,
            .h3,
            .h4,
            .h5,
            .h6 {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            }
    
            .event-listing-heading {
                color: #212529;
            }
    
            body {
                -webkit-font-smoothing: antialiased;
                color: #495057;
                background-color: #f8f9fa
            }
    
            h1,
            .title a {
                font-weight: 700
            }
    
            .ticket {
                color: #495057;
            }
    
            .event-list li .info {
                padding-right: 0;
            }
    
            .event-list li {
                border-radius: 4px;
            }
    
            .event-list li .info,
            .event-list li {
                border-top-right-radius: 4px;
                border-bottom-right-radius: 4px;
                overflow: hidden;
            }
    
            section#intro {
                background-color: #fff9db !important;
                color: #212529 !important;
                margin-top: 0
            }
    
            #organiser_page_wrap {
                padding-top: 20px;
                min-height: 100vh;
                position: relative;
                background: url("./tixy-pattern.png");
                background-size: 1000px
            }
    
            .event-list li .info ul {
                background: #dbe4ff;
            }
    
            .event-list li .info ul li a {
                color: #1e2edb;
                font-weight: 500
            }
    
            .event-list>li>.info>ul>li:hover {
                background: #bac8ff;
                font-weight: 500
            }
    
            .ticket-title {
                color: #212529;
            }
    
            .event-list li time .day {
                font-size: 40px;
                font-weight: 300;
            }
    
            .event-list li time .day,
            .event-list li time .month {
                opacity: 0.8
            }
    
            .event-list li time {
                display: flex;
                flex-direction: column;
                align-content: center;
                justify-content: center;
                border-top-left-radius: 4px;
                border-bottom-left-radius: 4px;
                background: #fff9db;
                color: #212529
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
    
            .btn.disabled,
            .btn[disabled] {
                background: #e9ecef;
                color: #868e96 !important
            }
    
            #event_page_wrap #intro .event_buttons .btn-event-link {
                text-transform: none;
                letter-spacing: 0
            }
    
            #event_page_wrap #intro h1 {
                font-weight: 700
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
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
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
        
        @yield('head')
    </head>
    <body class="attendize">
        @include('Shared.Partials.FacebookSdk')
        <div id="organiser_page_wrap">
            @yield('content')
        </div>

        <a href="#intro" style="display:none;" class="totop"><i class="ico-angle-up"></i>
            <span style="font-size:11px;">TOP</span></a>

        {!!HTML::script('assets/javascript/frontend.js')!!}

        @include('Shared.Partials.GlobalFooterJS')
        @yield('foot')
</body>
</html>
