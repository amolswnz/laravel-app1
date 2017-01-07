@extends('layout.header')

@section('page-title')
    {{ $post['title'] }}
@endsection

@section('main-content')
    {{ $post['content'] }}
@endsection