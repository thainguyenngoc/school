<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$router->get('/', [
    'as' => 'root',
    'uses' => 'FrontEnd\StaticController@getHome',
    'middleware' => ['web']
]);
$router->get('/1', [
    'as' => 'root',
    'uses' => 'FrontEnd\StaticController@teacher',
    'middleware' => ['web']
]);
$router->get('/2', [
    'as' => 'root',
    'uses' => 'FrontEnd\StaticController@student',
    'middleware' => ['web']
]);

/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
///
///
///             STUDENT STUDENT STUDENT
///             STUDENT STUDENT STUDENT
///             STUDENT STUDENT STUDENT
///             STUDENT STUDENT STUDENT
///             STUDENT STUDENT STUDENT
///             STUDENT STUDENT STUDENT
///
///
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
$router->get('/home', [
    'as' => 'student_get_home',
    'uses' => 'FrontEnd\StudentController@getHome',
    'middleware' => ['auth.student']
]);
$router->get('/login', [
    'as' => 'student_get_login',
    'uses' => 'FrontEnd\StudentController@getLogin',
    'middleware' => ['guest:student']
]);
$router->post('/login', [
    'as' => 'student_post_login',
    'uses' => 'FrontEnd\StudentController@postLogin',
    'middleware' => ['web']
]);
$router->get('/logout', [
    'as' => 'student_get_logout',
    'uses' => 'FrontEnd\StudentController@getLogout',
    'middleware' => ['auth:student']
]);

/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
///
///
///             TEACHER TEACHER TEACHER
///             TEACHER TEACHER TEACHER
///             TEACHER TEACHER TEACHER
///             TEACHER TEACHER TEACHER
///             TEACHER TEACHER TEACHER
///
///
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////

$router->get('/admin/home', [
    'as' => 'teacher_get_home',
    'uses' => 'Admin\TeacherController@getHome',
    'middleware' => ['auth.teacher']
]);
$router->get('/admin/login', [
    'as' => 'teacher_get_login',
    'uses' => 'Admin\TeacherController@getLogin',
    'middleware' => ['guest:teacher']
]);
$router->post('/admin/login', [
    'as' => 'teacher_post_login',
    'uses' => 'Admin\TeacherController@postLogin',
    'middleware' => ['web']
]);
$router->get('/admin/logout', [
    'as' => 'teacher_get_logout',
    'uses' => 'Admin\TeacherController@getLogout',
    'middleware' => ['auth:teacher']
]);