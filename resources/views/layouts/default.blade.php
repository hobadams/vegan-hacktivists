
<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    @include('includes.header')

    <div class="row main-content">
        @yield('content')
    </div>

    @include('includes.footer')
    
</div>
</body>
</html>

