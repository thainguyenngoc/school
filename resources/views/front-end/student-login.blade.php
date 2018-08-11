@extends("layouts.app")

@section("content")
<div class="login">
        <h1>Student Login</h1>
        <form method="post" action="{{ route('student_post_login') }}">
            {{ csrf_field() }}
          <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
          <p><input type="password" name="password" value="" placeholder="Password"></p>
          <p class="remember_me">
            <label>
              <input type="checkbox" name="remember_me" id="remember_me">
              Remember me on this computer
            </label>
          </p>
          <p class="submit"><input type="submit" name="commit"></p>
        </form>
      </div>
    
      <div class="login-help">
        <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
      </div>
@endsection