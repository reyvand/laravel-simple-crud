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
          <h1 class="title">Edit Author</h1>
          <form action="{{ URL::to('/author/update/') }}/{{ $author->id }}" method="post">
            {{ csrf_field() }}
            <div class="column is-5">
              <div class="field">
                  <label class="label">Name</label>
                  <input class="input" type="text" name="authorname" value="{{ $author->author_name }}">
              </div>
              <div class="field">
                <button class="button is-success">
                  <span>Save</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>  
  </section>
@endsection