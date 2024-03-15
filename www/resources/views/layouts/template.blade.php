<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <header>
        <!-- Header content -->
        
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content -->
    </footer>
</body>
</html>
