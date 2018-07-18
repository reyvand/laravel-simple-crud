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
              <li><a href="/article">Article</a></li>
            </ul>
          </aside>
        </div>
        <div class="column">
          <h1 class="title">Hi:)</h1>
        </div>
      </div>
    </div>  
  </section>
@endsection