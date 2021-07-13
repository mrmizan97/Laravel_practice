<?php

use App\Models\Student;
use App\Models\Subject;
use App\Model\Profile;

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return redirect()->to('/login');
// });
Route::get('/manytomany', function () {
   // many to many relationship
    $st=Student::latest()->get();
    $sub=Subject::find(2);
    // return Student::has('subjects')->get();
    // return Student::doesntHave('subjects')->get();
    // return Student::with('subjects')->get();
    // return Student::with('subjects')->has('subjects','>',2)->get();
    // return Student::with('subjects')->has('subjects','>',2)->whereHas('subjects', function($query){
    //     $query->where('marks', '>', 2);
    // })->get();
    // return Student::withCount('subjects')->orderBy('subjects_count')->get();
    // return Student::with('subjects')->where('id','1')->get();
    // $st=Student::find(3);
    // $st->subjects()->attach([3,4]);
    // $st->subjects()->detach([1,2,3]);
    // $st->subjects()->sync([1,2,3,4]);
    // $st->subjects()->toggle([3,4,1]);
    //  $st->subjects()->save($sub,['marks'=>4999]);
    //  $st->subjects()->updateExistingPivot($sub,['marks'=>888]);
    // $sub->students()->updateExistingPivot($st,['marks'=>3000]);
    // return $st;
    //  $sub->students()->attach([3,4]);
    //  $sub->students()->detach([3,4]);
    //  $sub->students()->sync([1,2,3,4]);
    //  $sub->students()->toggle([2,3,4,5,6]);
    //  $sub->students()->save($st,['marks'=>30]);
    //  $sub->students()->updateExistingPivot($st,['marks'=>3000]);
    return $sub;
});
Route::get('/hasOnethrough', function () {
   $st =Student::find(2);
//    return $st->profile;
   return $st->profileDetail;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('product-variant', 'VariantController');
    Route::resource('product', 'ProductController');
    Route::resource('blog', 'BlogController');
    Route::resource('blog-category', 'BlogCategoryController');
});
