<html :class="{ &#39;theme-dark&#39;: dark }" x-data="data()" lang="en" class="theme-dark">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
    {{-- <script src="{{ URL::asset('js/quiz.js') }}" defer=""></script> --}}

    @livewireStyles

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>


</head>

<body>
    @yield('body')

    @livewireScripts
</body>

</html>
