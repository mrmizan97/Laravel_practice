<?php

use App\Events\MessageNotification;
use App\Events\NotificationTest;
use App\Mail\AttachmentMail;
use App\Mail\TestMail3;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Profile;
use App\Models\Teacher;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
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
// queue & jobs
Route::get('/mail', 'NewsLetterController@sendMail');

//event & listener
Route::get('/event', 'NewsLetterController@index');
Route::post('/subscribe', 'NewsLetterController@subscribe')->name('subscribe');
//sms
Route::get('/sms', 'SMSController@sendSMS');
//Notification
Route::get('send-invoice', 'InvoicePaidController@sendNotification');
//attachment email
Route::get('/attachment-email', function () {
    Mail::to('mrmizanbd93@gmail.com')->send(new AttachmentMail());
    return new AttachmentMail();
});
//email
Route::get('/email', function () {
    Mail::to('mrmizanbd93@gmail.com')->send(new TestMail3());
    return new TestMail3();
});

// Broadcasting in laravel
Route::get('/event2', function () {
    event(new NotificationTest('this is our test message'));
});
// Route::get('/event', function () {
//     event(new MessageNotification('This is the first broadcast message'));
// });
Route::get('/listen', function () {
    return view('listen');
});
Route::get('/', function () {
    return "Welcome";
});
Route::get('/about', function () {
    return "About Us";
});
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
    return $st->profile;
    return $st->profileDetail;
});
Route::get('/hasManyThrough', function () {
    $st =Student::find(1);
    return Student::has('likes')->with('comments')->with('likes')->get();
    return $st->likes;
});

Route::get('/oneToOnePolymorphic', function () {
    $st =Student::find(1);

//    $st->profile()->create([
//      'email'=>'ahsan@gmail.com',
//      'phone'=>'017963321',
//    ]);
    // return Student::doesntHave('profile')->get();
    return Profile::whereHasMorphic(
        'profileable',
        Student::class,
        function ($q) {
            $q->where('email', 'like', '%1@gmail.com');
        }
    )->get();
    // $tc=Teacher::find(1);
//  $tc->profile()->create([
//         'email'=>'teacher1@gmail.com',
//         'phone'=>'017963321',
//       ]);;
// return Profile::all();
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('product-variant', 'VariantController');
    Route::resource('product', 'ProductController');
    Route::resource('blog', 'BlogController');
    Route::resource('blog-category', 'BlogCategoryController');
});
// http client
Route::get('/get', function () {
    $response= Http::get('https://base-api.swiftfederation.com/v1.2/customerChildren/1}');
    $data=[
        "userId"=> 1110,
        "id"=> 100,
        "title"=> "at dfdf df dnam consequatur ea labore ea harum",
        "body"=> "cupididf dfdtate quo est a modi nesciunt soluta\nipsa voluptas error itaque dicta in\nautem qui minus magnam et distinctio eum\naccusamus ratione error aut"
    ];
    // Http::asForm()->post('https://jsonplaceholder.typicode.com/posts', $data);
    return $response->json();
});
Route::resource('burger', BurgerController::class);
