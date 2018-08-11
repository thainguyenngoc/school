<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class TeacherController extends Controller
{
    public function getHome() {
        return view('admin.teacher-home');
    }

    public function getLogin() {
        return view('admin.teacher-login');
    }

    public function getLogout() {
        try {
            Auth::guard('teacher')->logout();
            return redirect('/admin/login');
        }
        catch(\Exception $e) {
            return redirect('/admin/login');
        }
    }

    public function postLogin(Request $request) {
        try {
            $result = Auth::guard('teacher')->attempt(['email' => $request->username, 'password' => $request->password]);
            if ($result) {
                return redirect()->route('teacher_get_home');
            } else {
                return redirect('/admin/login');
            }
        }
        catch(\Exception $e) {
            return redirect('/admin/login');
        }

    }
}
