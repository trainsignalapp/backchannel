<?php
    namespace App\Http\Controllers;


    use Illuminate\Support\Facades\Auth;

    class FrontPageController extends Controller
    {
        public function index()
        {
            if(Auth::check())
                return redirect()->route('home');

            return view('index');
        }
    }
