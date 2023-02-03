<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\IndustryEvaluationController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', function () {
    return view('user');
});

Route::resource('user', App\Http\Controllers\UserController::class);

Route::get('eva', function () {
    return view('evaluation');
});

Route::get('ind', function () {
    return view('industry');
});

Route::get('rep', function () {
    return view('report');
});

Route::get('top', function () {
    return view('top20');
});

Route::get('rub', function () {
    return view('rubric');
});

Route::get('viewRub', function () {
    return view('viewRubrics');
});


/*Manage Rubric Module Routes*/
Route::view('/addRub','addRubrics');

Route::post('/data/create','App\Http\Controllers\RubricsController@create');

Route::get('/rubric','App\Http\Controllers\RubricsController@rubric');

Route::get('/data/{id}/delete','App\Http\Controllers\RubricsController@delete');

Route::get('/data/{id}/edit','App\Http\Controllers\RubricsController@edit');

Route::post('/data/{id}/update','App\Http\Controllers\RubricsController@update');

Route::get('rub', function () {
    return view('rubric');
});
/*End of Manage Rubric Routes*/


/*Manage Student Evaluation Module Routes*/
Route::get('/InsertMark', function () {
    return view('InsertMark');
});

Route::get('editMark', function () {
    return view('EditMark');
});
Route::get('eva', 'App\Http\Controllers\StudentEvaluationController@StudentList');

Route::get('insertMark/{student_id}/iMark', 'App\Http\Controllers\StudentEvaluationController@viewaddMark');

Route::get('insertMark/{id}/eMark', 'App\Http\Controllers\StudentEvaluationController@editMark');

Route::post('/insertMark/{id}/iMark', 'App\Http\Controllers\StudentEvaluationController@addMark');

Route::post('/insertMark/{id}/eMark', 'App\Http\Controllers\StudentEvaluationController@editMark');

Route::get('insertMark/{student_id}/insertMark', 'App\Http\Controllers\StudentEvaluationController@addMark');
/*End of Manage Student Evaluation Routes*/


/*Manage Top Student Module Routes*/
Route::get('top','App\Http\Controllers\TopStudentsController@abc');

Route::get('/top20data/{id}/view','App\Http\Controllers\TopStudentsController@view');

Route::get('manual','App\Http\Controllers\TopStudentsController@manual');

Route::get('PSM1','App\Http\Controllers\TopStudentsController@FilterPSM1');

Route::get('PSM2','App\Http\Controllers\TopStudentsController@FilterPSM2');

Route::get('asc','App\Http\Controllers\TopStudentsController@sortAsc');

Route::get('desc','App\Http\Controllers\TopStudentsController@sortDesc');

Route::get('top20','App\Http\Controllers\TopStudentsController@top20');

Route::get('/top20data/{id}/edit','App\Http\Controllers\TopStudentsController@edit');

Route::post('/top20data/{id}/update','App\Http\Controllers\TopStudentsController@update');
/*End of Manage Top Student Routes*/


/*Industry Evaluation Module Routes*/
Route::get('indAddMark', function () {
    return view('addStudentIndustryMark');
});

Route::get('indEditMark', function () {
    return view('editStudentIndustryMark');
});

Route::get('ind', 'App\Http\Controllers\IndustryEvaluationController@index');

Route::get('indAddMark/{id}/add', 'App\Http\Controllers\IndustryEvaluationController@addShowProfile');

Route::get('indAddMark/{id}/edit', 'App\Http\Controllers\IndustryEvaluationController@editShowProfile');

Route::post('/indAddMark/{id}/add', 'App\Http\Controllers\IndustryEvaluationController@addIndustryMark');

Route::post('/indAddMark/{id}/edit', 'App\Http\Controllers\IndustryEvaluationController@editIndustryMark');
/*End of Industry Evaluation Routes*/


/*Generate Report & Progress Module Routes*/
Route::get('pgrs', 'App\Http\Controllers\reportProgressController@abc');

Route::get('rpt', 'App\Http\Controllers\reportProgressController@def');

Route::get('rep', 'App\Http\Controllers\reportProgressController@ghi');
/*End of Generate Report & Progress Routes*/
