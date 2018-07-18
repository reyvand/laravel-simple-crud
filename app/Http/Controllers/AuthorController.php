<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function __construct() {
      $this->author = new Author;
    }

    public function index() {
      $data = $this->author::all();
      return view('author', array('authors' => $data));
    }

    public function add() {
      return view('author_form');
    }

    public function insert(Request $request) {
      $this->author->author_name = $request->authorname;
      $this->author->save();
      return redirect('/author');
    }

    public function edit($id) {
      $find = $this->author::find($id);
      return view('author_edit', array('author' => $find));
    }

    public function update($id, Request $request) {
      $update = $this->author::find($id);
      $update->author_name = $request->authorname;
      $update->save();

      return redirect('/author');
    }

    public function delete($id) {
      $del = $this->author::find($id);
      $del->delete();

      return redirect('/author');
    }
}
