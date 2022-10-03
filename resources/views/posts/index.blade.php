@extends('navbar')
@section('title')Отели @endsection
@section('main_content')
</div>
@foreach( $posts  as $post)
<div class="row">
    <div class="col-md-4">
        <div class="card mt-2 mb-2">
            <div class="card-body">
                <h5 class="card-title">{{$post->name}}</h5>
                <h5 class="card-title">{{$post->city}}</h5>
                <p class="card-text">{{$post->star}}</strong></p>
                <img src="{{$post->image}}" style="width: 200px;">
                <a href="/posts/create" class="btn btn-warning btn-sm mt-4">ADD</a><br>
                <a href="#" class="btn btn-warning btn-sm mt-4">DETAILS</a><br>

            </div>
        </div>
    </div>
</div>
</body>
</html>
@endforeach
@endsection

