<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\CustomBatik;

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

Route::get('/', [UserController::class,'index'])->name('home');



Route::get('/home', function () {
    $myCollections = \App\Models\CustomBatik::where('user_id', auth()->id())->get();
    return view('dashboardUser', compact('myCollections'));
})->name("collections.user");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/custom', function () {

        $data = [
            "model" => new CustomBatik(),
            "route" => "save-custom",
            "button" => "Save Custom",
            "method" => "POST"
        ];

        return view('createBatik', $data);
    });

    Route::get('/custom/{batik}/edit', function (CustomBatik $batik) {        
        $data = [
            'route' => ['custom.update', $batik],
            "button" => "Update Custom",            
            "method" => "PUT",
            "model" => $batik,
        ];

        return view('createBatik', $data);
    })->name("collections.custom");
    Route::put('/custom/{batik}', [App\Http\Controllers\CustomBatikController::class, 'update'])->name("custom.update");
    Route::delete('/custom/{batik}', [App\Http\Controllers\CustomBatikController::class, 'destroy'])->name("custom.destroy");
    Route::post("/save-custom", [App\Http\Controllers\CustomBatikController::class, 'store'])->name("save-custom");
});

// Route Admin
Route::middleware(['auth', 'verified', 'checkRoles:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', function () {
            return view('dashboard');
        })->name('home_index');
        
});

require __DIR__.'/auth.php';
