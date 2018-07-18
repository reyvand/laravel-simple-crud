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
          <h1 class="title">Edit Article</h1>
          <form action="{{ URL::to('/article/update') }}/{{ $data->id }}" method="post">
            {{ csrf_field() }}
            <div class="column is-5">
              <div class="field">
                  <label class="label">Title</label>
                  <input class="input" type="text" name="title" value="{{ $data->article_title }}">
              </div>
              <div class="field">
                  <label class="label">Detail</label>
                  <textarea class="textarea" placeholder="Article's Detail" rows="10" name="detail">{{ $data->article_detail }}</textarea>
              </div>
              <div class="field">
                <label class="label">Author</label>
                <div class="control">
                  <div class="select">
                    <select name="author">
                      <option value="{{ $data->author_id }}">{{ $data->author->author_name }}</option>
                    </select>
                  </div>
                </div>
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