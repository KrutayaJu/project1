<?php
/**
 * Created by PhpStorm.
 * User: Юля
 * Date: 27.05.2019
 * Time: 21:10
 */

namespace App\Http\Controllers\Admin;


use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class ArticleController extends Controller
{
    public function index(Request $request)
    {

        session_start();
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user'] !== 'admin') {
                return redirect()->to('admin');
            }
        } else {
            return redirect()->to('admin');
        }
        $sort = trim($request->input('sort'));
        $sort = in_array($sort, ['created_at']) ? $sort : 'created_at';
        $order = Input::get('order') === 'asc' ? 'asc' : 'desc';
        $articles = Article::orderBy($sort,$order)->paginate(2);
        // load the view and pass the articles
        return View::make('admin.articles')->with(
            [
                'articles' => $articles,
                'request' => $request,
            ]);

    }

    public function create(Request $request)
    {
        session_start();
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user'] !== 'admin') {
                return redirect()->to('admin');
            }
        } else {
            return redirect()->to('admin');
        }
        return View::make('admin.create')
            ->with(compact('request'));

    }

    public function store()
    {
        // validate
        $rules = array(
            'author' => 'required',
            'description' => 'required',
            'name' => 'required',

        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            session_start();
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['author'] = $_POST['author'];
            $_SESSION['description'] = $_POST['description'];
            return Redirect::to('articles/create')
                ->withErrors($validator);
        } else {
            // store
            $article = new Article();
            $article->name = Input::get('name');
            $article->author = Input::get('author');
            $article->description = Input::get('description');
            $article->save();
            // redirect
            Session::flash('message', 'Successfully created Job!');
            return Redirect::to('articles');
        }
    }

    public function edit($id, Request $request)
    {
        session_start();
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user'] !== 'admin') {
                return redirect()->to('admin');
            }
        } else {
            return redirect()->to('admin');
        }
        $article=Article::find($id);
        return View::make('admin.edit')
            ->with('article', $article)
            ->with('request', $request);
    }
    public function update($id){
        $rules = array(
            'author' => 'required',
            'description' => 'required',
            'name' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('articles/edit/' . $id)
                ->withErrors($validator);
        } else {$article = Article::findOrFail($id);
            $article->name = Input::get('name');
            $article->author = Input::get('author');
            $article->description = Input::get('description');
            $article->save();
            // redirect
            Session::flash('message', 'Successfully updated Job!');
            return Redirect::to('articles');}



    }
    public function destroy($id){
        Article::destroy($id);
        return redirect('articles');}

        public function show($id){
            session_start();
            if (isset($_SESSION['user'])) {
                if ($_SESSION['user'] !== 'admin') {
                    return redirect()->to('admin');
                }
            } else {
                return redirect()->to('admin');
            }
           $article= Article::where('id', '=',  $id)->first();
            return view('admin.show')->with('article', $article);

        }

        public function showCreate(){
            session_start();
            if (isset($_SESSION['user'])) {
                if ($_SESSION['user'] !== 'admin') {
                    return redirect()->to('admin');
                }
            } else {
                return redirect()->to('admin');
            }
            $name = isset($_POST['name']) ? $_POST['name'] : null;
            $author = isset($_POST['author']) ? $_POST['author'] : null;
            $description = isset($_POST['description']) ? $_POST['description'] : null;

            return view('admin.showCreate')->with(
                (compact('name','author',
                    'description')));

        }
    public function editCreate(){
        session_start();
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user'] !== 'admin') {
                return redirect()->to('admin');
            }
        } else {
            return redirect()->to('admin');
        }
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $author = isset($_POST['author']) ? $_POST['author'] : null;
        $description = isset($_POST['description']) ? $_POST['description'] : null;

        return view('admin.editCreate')->with(
            (compact('name','author',
                'description')));
}}



