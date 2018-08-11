<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class StaticController extends Controller
{
    public function getHome() {
        return view('front-end.home');
    }
    public function teacher() {
        dd(Auth::guard('teacher')->user());
        // $result = Auth::guard('teacher')->attempt(['email' => 'ntb@uit.vn', 'password' => '123']);
        // echo($result);
    }
    public function student() {
        dd(Auth::guard('student')->user());
        // $result = Auth::guard('student')->attempt(['email' => 'lb@uit.vn', 'password' => '123']);
        // echo($result);
    }
}
