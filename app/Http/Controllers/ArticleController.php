<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;

class ArticleController extends Controller
{
    public function index() {
        $articles = ArticleModel::getAll();
        // dd($articles);
        return view('layouts.index', compact('articles'));
    }

    public function form() {
        return view('layouts.form');
    }

    public function store(Request $request) {
        // dd($request['tag']);
        $data = $request->all();
        // dd($data['isi']);
        unset($data["_token"]);
        $slugAwal = strtolower($data['judul']);
        $slugArray = explode(" ",$slugAwal);
        $slug = join("-",$slugArray);
        $data['slug'] = $slug;
        ArticleModel::save($data);
        return redirect('/article');
    }

    public function show($Id) {
        $article = ArticleModel::findArticleById($Id);
        $tag = explode(" ",$article[0]->tag);
        // dd($tag);
        return view('layouts.show',compact('article','tag'));
    }

    public function edit($id) {
        $article = ArticleModel::findArticleById($id);

        // dd($article);
        return view('layouts.edit',compact('article'));
    }

    public function update($id, Request $request) {
        // dd($request['tag']);
        $data = $request->all();
        $slugAwal = strtolower($data['judul']);
        $slugArray = explode(" ",$slugAwal);
        $slug = join("-",$slugArray);
        $data['slug'] = $slug;
        ArticleModel::update($id,$data);
        // dd($id);
        return redirect("/article");
    }

    public function drop($id) {
        ArticleModel::delete($id);
        return redirect('/article');
    }
}
