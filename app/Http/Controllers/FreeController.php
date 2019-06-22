<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class FreeController extends Controller

{
    public function index(Request $request)
    {


        $sort = trim($request->input('sort'));
        $sort = in_array($sort, ['created_at']) ? $sort : 'created_at';
        $order = Input::get('order') === 'asc' ? 'asc' : 'desc';
        $articles = Article::orderBy($sort,$order)->paginate(3);
        // load the view and pass the articles
        return View::make('freeart')->with(
            [
                'articles' => $articles,
                'request' => $request
            ]);

    }



    public function show($id){

        $article= Article::where('id', '=',  $id)->first();

        return view('shows')->with('article', $article);

    }
    public function search(Request $request){
        $search = $request->get('search');
//        $article =DB::table('article')->where('author', 'like', '%' .$search. '%')->paginate(3);
        $article = Article::where('author', 'like', '%' .$search. '%')->paginate(3);
        return view('search', ['article' => $article]);
    }


}




