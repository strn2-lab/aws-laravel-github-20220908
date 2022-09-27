{"filter":false,"title":"app.blade.php","tooltip":"/cms/resources/views/layouts/app.blade.php","undoManager":{"mark":74,"position":74,"stack":[[{"start":{"row":0,"column":0},"end":{"row":80,"column":0},"action":"remove","lines":["<!doctype html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","<head>","    <meta charset=\"utf-8\">","    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","    <!-- CSRF Token -->","    <meta name=\"csrf-token\" content=\"{{ csrf_token() }}\">","","    <title>{{ config('app.name', 'Laravel') }}</title>","","    <!-- Scripts -->","    <script src=\"{{ asset('js/app.js') }}\" defer></script>","","    <!-- Fonts -->","    <link rel=\"dns-prefetch\" href=\"//fonts.gstatic.com\">","    <link href=\"https://fonts.googleapis.com/css?family=Nunito\" rel=\"stylesheet\">","","    <!-- Styles -->","    <link href=\"{{ asset('css/app.css') }}\" rel=\"stylesheet\">","</head>","<body>","    <div id=\"app\">","        <nav class=\"navbar navbar-expand-md navbar-light bg-white shadow-sm\">","            <div class=\"container\">","                <a class=\"navbar-brand\" href=\"{{ url('/') }}\">","                    {{ config('app.name', 'Laravel') }}","                </a>","                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"{{ __('Toggle navigation') }}\">","                    <span class=\"navbar-toggler-icon\"></span>","                </button>","","                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">","                    <!-- Left Side Of Navbar -->","                    <ul class=\"navbar-nav mr-auto\">","","                    </ul>","","                    <!-- Right Side Of Navbar -->","                    <ul class=\"navbar-nav ml-auto\">","                        <!-- Authentication Links -->","                        @guest","                            <li class=\"nav-item\">","                                <a class=\"nav-link\" href=\"{{ route('login') }}\">{{ __('Login') }}</a>","                            </li>","                            @if (Route::has('register'))","                                <li class=\"nav-item\">","                                    <a class=\"nav-link\" href=\"{{ route('register') }}\">{{ __('Register') }}</a>","                                </li>","                            @endif","                        @else","                            <li class=\"nav-item dropdown\">","                                <a id=\"navbarDropdown\" class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" v-pre>","                                    {{ Auth::user()->name }} <span class=\"caret\"></span>","                                </a>","","                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdown\">","                                    <a class=\"dropdown-item\" href=\"{{ route('logout') }}\"","                                       onclick=\"event.preventDefault();","                                                     document.getElementById('logout-form').submit();\">","                                        {{ __('Logout') }}","                                    </a>","","                                    <form id=\"logout-form\" action=\"{{ route('logout') }}\" method=\"POST\" style=\"display: none;\">","                                        @csrf","                                    </form>","                                </div>","                            </li>","                        @endguest","                    </ul>","                </div>","            </div>","        </nav>","","        <main class=\"py-4\">","            @yield('content')","        </main>","    </div>","</body>","</html>",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":80,"column":0},"action":"insert","lines":["<!doctype html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","<head>","    <meta charset=\"utf-8\">","    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","    <!-- CSRF Token -->","    <meta name=\"csrf-token\" content=\"{{ csrf_token() }}\">","","    <title>{{ config('app.name', 'Laravel') }}</title>","","    <!-- Scripts -->","    <script src=\"{{ asset('js/app.js') }}\" defer></script>","","    <!-- Fonts -->","    <link rel=\"dns-prefetch\" href=\"//fonts.gstatic.com\">","    <link href=\"https://fonts.googleapis.com/css?family=Nunito\" rel=\"stylesheet\">","","    <!-- Styles -->","    <link href=\"{{ asset('css/app.css') }}\" rel=\"stylesheet\">","</head>","<body>","    <div id=\"app\">","        <nav class=\"navbar navbar-expand-md navbar-light bg-white shadow-sm\">","            <div class=\"container\">","                <a class=\"navbar-brand\" href=\"{{ url('/') }}\">","                    {{ config('app.name', 'Laravel') }}","                </a>","                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"{{ __('Toggle navigation') }}\">","                    <span class=\"navbar-toggler-icon\"></span>","                </button>","","                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">","                    <!-- Left Side Of Navbar -->","                    <ul class=\"navbar-nav mr-auto\">","","                    </ul>","","                    <!-- Right Side Of Navbar -->","                    <ul class=\"navbar-nav ml-auto\">","                        <!-- Authentication Links -->","                        @guest","                            <li class=\"nav-item\">","                                <a class=\"nav-link\" href=\"{{ route('login') }}\">{{ __('Login') }}</a>","                            </li>","                            @if (Route::has('register'))","                                <li class=\"nav-item\">","                                    <a class=\"nav-link\" href=\"{{ route('register') }}\">{{ __('Register') }}</a>","                                </li>","                            @endif","                        @else","                            <li class=\"nav-item dropdown\">","                                <a id=\"navbarDropdown\" class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" v-pre>","                                    {{ Auth::user()->name }} <span class=\"caret\"></span>","                                </a>","","                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdown\">","                                    <a class=\"dropdown-item\" href=\"{{ route('logout') }}\"","                                       onclick=\"event.preventDefault();","                                                     document.getElementById('logout-form').submit();\">","                                        {{ __('Logout') }}","                                    </a>","","                                    <form id=\"logout-form\" action=\"{{ route('logout') }}\" method=\"POST\" style=\"display: none;\">","                                        @csrf","                                    </form>","                                </div>","                            </li>","                        @endguest","                    </ul>","                </div>","            </div>","        </nav>","","        <main class=\"py-4\">","            @yield('content')","        </main>","    </div>","</body>","</html>",""]}],[{"start":{"row":9,"column":34},"end":{"row":9,"column":41},"action":"remove","lines":["Laravel"],"id":8},{"start":{"row":9,"column":34},"end":{"row":9,"column":41},"action":"insert","lines":["Laravel"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":41},"action":"remove","lines":["Laravel"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":35},"action":"insert","lines":["k"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":35},"action":"remove","lines":["k"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":35},"action":"insert","lines":["き"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":35},"action":"remove","lines":["き"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":36},"action":"insert","lines":["きn"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":36},"action":"remove","lines":["きn"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":36},"action":"insert","lines":["きん"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":36},"action":"remove","lines":["きん"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":37},"action":"insert","lines":["きんt"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":37},"action":"remove","lines":["きんt"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":37},"action":"insert","lines":["きんた"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":37},"action":"remove","lines":["きんた"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":38},"action":"insert","lines":["きんたい"]}],[{"start":{"row":9,"column":34},"end":{"row":9,"column":38},"action":"remove","lines":["きんたい"],"id":9},{"start":{"row":9,"column":34},"end":{"row":9,"column":36},"action":"insert","lines":["勤怠"]}],[{"start":{"row":9,"column":34},"end":{"row":9,"column":36},"action":"remove","lines":["勤怠"],"id":10},{"start":{"row":9,"column":34},"end":{"row":9,"column":36},"action":"insert","lines":["勤怠"]}],[{"start":{"row":9,"column":34},"end":{"row":9,"column":36},"action":"remove","lines":["勤怠"],"id":11},{"start":{"row":9,"column":34},"end":{"row":9,"column":36},"action":"insert","lines":["勤怠"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":36},"action":"remove","lines":["勤怠"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":36},"action":"insert","lines":["勤怠"]}],[{"start":{"row":9,"column":36},"end":{"row":9,"column":38},"action":"insert","lines":["管理"],"id":12}],[{"start":{"row":26,"column":48},"end":{"row":26,"column":49},"action":"remove","lines":["e"],"id":13}],[{"start":{"row":26,"column":48},"end":{"row":26,"column":49},"action":"remove","lines":["l"],"id":14},{"start":{"row":26,"column":47},"end":{"row":26,"column":48},"action":"remove","lines":["v"]},{"start":{"row":26,"column":46},"end":{"row":26,"column":47},"action":"remove","lines":["a"]},{"start":{"row":26,"column":45},"end":{"row":26,"column":46},"action":"remove","lines":["r"]},{"start":{"row":26,"column":44},"end":{"row":26,"column":45},"action":"remove","lines":["a"]},{"start":{"row":26,"column":43},"end":{"row":26,"column":44},"action":"remove","lines":["L"]}],[{"start":{"row":26,"column":43},"end":{"row":26,"column":47},"action":"insert","lines":["勤怠管理"],"id":15}],[{"start":{"row":26,"column":43},"end":{"row":26,"column":47},"action":"remove","lines":["勤怠管理"],"id":16}],[{"start":{"row":26,"column":43},"end":{"row":26,"column":44},"action":"insert","lines":["L"],"id":17},{"start":{"row":26,"column":44},"end":{"row":26,"column":45},"action":"insert","lines":["A"]},{"start":{"row":26,"column":45},"end":{"row":26,"column":46},"action":"insert","lines":["r"]},{"start":{"row":26,"column":46},"end":{"row":26,"column":47},"action":"insert","lines":["a"]},{"start":{"row":26,"column":47},"end":{"row":26,"column":48},"action":"insert","lines":["v"]},{"start":{"row":26,"column":48},"end":{"row":26,"column":49},"action":"insert","lines":["e"]},{"start":{"row":26,"column":49},"end":{"row":26,"column":50},"action":"insert","lines":["l"]}],[{"start":{"row":26,"column":44},"end":{"row":26,"column":45},"action":"remove","lines":["A"],"id":18}],[{"start":{"row":26,"column":44},"end":{"row":26,"column":45},"action":"insert","lines":["a"],"id":19}],[{"start":{"row":9,"column":12},"end":{"row":9,"column":43},"action":"remove","lines":["{ config('app.name', '勤怠管理') }}"],"id":20},{"start":{"row":9,"column":11},"end":{"row":9,"column":12},"action":"remove","lines":["{"]}],[{"start":{"row":9,"column":11},"end":{"row":9,"column":15},"action":"insert","lines":["勤怠管理"],"id":21}],[{"start":{"row":9,"column":15},"end":{"row":9,"column":18},"action":"insert","lines":["アゥ利"],"id":22}],[{"start":{"row":9,"column":18},"end":{"row":9,"column":23},"action":"insert","lines":["ケーション"],"id":23}],[{"start":{"row":9,"column":17},"end":{"row":9,"column":18},"action":"remove","lines":["利"],"id":24},{"start":{"row":9,"column":16},"end":{"row":9,"column":17},"action":"remove","lines":["ゥ"]},{"start":{"row":9,"column":15},"end":{"row":9,"column":16},"action":"remove","lines":["ア"]}],[{"start":{"row":9,"column":15},"end":{"row":9,"column":18},"action":"insert","lines":["アプリ"],"id":25}],[{"start":{"row":26,"column":20},"end":{"row":26,"column":55},"action":"remove","lines":["{{ config('app.name', 'Laravel') }}"],"id":26},{"start":{"row":26,"column":20},"end":{"row":26,"column":55},"action":"insert","lines":["{{ config('app.name', 'Laravel') }}"]},{"start":{"row":26,"column":20},"end":{"row":26,"column":55},"action":"remove","lines":["{{ config('app.name', 'Laravel') }}"]},{"start":{"row":26,"column":20},"end":{"row":26,"column":21},"action":"insert","lines":["k"]},{"start":{"row":26,"column":20},"end":{"row":26,"column":21},"action":"remove","lines":["k"]},{"start":{"row":26,"column":20},"end":{"row":26,"column":21},"action":"insert","lines":["き"]},{"start":{"row":26,"column":20},"end":{"row":26,"column":21},"action":"remove","lines":["き"]},{"start":{"row":26,"column":20},"end":{"row":26,"column":22},"action":"insert","lines":["きn"]},{"start":{"row":26,"column":20},"end":{"row":26,"column":22},"action":"remove","lines":["きn"]},{"start":{"row":26,"column":20},"end":{"row":26,"column":22},"action":"insert","lines":["きん"]},{"start":{"row":26,"column":20},"end":{"row":26,"column":22},"action":"remove","lines":["きん"]},{"start":{"row":26,"column":20},"end":{"row":26,"column":23},"action":"insert","lines":["きんt"]},{"start":{"row":26,"column":20},"end":{"row":26,"column":23},"action":"remove","lines":["きんt"]},{"start":{"row":26,"column":20},"end":{"row":26,"column":23},"action":"insert","lines":["きんた"]},{"start":{"row":26,"column":20},"end":{"row":26,"column":23},"action":"remove","lines":["きんた"]},{"start":{"row":26,"column":20},"end":{"row":26,"column":24},"action":"insert","lines":["きんたい"]}],[{"start":{"row":26,"column":20},"end":{"row":26,"column":24},"action":"remove","lines":["きんたい"],"id":27},{"start":{"row":26,"column":20},"end":{"row":26,"column":22},"action":"insert","lines":["勤怠"]}],[{"start":{"row":26,"column":20},"end":{"row":26,"column":22},"action":"remove","lines":["勤怠"],"id":28},{"start":{"row":26,"column":20},"end":{"row":26,"column":22},"action":"insert","lines":["勤怠"]}],[{"start":{"row":26,"column":20},"end":{"row":26,"column":22},"action":"remove","lines":["勤怠"],"id":29},{"start":{"row":26,"column":20},"end":{"row":26,"column":22},"action":"insert","lines":["勤怠"]},{"start":{"row":26,"column":20},"end":{"row":26,"column":22},"action":"remove","lines":["勤怠"]},{"start":{"row":26,"column":20},"end":{"row":26,"column":22},"action":"insert","lines":["勤怠"]}],[{"start":{"row":26,"column":22},"end":{"row":26,"column":24},"action":"insert","lines":["管理"],"id":30}],[{"start":{"row":26,"column":24},"end":{"row":26,"column":32},"action":"insert","lines":["アプリケーション"],"id":31}],[{"start":{"row":26,"column":32},"end":{"row":26,"column":33},"action":"insert","lines":["("],"id":32},{"start":{"row":26,"column":33},"end":{"row":26,"column":34},"action":"insert","lines":[")"]}],[{"start":{"row":26,"column":33},"end":{"row":26,"column":34},"action":"remove","lines":[")"],"id":33}],[{"start":{"row":26,"column":33},"end":{"row":26,"column":34},"action":"insert","lines":[")"],"id":34}],[{"start":{"row":26,"column":33},"end":{"row":26,"column":35},"action":"insert","lines":["設楽"],"id":35}],[{"start":{"row":26,"column":35},"end":{"row":26,"column":37},"action":"insert","lines":["制作"],"id":36}],[{"start":{"row":9,"column":31},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":37},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"remove","lines":["    "],"id":38},{"start":{"row":9,"column":31},"end":{"row":10,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":9,"column":31},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":39},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":5},"action":"insert","lines":["d"],"id":40},{"start":{"row":10,"column":5},"end":{"row":10,"column":6},"action":"insert","lines":["i"]}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":6},"action":"remove","lines":["di"],"id":41},{"start":{"row":10,"column":4},"end":{"row":10,"column":7},"action":"insert","lines":["div"]}],[{"start":{"row":10,"column":7},"end":{"row":10,"column":8},"action":"insert","lines":[">"],"id":42}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":5},"action":"insert","lines":["<"],"id":43}],[{"start":{"row":10,"column":9},"end":{"row":10,"column":10},"action":"insert","lines":["{"],"id":44},{"start":{"row":10,"column":10},"end":{"row":10,"column":11},"action":"insert","lines":["{"]},{"start":{"row":10,"column":11},"end":{"row":10,"column":12},"action":"insert","lines":["}"]},{"start":{"row":10,"column":12},"end":{"row":10,"column":13},"action":"insert","lines":["}"]}],[{"start":{"row":10,"column":13},"end":{"row":10,"column":14},"action":"insert","lines":["<"],"id":45},{"start":{"row":10,"column":14},"end":{"row":10,"column":15},"action":"insert","lines":["/"]}],[{"start":{"row":10,"column":15},"end":{"row":10,"column":16},"action":"insert","lines":["d"],"id":46},{"start":{"row":10,"column":16},"end":{"row":10,"column":17},"action":"insert","lines":["i"]},{"start":{"row":10,"column":17},"end":{"row":10,"column":18},"action":"insert","lines":["v"]},{"start":{"row":10,"column":18},"end":{"row":10,"column":19},"action":"insert","lines":[">"]}],[{"start":{"row":10,"column":11},"end":{"row":10,"column":12},"action":"insert","lines":[" "],"id":47},{"start":{"row":10,"column":12},"end":{"row":10,"column":13},"action":"insert","lines":[" "]}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":21},"action":"remove","lines":["<div>{{  }}</div>"],"id":49}],[{"start":{"row":54,"column":60},"end":{"row":54,"column":61},"action":"insert","lines":["　"],"id":50}],[{"start":{"row":54,"column":60},"end":{"row":54,"column":61},"action":"remove","lines":["　"],"id":51}],[{"start":{"row":54,"column":60},"end":{"row":54,"column":61},"action":"insert","lines":[" "],"id":52}],[{"start":{"row":54,"column":61},"end":{"row":54,"column":62},"action":"remove","lines":[" "],"id":54},{"start":{"row":54,"column":60},"end":{"row":54,"column":61},"action":"remove","lines":[" "]}],[{"start":{"row":61,"column":58},"end":{"row":61,"column":61},"action":"insert","lines":["テスト"],"id":63}],[{"start":{"row":61,"column":60},"end":{"row":61,"column":61},"action":"remove","lines":["ト"],"id":64},{"start":{"row":61,"column":59},"end":{"row":61,"column":60},"action":"remove","lines":["ス"]},{"start":{"row":61,"column":58},"end":{"row":61,"column":59},"action":"remove","lines":["テ"]}],[{"start":{"row":66,"column":43},"end":{"row":67,"column":0},"action":"insert","lines":["",""],"id":65},{"start":{"row":67,"column":0},"end":{"row":67,"column":36},"action":"insert","lines":["                                    "]},{"start":{"row":67,"column":36},"end":{"row":67,"column":37},"action":"insert","lines":["t"]},{"start":{"row":67,"column":37},"end":{"row":67,"column":38},"action":"insert","lines":["a"]},{"start":{"row":67,"column":38},"end":{"row":67,"column":39},"action":"insert","lines":["s"]},{"start":{"row":67,"column":39},"end":{"row":67,"column":40},"action":"insert","lines":["u"]},{"start":{"row":67,"column":40},"end":{"row":67,"column":41},"action":"insert","lines":["t"]},{"start":{"row":67,"column":41},"end":{"row":67,"column":42},"action":"insert","lines":["o"]}],[{"start":{"row":67,"column":41},"end":{"row":67,"column":42},"action":"remove","lines":["o"],"id":68},{"start":{"row":67,"column":40},"end":{"row":67,"column":41},"action":"remove","lines":["t"]},{"start":{"row":67,"column":39},"end":{"row":67,"column":40},"action":"remove","lines":["u"]},{"start":{"row":67,"column":38},"end":{"row":67,"column":39},"action":"remove","lines":["s"]},{"start":{"row":67,"column":37},"end":{"row":67,"column":38},"action":"remove","lines":["a"]},{"start":{"row":67,"column":36},"end":{"row":67,"column":37},"action":"remove","lines":["t"]},{"start":{"row":67,"column":32},"end":{"row":67,"column":36},"action":"remove","lines":["    "]},{"start":{"row":67,"column":28},"end":{"row":67,"column":32},"action":"remove","lines":["    "]},{"start":{"row":67,"column":24},"end":{"row":67,"column":28},"action":"remove","lines":["    "]}],[{"start":{"row":67,"column":20},"end":{"row":67,"column":24},"action":"remove","lines":["    "],"id":69},{"start":{"row":67,"column":16},"end":{"row":67,"column":20},"action":"remove","lines":["    "]},{"start":{"row":67,"column":12},"end":{"row":67,"column":16},"action":"remove","lines":["    "]},{"start":{"row":67,"column":8},"end":{"row":67,"column":12},"action":"remove","lines":["    "]},{"start":{"row":67,"column":4},"end":{"row":67,"column":8},"action":"remove","lines":["    "]},{"start":{"row":67,"column":0},"end":{"row":67,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":66,"column":43},"end":{"row":67,"column":0},"action":"remove","lines":["",""],"id":70}],[{"start":{"row":54,"column":60},"end":{"row":54,"column":63},"action":"insert","lines":["テスt"],"id":71}],[{"start":{"row":54,"column":62},"end":{"row":54,"column":63},"action":"remove","lines":["t"],"id":72},{"start":{"row":54,"column":61},"end":{"row":54,"column":62},"action":"remove","lines":["ス"]},{"start":{"row":54,"column":60},"end":{"row":54,"column":61},"action":"remove","lines":["テ"]}],[{"start":{"row":66,"column":43},"end":{"row":67,"column":0},"action":"insert","lines":["",""],"id":73},{"start":{"row":67,"column":0},"end":{"row":67,"column":36},"action":"insert","lines":["                                    "]}],[{"start":{"row":67,"column":36},"end":{"row":67,"column":37},"action":"insert","lines":["<"],"id":74},{"start":{"row":67,"column":37},"end":{"row":67,"column":38},"action":"insert","lines":[">"]}],[{"start":{"row":67,"column":37},"end":{"row":67,"column":38},"action":"insert","lines":["a"],"id":75}],[{"start":{"row":67,"column":38},"end":{"row":67,"column":39},"action":"insert","lines":[" "],"id":76}],[{"start":{"row":67,"column":39},"end":{"row":67,"column":40},"action":"remove","lines":[">"],"id":77},{"start":{"row":67,"column":38},"end":{"row":67,"column":39},"action":"remove","lines":[" "]},{"start":{"row":67,"column":37},"end":{"row":67,"column":38},"action":"remove","lines":["a"]},{"start":{"row":67,"column":36},"end":{"row":67,"column":37},"action":"remove","lines":["<"]}],[{"start":{"row":67,"column":36},"end":{"row":67,"column":88},"action":"insert","lines":["<a class=\"dropdown-item\" href=\"#\">Another action</a>"],"id":78}],[{"start":{"row":67,"column":67},"end":{"row":67,"column":68},"action":"remove","lines":["#"],"id":79}],[{"start":{"row":67,"column":67},"end":{"row":67,"column":88},"action":"insert","lines":["{{ route('logout') }}"],"id":80}],[{"start":{"row":67,"column":82},"end":{"row":67,"column":83},"action":"remove","lines":["t"],"id":81},{"start":{"row":67,"column":81},"end":{"row":67,"column":82},"action":"remove","lines":["u"]},{"start":{"row":67,"column":80},"end":{"row":67,"column":81},"action":"remove","lines":["o"]},{"start":{"row":67,"column":79},"end":{"row":67,"column":80},"action":"remove","lines":["g"]},{"start":{"row":67,"column":78},"end":{"row":67,"column":79},"action":"remove","lines":["o"]},{"start":{"row":67,"column":77},"end":{"row":67,"column":78},"action":"remove","lines":["l"]}],[{"start":{"row":67,"column":77},"end":{"row":67,"column":78},"action":"insert","lines":["/"],"id":82},{"start":{"row":67,"column":78},"end":{"row":67,"column":79},"action":"insert","lines":["s"]},{"start":{"row":67,"column":79},"end":{"row":67,"column":80},"action":"insert","lines":["e"]},{"start":{"row":67,"column":80},"end":{"row":67,"column":81},"action":"insert","lines":["t"]},{"start":{"row":67,"column":81},"end":{"row":67,"column":82},"action":"insert","lines":["t"]}],[{"start":{"row":67,"column":82},"end":{"row":67,"column":83},"action":"insert","lines":["i"],"id":83},{"start":{"row":67,"column":83},"end":{"row":67,"column":84},"action":"insert","lines":["n"]},{"start":{"row":67,"column":84},"end":{"row":67,"column":85},"action":"insert","lines":["g"]}],[{"start":{"row":67,"column":77},"end":{"row":67,"column":78},"action":"remove","lines":["/"],"id":84}],[{"start":{"row":67,"column":84},"end":{"row":67,"column":85},"action":"insert","lines":["."],"id":85}],[{"start":{"row":67,"column":84},"end":{"row":67,"column":85},"action":"remove","lines":["."],"id":86}],[{"start":{"row":67,"column":84},"end":{"row":67,"column":85},"action":"insert","lines":["/"],"id":87}],[{"start":{"row":67,"column":74},"end":{"row":67,"column":75},"action":"remove","lines":["e"],"id":88},{"start":{"row":67,"column":73},"end":{"row":67,"column":74},"action":"remove","lines":["t"]},{"start":{"row":67,"column":72},"end":{"row":67,"column":73},"action":"remove","lines":["u"]},{"start":{"row":67,"column":71},"end":{"row":67,"column":72},"action":"remove","lines":["o"]},{"start":{"row":67,"column":70},"end":{"row":67,"column":71},"action":"remove","lines":["r"]}],[{"start":{"row":67,"column":70},"end":{"row":67,"column":71},"action":"insert","lines":["u"],"id":89},{"start":{"row":67,"column":71},"end":{"row":67,"column":72},"action":"insert","lines":["r"]},{"start":{"row":67,"column":72},"end":{"row":67,"column":73},"action":"insert","lines":["l"]}],[{"start":{"row":67,"column":90},"end":{"row":67,"column":104},"action":"remove","lines":["Another action"],"id":90}],[{"start":{"row":67,"column":90},"end":{"row":67,"column":91},"action":"insert","lines":["s"],"id":91},{"start":{"row":67,"column":91},"end":{"row":67,"column":92},"action":"insert","lines":["t"]}],[{"start":{"row":67,"column":91},"end":{"row":67,"column":92},"action":"remove","lines":["t"],"id":92}],[{"start":{"row":67,"column":91},"end":{"row":67,"column":92},"action":"insert","lines":["e"],"id":93},{"start":{"row":67,"column":92},"end":{"row":67,"column":93},"action":"insert","lines":["t"]},{"start":{"row":67,"column":93},"end":{"row":67,"column":94},"action":"insert","lines":["t"]},{"start":{"row":67,"column":94},"end":{"row":67,"column":95},"action":"insert","lines":["i"]},{"start":{"row":67,"column":95},"end":{"row":67,"column":96},"action":"insert","lines":["n"]},{"start":{"row":67,"column":96},"end":{"row":67,"column":97},"action":"insert","lines":["g"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":1.5,"selection":{"start":{"row":53,"column":59},"end":{"row":53,"column":59},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":0,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1663316785376,"hash":"d036545fa354fa367e34aec0b6d7a5f78bc86617"}