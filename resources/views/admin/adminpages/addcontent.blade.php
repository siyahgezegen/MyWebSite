<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Books</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css') }} ">
</head>

<body>
    @include('admin.adminpages.components.menus')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="h3">Proje ekle</h3>
                <form class="p-3" action="{{ route('addprojectpost') }}" method="post">
                    @csrf
                    <input class="form-control m-2" type="text" placeholder="Proje Adını Giriniz" name="projectname"
                        aria-label="default input example">

                    <input class="form-control m-2" type="text" placeholder="Proje Açıklamasını Giriniz"
                        name="projectexplanation" aria-label="default input example">

                    <input class="form-control m-2" type="text" placeholder="Projenin Github Linkini Giriniz"
                        name="projectgithublink" aria-label="default input example">

                    <input type="submit" class="btn btn-primary m-2" name="projectsave" value="Projeyi kaydet">
                    {{ $messageprojects ?? '' }}
                </form>
            </div>
            {{-- @ kitapekleme --}}
            <div class="col-md-6">
                <h3 class="h3">Kitap Ekle</h3>
                <form class="p-3" action="{{ route('addbookpost') }}" method="post">
                    @csrf
                    <input class="form-control m-2" type="text" placeholder="Kitap Adını Giriniz" name="bookname"
                        aria-label="default input example">

                    <input class="form-control m-2" type="text" placeholder="Yazar Adını Giriniz" name="authorname"
                        aria-label="default input example">
                    {{ $message ?? '' }}
                    <input type="submit" name="booksave" class="btn btn-primary m-2" value="Kitabı Ekle">

                </form>
            </div>

        </div>
    </div>
    <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
