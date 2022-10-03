@extends('navbar')
@section('title')Страница с отзывами@endsection
@section('main_content')
    <h5>ALL REVIEWS</h5>
    @foreach($reviews as $el)
        <div class="card" style="width: 800px;">
            <div class="card-header">
            <h6>{{$el->hotel_name}}</h6>
                <div class="card-body">
            <b>{{$el->email}}</b>
            <p>{{$el->review}}</p>
                </div>
            </div>
        </div>
    @endforeach

@endsection
