<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Site\WelcomeComponent;
use App\Http\Livewire\Dashboard\DashboardComponent;
use App\Http\Livewire\Site\Formations\AllFormationComponent;
use App\Http\Livewire\Site\Formations\OneFormationComponent;

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

Route::get('/', WelcomeComponent::class)->name('welcome');

Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
Route::get('/all-formations', AllFormationComponent::class)->name('allformations');
Route::get('/one-formations', OneFormationComponent::class)->name('oneformations');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
