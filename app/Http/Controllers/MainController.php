<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MainController extends Controller {

    public function home() {
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function hotel(){
        return view('hotel');
    }

    public function review(){
        return view('review');
    }

    public function review_check(Request $request): RedirectResponse
    {
        $valid = $request->validate([
            'hotel_name' => 'required',
            'email' => 'required| min:4| max:100',
            'review' => 'required'
        ]);

        $review = new Contact();
        $review->hotel_name = $request->input('hotel_name');
        $review->email = $request->input('email');
        $review->review = $request->input('review');

        $review->save();

        return redirect('/reviews');

    }

    public function reviews(){
        $reviews = new Contact();
        return view('reviews', ['reviews' => $reviews->all()]);
    }











}
