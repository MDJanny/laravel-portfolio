<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Md. Mehedi Hasan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-body-tertiary">
    <nav class="navbar navbar-expand-lg border-bottom bg-body">
        <div class="container">
            <a class="navbar-brand fs-2 fw-semibold" href="/">MEHEDI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link{{ Request::path() == '/' ? ' active':'' }}" aria-current="page"
                            href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ Request::path() == 'projects' ? ' active':'' }}"
                            href="/projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ Request::path() == 'work-experiences' ? ' active':'' }}"
                            href="/work-experiences">Work Experiences</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container my-5">
        @if (Request::path() != '/')
        <h1 class="my-3">@yield('title')</h1>
        @endif
        <div class="card shadow-sm border-0">
            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>