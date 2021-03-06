<!DOCTYPE HTML>
<html>
    <head>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-92002864-7"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-92002864-7');
        </script>
        <title>GoGames | Myanmar</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="{{ asset('css_telenor/price.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('intl-tel-input/build/css/intlTelInput.css')}}" rel="stylesheet">
        <link href="{{asset('stylesheets/typography.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('stylesheets/main.css')}}" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="nav-option">
            @include('layouts.navbar')
        </div>

        <div class="text-center image-logo">
            <img src="{{ asset('tn_image/img/gogames-logo.png') }}" style="width:180px;" alt="Go|Games"  class="logo"/>
        </div>
        <br/>
        <div class="wrap-sm">
            <div class="card">
                <?php
                    if(Session::get('he_msisdn')) {
                        $msisdn = Session::get('he_msisdn');
                    } else {
                        $msisdn = Session::get('msisdn');
                    }
                ?>

                @if(Session::get('he_msisdn'))
                    <p class="mm-zawgyione">
                        သင့္ဖုန္းနံပါတ္ +{{ Session::get('he_msisdn') }} အတြက္ ဝန္ေဆာင္မွဳ ရယူ ရန္ Terms and Conditions ကို လက္ခံ ေပးျခင္းအားျဖင့္ အတည္ျပဳ လိုက္ပါ။
                    </p>
                @endif
                <div class="border">
                    <div class="header">
                        <span class="mm-zawgyione"><b>အဖိုးအခကောက်ခံခြင်းဆိုင်ရာ စည်းကမ်းချက်များ (SDP)</b></span>
                    </div>
                    <p class="mm-zawgyione">{{trans('app.mpt_one')}}</p>
                    <p class="mm-zawgyione">{{trans('app.mpt_two')}}</p>
                    <p class="mm-zawgyione">{{trans('app.mpt_three')}}</p>
                    <p class="mm-zawgyione">{{trans('app.mpt_four')}}</p>
                    <p class="mm-zawgyione">{{trans('app.mpt_five')}}</p>
                    <p class="mm-zawgyione">{{trans('app.mpt_six')}}</p>
                    <p class="mm-zawgyione">{{trans('app.mpt_seven')}}</p>
                    <p class="mm-zawgyione">{{trans('app.mpt_eight')}}</p>
                    <p class="mm-zawgyione">{{trans('app.mpt_nine')}}</p>
                    <p class="mm-zawgyione">MPT အခပေးချေမှုစည်းမျဉ်းစည်းကမ်းများ အပြည့်အစုံကို ဤတွင် တွေ့ရှိနိုင်ပါသည်။ <a href="{{ url('/mpt/ma/fulltandc') }}"> <strong><u>ပိုမိုသိရှိရန်</u></strong></a></p>
                    <div id="full">
                        
                    </div>
                    <center>
                        <!-- <a id="showall"><u>Show All</u></a>
                        <a id="showless"><u>Show Less</u></a> -->
                    </center>
                    <p style="color: red;">
                        <span class="mm-zawgyione"> 
                        @if(isset($message))
                            {{ $message['message'] }}
                        @endif
                        </span>
                    </p>
                    @if (Session::has('ott'))
                        <div class="row mm-zawgyione">
                            <button type="submit" id="click_prevent" class="btn-submit"><span class="mm-zawgyione"><a href="{{ url('/mpt/ma/verify') }}" style="color: #FFF;">လက်ခံပါသည်။</a></span></button>
                        </div>
                    @else 
                        <button type="submit" class="btn-submit"><span class="mm-zawgyione"><a href="{{ url('/mpt/ma/web') }}" style="color: #FFF;">လက်ခံပါသည်။</a></span></button>
                    @endif
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('intl-tel-input/build/js/intlTelInput.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</html>




