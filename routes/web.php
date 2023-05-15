<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubmitController;
use App\Http\Controllers\SadaminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Ad;
use App\Models\User;
use App\Models\Submit;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data=ad::paginate(3);
    return view('welcome',['data'=>$data]);
})->name('welcome');

Route::get('/sport', function () {
    $data=user::all();
    return view('sport',['data'=>$data]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
});

Route::get('/search', function (Illuminate\Http\Request $request) {
    $search = $request->search;
    $data = user::where('name', 'like', '%' . $search . '%')->orwhere('address','like','%'.$search.'%')->orwhere('phone','like','%'.$search.'%')->orwhere('email','like','%'.$search.'%')->orwhere('sport','like','%'.$search.'%')->orwhere('price','like','%'.$search.'%')->get();
    return view('sport', ['data' => $data]);
})->name('search');

Route::get('/book/{id}', function ($id) {
    $data = DB::table('users')->where('id', $id)->first();
    return view('book', compact('data'));
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


route::get('/redirect',[HomeController::class,'redirect']);
route::get('/ad',[AdminController::class,'ad']);
route::get('/deleteadd',[AdminController::class,'deleteadd']);
route::get('/delete/{id}',[AdminController::class,'delete']);
route::get('/updatead/{id}',[AdminController::class,'updatead']);
route::get('/view',[AdminController::class,'view']);
route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);
route::get('/bview',[SadminController::class,'index']);
route::get('/approval',[AdminController::class,'approval']);

route::get('/subadd',[AdminController::class,'subadd']);
route::get('/submit/{id}',[SubmitController::class,'books']);

route::get('/approved/{id}',[AdminController::class,'approved']);
route::get('/canceled/{id}',[AdminController::class,'canceled']);
route::get('/email/{id}',[AdminController::class,'email']);


Route::post('/submit/{user_id}', [SubmitController::class, 'book'])->name('book.submit');
route::post('/update/{id}',[AdminController::class,'update']);
route::post('/upload_ad',[AdminController::class,'uploadad']);
route::post('/upload_subadmin',[AdminController::class,'uploadsub']);
route::post('/sendemail/{id}',[AdminController::class,'sendemail']);



route::get('/view',[SadaminController::class,'index']);
route::get('/modify',[SadaminController::class,'modify']);
Route::get('/delete/{id}', [SadaminController::class, 'delete']);

Route::get('/modify', [SadaminController::class, 'modify'])->name('modify');
Route::get('update/{id}', [SadaminController::class, 'edit'])->name('update');
Route::put('/update/{id}', [SadaminController::class, 'update'])->name('update.post');



Route::middleware(['auth', 'approved'])->group(function () {
    Route::get('/dashboard', [sadminController::class, 'index'])->name('dashboard');
});


