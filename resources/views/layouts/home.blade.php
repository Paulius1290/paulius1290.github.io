<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @vite('resources/css/app.css')
    <header>

       
      </header>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
      
      <div class="flex justify-center space-x-3 pt-4 ">
        
        <a href="{{ route('lt.apiemus') }}"><img src="/image/lithuania.png" class="w-8"></a>
        <a href="{{ route('en.apiemus') }}"><img src="/image/united-kingdom.png" class="w-8"></a>
        <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="py-2 px-3 bg-red-400 hover:bg-red-300 text-yellow-900 rounded shadow hover:text-red-800 transition duration-300">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      </div>
        <main>
            @yield('content')
            
        </main>
    </div>
</body>
</html>
