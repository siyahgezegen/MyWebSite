<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminLoginController extends Controller
{
    //admin login controller
    function index()
    {
        return view('admin.index');
    }
    function addBook()
    {
        return view('admin.adminpages.addcontent', );
    }

    /* 
    ?Kitap ekleme işkemlerinin gerçekleştiği yer 
    */
    function addBookPost(Request $request)
    {
        if ($request->bookname == null || $request->authorname == null) {
            return view('admin.adminpages.addcontent', ['message' => 'Kitap adı ya da Yazar adı boş geçilemez']);
        }

        //?formdan kitap adı ve yazar adı verisinin alınması
        $bookname = $request->bookname;
        $authorname = $request->authorname;
        //?boşlukların kaldırılması

        $bookname = trim($bookname);
        $authorname = trim($authorname);

        //? kitap isimleri büyük harfle yazıldığı için veritabanına kayıdının da öyle olması gerek
        $bookname = ucwords($bookname);
        $authorname = ucwords($authorname);

        //! Burayı belki sql tarafında stored procedure'e bağlamak mantıklı olabilir.
        DB::insert('insert into booksread (BOOK_NAME, AUTHOR_NAME) values (?, ?)', [$bookname, $authorname]);
        return view('admin.adminpages.addcontent');

    }
    function addProject(Request $request)
    {
        if ($request->projectsave == null)
            return view('admin.adminpages.addcontent');


        if ($request->projectname == null || $request->projectexplanation == null) {
            return view('admin.adminpages.addcontent', ['messageprojects' => 'Kitap adı ya da Yazar adı boş geçilemez']);
        }

        $projectname = $request->projectname;
        $projectexplanation = $request->projectexplanation;
        $projectgithublink = $request->projectgithublink;

        //? gelen verinin trim edilmesi
        $projectname = trim($projectname);
        $projectexplanation = trim($projectexplanation);
        $projectgithublink = trim($projectgithublink);

        //! gelen github linkinin doğru link olup olmadığının kontrolü
        $githubhttps = "https://github.com/";
        if (str_contains($projectgithublink, $githubhttps) == false)
            $projectgithublink = 'null';


        //? gelen verinin duzenlenmesi
        $projectname = ucwords($projectname);
        $projectexplanation = ucwords($projectexplanation);
        DB::insert('insert into projects(PROJECT_NAME,PROJECT_EXPLANATION,PROJECT_GITHUB_LINK) VALUES (?,?,?)', [
            $projectname,
            $projectexplanation,
            $projectgithublink,
        ]);
        //veri alınacak
        return view('admin.adminpages.addcontent');
    }
    function board()
    {
        return view('admin.adminpages.board');
    }
}