<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css') }} ">
    <style>
        table {
            counter-reset: tableCount;
        }

        .counterCell:before {
            content: counter(tableCount);
            counter-increment: tableCount;
        }
    </style>
</head>

<body>
    @include('layouts.navbar')
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-6">
                @include('projects')
            </div>
            <div class="col-md-6">
                @include('booksread')
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script> --}}
</body>

</html>
