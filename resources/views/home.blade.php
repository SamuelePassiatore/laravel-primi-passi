<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="laravel-logo.png" type="image/x-icon">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css'
        integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=='
        crossorigin='anonymous' />
    <title>Test</title>
</head>

<body class="bg-success">
    <div class="vh-100">
        <div class="d-flex align-items-center justify-content-center bg-danger" style="height: 100px">
            <h1 class="m-0">{{ $phrase }}</h1>
        </div>
        <header class="bg-warning d-flex justify-content-center align-items-center" style="height: 100px">
            @foreach ($pages as $page)
                <div class="px-5 fw-bold">
                    <a href="{{ route('page', ['index' => $loop->index]) }}">{{ $page }} </a>
                </div>
            @endforeach
        </header>
        <main class="h-100 d-flex align-items-center justify-content-center">
            <img src="laravel-logo.png" alt="logo laravel" style="height: 300px; width=300px;">
        </main>
    </div>
</body>

</html>
