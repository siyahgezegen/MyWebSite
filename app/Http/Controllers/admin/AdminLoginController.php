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
        if ($this->sessionControl())
            return view('admin.adminpages.board');
        return view('admin.index');
    }
    function addContent()
    {
        if (!$this->sessionControl())
            return view('admin.index');
        return view('admin.adminpages.addcontent');
    }

    //ADMİN LOGİN
    function adminLogin(Request $request)
    {
        $data = $request->input();
        $table = DB::table('admins')->first();
        $name = $table->admin_name;
        $pass = $table->admin_pass;

        if ($name === $data['auser'] && $pass === $data['apass']) {
            //session işlemlerinin gerçekleşmesi
            $request->session()->put('auser', $data['auser']);
            $request->session()->put('apass', $data['apass']);
            return view('admin.adminpages.addcontent');
        } else {
            return view('admin.index', ['value' => 'Kullanıcı adı veya şifre yanlış lütfen tekrar deneyiniz..']);
        }
        // return $data;

    }

    /* 
    ?Kitap ekleme işkemlerinin gerçekleştiği yer 
    */
    function addBookPost(Request $request)
    {
        if (!$this->sessionControl())
            return view('admin.index');

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
        if (!$this->sessionControl())
            return view('admin.index');
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
        if (!$this->sessionControl())
            return view('admin.index');
        return view('admin.adminpages.board');
    }
    function sessionControl(): bool
    {
        if (session()->has('auser') && session()->has('apass'))
            return true;
        else
            return false;
    }

}