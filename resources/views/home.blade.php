<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css'
        integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=='
        crossorigin='anonymous' />
    <title>Test</title>
</head>

<body>
    <div class="text-center h-25 bg-danger py-3">
        <h1>{{ $phrase }}</h1>
    </div>
    <header class="bg-warning d-flex justify-content-center align-items-center" style="height: 100px">
        @foreach ($pages as $page)
            <div class="px-5 fw-bold">{{ $page }}</div>
        @endforeach
    </header>
</body>

</html>
