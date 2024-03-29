<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ui\uiController;
use Illuminate\Support\Facades\Route;

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
//Frontend Route
// Route::get('/', function () {
//     return view('welcome');
// });

//View
Route::get('/', [uiController::class, 'index']);
Route::get('contact', [uiController::class, 'contact']);
Route::get('blog', [uiController::class, 'blog']);
Route::get('features', [uiController::class, 'features']);
Route::get('login', [AuthenticatedSessionController::class, 'create']);




Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('users/{id}', function ($id) {
        
    });
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
