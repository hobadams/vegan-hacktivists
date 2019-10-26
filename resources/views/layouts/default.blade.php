
<!doctype html>
<html lang="en" itemscope itemtype=”http://schema.org/QAPage”>
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    <div class="page-main">
        <div class="container">
            <div class="row main-content">
                @yield('content')
            </div>
        </div>
    </div>

    @include('includes.footer')
</body>
</html>

