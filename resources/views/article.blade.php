@extends('master')
@section('title','CRUD')

@section('content')
  <section class="section">
    <div class="container">
      <!-- Main container -->
      <nav class="level">
        <!-- Left side -->
        <div class="level-left">
          <div class="level-item">
            <p class="subtitle is-5">
              <h1 class="title">Simple CRUD</h1>
            </p>
          </div>
        </div>
      </nav>
      <div class="columns">
        <div class="column is-2">
          <aside class="menu">
            <p class="menu-label">
              MENU
            </p>
            <ul class="menu-list">
              <li><a href="/author">Author</a></li>
              <li><a href="/article" class="is-active">Article</a></li>
            </ul>
          </aside>
        </div>
        <div class="column">
          <h1 class="title">Article</h1>
          <a class="button is-primary is-rounded" href="{{ URL::to('/article/add') }}">Add</a>
          <table class="table is-hoverable">
            <thead>
              <tr>
                <th width="90">ID</th>
                <th width="300">Title</th>
                <th width="200">Author</th>
                <th colspan="2"><center>action</center></th>
              </tr>
            </thead>
            <tbody>
              @foreach( $articles as $article )
                <tr>
                  <td>{{ $article->id }}</td>
                  <td>{{ $article->article_title }}</td>
                  <td>{{ $article->author->author_name }}</td>
                  <td><a href="/article/edit/{{ $article->id }}">update</a></td>
                  <td><a href="/article/delete/{{ $article->id }}">delete</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>  
  </section>
@endsection