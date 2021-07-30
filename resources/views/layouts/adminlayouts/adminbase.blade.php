<html :class="{ &#39;theme-dark&#39;: dark }" x-data="data()" lang="en" class="theme-dark">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>


    <link href="{{ URL::asset('css/css2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/tailwind.output.css') }}">
    <script src="{{ URL::asset('js/alpine.min.js') }}" defer=""></script>
    <script src="{{ URL::asset('js/init-alpine.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/Chart.min.css') }}">
    <script src="{{ URL::asset('js/Chart.min.js') }}" defer=""></script>
    <script src="{{ URL::asset('js/charts-lines.js') }}" defer=""></script>
    <script src="{{ URL::asset('js/charts-pie.js') }}" defer=""></script>
    <script src="{{ URL::asset('js/charts-bars.js') }}" defer=""></script>
    <style type="text/css">
        /* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }
    </style>
</head>

<body>
    @yield('body')

    @livewireScripts
</body>

</html>
