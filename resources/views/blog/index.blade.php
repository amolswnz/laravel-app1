@extends('layout.header')

@section('page-title')
    Welcome to My Blog
@endsection

@section('main-content')
    <?php $count=0; ?>
    @foreach($posts as $post)
        <div class="col-md-4">
            <?php $count++ ?>
            <h3>{{ $post['title'] }}</h3>
            <p>{!! substr($post['content'], 0, 161) !!}</p>
            <a class="btn btn-default" href="{{ route('blog.post', ['id' => array_search($post, $posts)]) }}" role="button">Read more</a>
        </div>
        @if($count % 3 == 0)
            <div class="clearfix"></div>
        @endif
    @endforeach
@endsection