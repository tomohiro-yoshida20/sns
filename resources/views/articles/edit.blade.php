@extends('app')

@section('title', '記事更新')

@include('nav')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            @include('error_card_list')
            <div class="card-text">
              <form action="{{ route('articles.update', ['article' => $article]) }}" method="post">
                @method('patch')
                @include('articles.form')
                <button type="submit" class="btn btn-block blue-gradient">更新する
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection