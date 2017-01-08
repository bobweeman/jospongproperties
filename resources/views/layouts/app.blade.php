<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jospong Properties') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/own.css" rel="stylesheet">
    <link href="{{URL::asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">

        @if(!Route::is('login') && !Route::is('register'))
       @include('page_partial.navbar')
        @endif
        <div class="row">
            {{--<div class="col-md-10 col-md-offset-4">--}}
                {{--@if(Session::has('success'))--}}

                    {{--<span class="alert alert-success">{{Session::get('success')}}</span>--}}
                {{--@endif--}}
                {{--@if(Session::has('error'))--}}

                    {{--<span class="alert alert-danger">{{Session::get('error')}}</span>--}}
                {{--@endif--}}
                {{--@if(Session::has('info'))--}}

                    {{--<span class="alert alert-info">{{Session::get('info')}}</span>--}}
                {{--@endif--}}
            {{--</div>--}}
        </div>

        <br>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/physical_hide.js" type="text/javascript"></script>
    <!--Notifications-->
    <script>
        @if(Session::has('success'))
                noty({
            type:'success',
            theme:'defaultTheme',
            layout:'bottom',
            timeout: 5000, // delay for closing event in milliseconds. Set false for sticky notifications
            animation: {
                open: {height: 'toggle'}, // or Animate.css class names like: 'animated bounceInLeft'
                close: {height: 'toggle'}, // or Animate.css class names like: 'animated bounceOutLeft'
                easing: 'swing',
                speed: 500 // opening & closing animation speed
            },
            text:'{{Session::get('success')}}'
        });

                @endif
                @if(Session::has('error'))

                noty({
                    type:'error',
                    theme:'defaultTheme',
                    layout:'bottom',
                    text:'{{Session::get('error')}}',
                    timeout: 5000, // delay for closing event in milliseconds. Set false for sticky notifications
                    animation: {
                        open: {height: 'toggle'}, // or Animate.css class names like: 'animated bounceInLeft'
                        close: {height: 'toggle'}, // or Animate.css class names like: 'animated bounceOutLeft'
                        easing: 'swing',
                        speed: 500 // opening & closing animation speed
                    },
                    text:'{{Session::get('error')}}'
                });

                @endif
                @if(Session::has('info'))
                noty({
                    type:'information',
                    theme:'defaultTheme',
                    layout:'bottom',
                    text:'{{Session::get('info')}}',
                    timeout: 5000, // delay for closing event in milliseconds. Set false for sticky notifications
                    animation: {
                        open: {height: 'toggle'}, // or Animate.css class names like: 'animated bounceInLeft'
                        close: {height: 'toggle'}, // or Animate.css class names like: 'animated bounceOutLeft'
                        easing: 'swing',
                        speed: 500 // opening & closing animation speed
                    },
                    text:'{{Session::get('info')}}'
                });

        @endif
    </script>
</body>
</html>
