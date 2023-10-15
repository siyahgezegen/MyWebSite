<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>


    {{-- md bootstrap --}}
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />

</head>

<body>
    <div class="container p-5">
        {{ $value ?? '' }}
        <form method="POST" action="{{ route('admin-login-control') }}">
            @csrf
            <div class="form-outline mb-4">
                <input type="text" name="auser" id="form2Example1" class="form-control" />
                <label class="form-label" for="form2Example1">Kullanıcı Adı</label>
            </div>

            <div class="form-outline mb-4">
                <input type="password" name="apass" id="form2Example2" class="form-control" />
                <label class="form-label" for="form2Example2">Şifre</label>
            </div>

            <div class="row mb-4">
                <div class="col d-flex justify-content-start">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Beni Hatırla </label>
                    </div>
                </div>

            </div>
            <input type="submit" name="admin-login-btn" value="Giriş Yap" class="btn btn-primary btn-block mb-4" />

        </form>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>

</html>
