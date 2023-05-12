<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubmitController;
use App\Http\Controllers\SadaminController;
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





route::get('/submit/{id}',[SubmitController::class,'books']);
Route::post('/submit/{user_id}', [SubmitController::class, 'book'])->name('submit.book');





route::post('/update/{id}',[AdminController::class,'update']);
route::post('/upload_ad',[AdminController::class,'uploadad']);
route::post('/submit',[SubmitController::class,'book']);



route::get('/view',[SadaminController::class,'index']);
route::get('/modify',[SadaminController::class,'modify']);
Route::get('/delete/{id}', [SadaminController::class, 'delete']);

Route::get('/modify', [SadaminController::class, 'modify'])->name('modify');
Route::get('update/{id}', [SadaminController::class, 'edit'])->name('update');
Route::put('/update/{id}', [SadaminController::class, 'update'])->name('update.post');



