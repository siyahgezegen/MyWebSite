<h3 class="h3 text-center">Okunan Kitaplar</h3>
<div class="container overflow-auto" style="height: 30rem">
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kitap Adı</th>
                <th scope="col">Yazar Adı</th>
            </tr>
        </thead>
        <tbody>
            {{-- gettings all books  in db  --}}
            @foreach ($booksread as $book)
                <tr>
                    <td scope="row" class="counterCell"></td>
                    <td style="color: black; font-weight:bold;" class="text-start">
                        {{ $book->BOOK_NAME }}</td>
                    <td style="color: black; font-weight:bold;" class="text-start">
                        {{ $book->AUTHOR_NAME }} </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
<script>
    
</script>
