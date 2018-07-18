<?php

namespace App\Http\Controllers;

use App\Article;
use App\Author;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function __construct() {
      $this->article = new Article;
    }

    public function index() {
      $data = $this->article::all();
      return view('article', array('articles' => $data));
    }

    public function add() {
      $author = new Author;
      return view('article_form', array('authors' => $author::all()));
    }

    public function insert(Request $request) {
      $this->article->article_title = $request->title;
      $this->article->article_detail = $request->detail;
      $this->article->author_id = $request->author;
      $this->article->save();
      return redirect('/article');
    }

    public function edit($id) {
      $find = $this->article::find($id);
      return view('article_edit', array('data' => $find));
    }

    public function update($id, Request $request) {
      $update = $this->article::find($id);
      $update->article_title = $request->title;
      $update->article_detail = $request->detail;
      $update->save();
      return redirect('/article');
    }

    public function delete($id) {
      $del = $this->article::find($id);
      $del->delete();
      return redirect('/article');
    }
}
