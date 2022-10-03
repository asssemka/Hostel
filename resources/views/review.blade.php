@extends('navbar')
@section('main_content')
    @section('title')Отзывы@endsection
    @if($errors -> any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <form method="post" action="/review/check">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label>Hotel Name</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <input type="text" class="form-control" name="hotel_name" placeholder="Hotel Name" required>
                        </div>
                    </div>
        <div class="row">
            <div class="col-12">
                <label>Email</label>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <input type="text" class="form-control" name="email" placeholder="email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label>Review</label>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <textarea class="form-control" name="review" placeholder="Review"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-dark mt-3">Отправить Отзыв</button>
    </form>
            </div>
        </div>
    </div>




@endsection
