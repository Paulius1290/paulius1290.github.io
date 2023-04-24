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
      <nav class="bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% overflow-auto">
        <div class="max-w-6xl mx-auto">
          <div class="flex justify-between">
        <div class="flex space-x-4">
          {{-- logo --}}
          <div>
            <a href="{{route('home')}}" class="flex items-center py-5 px-2 text-black hover:text-gray-800">
              <svg class="h-6 w-6 mr-1 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
              </svg>
              <span class="font-bold">Mokslo Akademija</span>
            </a>
          </div>

          {{-- primary nav --}}
          <div class="flex items-center space-x-1">
            <a href="{{ route('lt.apiemus') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Apie mus</a>
            <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Moduliai</a>
          </div>
        </div>

          {{-- secondary nav --}}
          @guest
          <div class="flex items-center space-x-1">
            <a href="{{ route('lt.kontaktai') }}">Kontaktai</a>
            @if (Route::has('login'))
            <a href="{{ route('login') }}" class="py-5 px-3">{{ __('Login') }}</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="py-2 px-3 bg-gradient-to-r from-pink-500 to-yellow-500  hover:from-green-400 hover:to-blue-500 rounded shadow">{{ __('Register') }}</a>
          
          <div class="flex items-center space-x-3">
            <a href="{{ route('lt.apiemus') }}"><img src="/image/lithuania.png" class="w-8"></a>
            <a href="{{ route('en.apiemus') }}"><img src="/image/united-kingdom.png" class="w-8"></a>
          </div>
          </div>
        </div>
      </div>
      </nav>
      @endif
      @endif                  
                        @else
                                <div class="flex items-center space-x-1">
                                  <a href="{{ route('lt.kontaktai') }}">Kontaktai</a>
                                  <h1 class="py-2 px-3">
                                    {{ Auth::user()->name }}
                                  </h1>
                                <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="py-2 px-3  bg-red-400 hover:bg-red-300 text-yellow-900 rounded shadow hover:text-red-800 transition duration-300">{{ __('Atsijungti') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      <div class="flex items-center space-x-3">
                                        <a href="{{ route('lt.apiemus') }}"><img src="/image/lithuania.png" class="w-8"></a>
                                        <a href="{{ route('en.apiemus') }}"><img src="/image/united-kingdom.png" class="w-8"></a>
                                      </div>
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
