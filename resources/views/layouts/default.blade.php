<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <div class="container">
        <header class="row">
            @include('includes.header')
        </header>
        <div id="main" class="row">
            @yield('content')
        </div>
        <header class="row">
            @include('includes.footer')
        </header>
    </div>
</body>
</html>
