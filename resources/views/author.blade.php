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
              <li><a href="/author" class="is-active">Author</a></li>
              <li><a href="/article">Article</a></li>
            </ul>
          </aside>
        </div>
        <div class="column">
          <h1 class="title">Author</h1>
          <a class="button is-primary is-rounded" href="{{ URL::to('/author/add') }}">Add</a>
          <table class="table is-hoverable">
            <thead>
              <tr>
                <th width="90">ID</th>
                <th width="500">Author</th>
                <th colspan="2"><center>action</center></th>
              </tr>
            </thead>
            <tbody>
              @foreach( $authors as $author )
                <tr>
                  <td>{{ $author->id }}</td>
                  <td>{{ $author->author_name }}</td>
                  <td><a href="/author/edit/{{$author->id}}">update</a></td>
                  <td><a href="/author/delete/{{$author->id}}">delete</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>  
  </section>
@endsection