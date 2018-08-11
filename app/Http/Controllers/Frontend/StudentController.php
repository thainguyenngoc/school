<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class StudentController extends Controller
{
    public function getHome() {
        return view('front-end.student-home');
    }

    public function getLogin() {
        return view('front-end.student-login');
    }

    public function getLogout() {
        try {
            Auth::guard('student')->logout();
            return redirect('/login');
        }
        catch(\Exception $e) {
            return redirect('/login');
        }
    }

    public function postLogin(Request $request) {
        try {
            $result = Auth::guard('student')->attempt(['email' => $request->username, 'password' => $request->password]);
            if ($result) {
                return redirect()->route('student_get_home');
            } else {
                return redirect('/login');
            }
        }
        catch(\Exception $e) {
            return redirect('/login');
        }

    }
}
