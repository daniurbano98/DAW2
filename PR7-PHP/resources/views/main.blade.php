<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="/books">All</a></li>
                    <li><a href="/books/create">Register Book</a></li>
                </ul>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <p>Copyright &copy; {{ date('Y') }} My Website</p>
        </footer>
    </body>
</html>
