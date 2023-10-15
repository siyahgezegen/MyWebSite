<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hakkımda Sayfası</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css') }} ">
    <style>
        body {
            background-color: #ffff;
        }
    </style>
</head>

<body>
    @include('layouts.navbar')

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-5">
                <img class="rounded mx-auto d-block" width="300px" height="300px"
                    src="{{ asset('images/image-me.jpg') }}" alt="">
            </div>
            <div class="col-md-7">
                <div class="container mb-3">
                    <header class="h3">Hakkımda</header>
                    <p>06.01.1999 erzurum doğumluyu</p>
                </div>
                <div class="container mb-3">
                    <ul class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            Eğitim Bilgileri
                        </a>
                        <li class="list-group-item list-group-item-dark">Bilgisayar Mühendisliği : Fırat Üniversitesi,
                            Başlangıç : 2023</li>
                        <li class="list-group-item list-group-item-dark">Bilgisayar Programcılığı : Adnan Menderes
                            Üniversitesi, Başlangıç :
                            2021, Mezuniyet : 2023 ,Gano : 3,74</li>
                    </ul>
                </div>
                <div class="container">
                    <ul class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            İlgi Alanları
                        </a>
                        <li class="list-group-item list-group-item-dark">PHP</li>
                        <li class="list-group-item list-group-item-dark">Laravel</li>
                        <li class="list-group-item list-group-item-dark">Unity(Game Engine)</li>
                        <li class="list-group-item list-group-item-dark">Flutter</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
