@extends('navbar')
@section('title')Отели@endsection
@section('main_content')
    @if($errors -> any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-6 mx-auto">
                        <form action="{{route('posts.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <label>NAME:</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <input type="text" class="form-control" name="name" placeholder="name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label>CITY</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="form-control" name="city" placeholder="City"></input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label>STARS</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <input type="number" class="form-control" name="star" placeholder="Stars" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <label>IMAGE ADDRESS:</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <input type="text" name="image" class="form-control" placeholder="Insert image address" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark mt-3">ADD HOTEL</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
