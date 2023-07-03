<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Customer\CustomerCreate;
use App\Http\Livewire\Customer\CustomerDetail;
use App\Http\Livewire\Customer\CustomerIndex;
use App\Http\Livewire\Customer\CustomerUpdate;
use App\Http\Livewire\Dashboard\Index;
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

Route::get('/', function (){
   return redirect()->route('login');
});

Route::get('/dashboard', Index::class)->name('home')->middleware('auth');

Route::group(['middleware'=>'guest'],function() {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});

Route::group(['prefix' => 'customers','middleware'=>['web','auth']],function (){
    Route::get('/', CustomerIndex::class)->name('customers.index');
    Route::get('/create', CustomerCreate::class)->name('customers.create');
    Route::get('/show/{id}', CustomerDetail::class)->name('customers.show');
    Route::get('/edit/{id}', CustomerUpdate::class)->name('customers.edit');
});
