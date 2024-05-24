<?php

use App\Http\Controllers\dashAdminController;
use App\Http\Controllers\dashUserController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\formController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\manageTableController;
use App\Http\Controllers\productController;
use App\Http\Controllers\resgisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Spatie\Permission\Traits\HasRoles;

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
    return view('index');
})->name('home');

// product
Route::get('/product-view', [productController::class, 'productData'])->name('product-view');
Route::get('/products-view', [ProductController::class, 'filter'])->name('filter-data');

// table
Route::get('/table', [manageTableController::class, 'table'])->name('admin-table');

// login
Route::get('login', [loginController::class, 'login'])->name('login');
Route::post('/login-user', [loginController::class, 'doneLogin'])->name('login_user');
// logout
Route::get('/logout', [loginController::class, 'logout'])->name('logout');
// resgis
Route::get('regis', [resgisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [resgisterController::class, 'doneRegister'])->name('register_user');

// dashboard-user
Route::get('/dashboard-user', [dashAdminController::class, 'dashUser'])->name('dashUser');

// form
Route::get('/form', [formController::class, 'form'])->name('form');
Route::post('/form-data', [formController::class, 'store'])->name('formData');
Route::get('/form-data/{id}/edit', [formController::class, 'edit'])->name('editData');
Route::put('/form-data/{id}/update', [formController::class, 'update'])->name('updateData');
Route::put('/form-data/{id}/delete', [formController::class, 'delete'])->name('deleteData');

// detail-roder
Route::get('/detail-pesanan/{id}', [detailController::class, 'detail'])->name('detail-data');
Route::get('/detail', function() {
    if (Auth::user()){
        $user = User::where('id', Auth::user()->id)->first();

        if ($user->hasRole('user')) {
            echo "anda adalah user";
        } else if ($user->hasRole('admin')) {
            echo "anda adalah admin";
        } else {
            echo "anda tidak memiliki peran";
        }
    } else {
        return view('login');
    }
});

// invoice
Route::get('/invoice/{id}', [detailController::class, 'invoice'])->name('invoice');

// login google
Route::get('/login/google', [loginController::class, 'loginGoogle'])->name('login_google');
Route::get('/login/google/callback', [loginController::class, 'googleCallBack'])->name('googleCallback');
