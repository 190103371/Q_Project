@extends('menu')

@section('head')
    <style>
        body{
            opacity: 1;

        }
        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex: 1 0 100%;
            flex-wrap: wrap;
            margin-top: calc(var(--bs-gutter-y)*-1);
            margin-right: calc(var(--bs-gutter-x)/-2);
            margin-left: calc(var(--bs-gutter-x)/-2);
        }
    </style>
@endsection

@section('title')
    {{ __('lang.home')}}
@endsection

@section('main_content')

<div class="row justify-content-center">
    <div class="col-md-3 col-9 mt-3">
      <img class="img-fluid ls-is-cached lazyloaded" alt="Quran.com logo" data-src="https://cdn.qurancdn.com/assets/logo-lg-w-10a76950b6fdf68f9bf6abdde65eec2553f6f6d97837b65d8836d1a0c39a01c9.png"
      src="https://cdn.qurancdn.com/assets/logo-lg-w-10a76950b6fdf68f9bf6abdde65eec2553f6f6d97837b65d8836d1a0c39a01c9.png">
    </div>
</div>
<div class="row my-md-5 my-3">
    <div class="col text-center">
      <h1 class="ff-b text-info"><span class="ru">{{ __('lang.noble_Quran')}}</span></h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="search-form flex-fill">
            <form class="search-form" action="{{route('search')}}" data-controller="search-form" data-expand="" method="GET">
            <input class="form-control bg-light ru" placeholder="{{ __('lang.search')}}" type="search" name="query" value="">
            <button type="submit" class="form-control form-control-submit search-btn"></button>
            <span class="search-label rounded-right" id="search-trigger">
            <i class="fa fa-search"></i>
            </span>
            <div class="suggestions" style="display: none;"></div>
            </form>
        </div>
    </div>
</div>
@endsection
