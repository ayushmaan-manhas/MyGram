<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\RegiiContro;
use App\Models\Customer;
use Illuminate\Http\Request;
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


Route::get('/register',[RegiiContro::class, 'index']);
Route::post('/register',[RegiiContro::class, 'register']);

Route::get('/feed', function () {
    return view('feed');}); 


//
Route::get('/', [DemoController::class, 'index']);
Route::get('/home', [DemoController::class, 'index']);
Route::get('/about','App\Http\Controllers\DemoController@about');
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
Route::get('/customer/restore/{id}', [CustomerController::class, 'restore'])->name('customer.restore');
Route::get('/customer/force-delete/{id}', [CustomerController::class, 'forceDelete'])->name('customer.force-delete');
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::get('/customer', [CustomerController::class,'view']);
Route::get('/customer/trash', [CustomerController::class,'trash']);
Route::post('/customer',[CustomerController::class, 'store']); 



Route::get('get-all-session', function (){
    $session = session()->all();
    p($session);
});

Route::get('set-session', function(Request $request){
    $request->session()->put('user_name', 'AshMaan Technoboy');
    $request->session()->put('user_id', '123');
   // $request->session()->flash('status', 'Success');
    return redirect('get-all-session');   
});

Route::get('destroy-session', function(Request $request){
    session()->forget('user_name','user_id');
    return redirect('get-all-session');   


});







/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

*/
