<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? '' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    
    <h1>Kalkulator Sederhana dengan Laravel</h1>
    <a href="{{ route('tambah') }}">Tambah</a>
    <a href="{{ route('kurang') }}">Kurang</a>
    <a href="{{ route('kali') }}">Kali</a>
    <a href="{{ route('bagi') }}">Bagi</a>
    <a href="{{ route('user.index') }}">User</a>

    <div class="content">
        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>