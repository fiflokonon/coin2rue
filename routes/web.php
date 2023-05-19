<?php

use App\Http\Livewire\Dashboard\Moduless\AddModulesComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\LoginComponent;
use App\Http\Livewire\Site\WelcomeComponent;
use App\Http\Livewire\Auth\RegisterComponent;
use App\Http\Livewire\Dashboard\DashboardComponent;
use App\Http\Livewire\Dashboard\Formations\AddFormationComponent;
use App\Http\Livewire\Site\Formations\QuizComponent;
use App\Http\Livewire\Site\Formations\ModulesComponent;
use App\Http\Livewire\Site\Formations\OneLeconComponent;
use App\Http\Livewire\Site\Formations\AllFormationComponent;
use App\Http\Livewire\Site\Formations\OneFormationComponent;
use App\Http\Livewire\Dashboard\Formations\AllDashFormationComponent;
use App\Http\Livewire\Dashboard\Formations\EdithFormationComponent;

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
Route::get('/one-formations/{id}', OneFormationComponent::class)->name('oneformations');
Route::get('/modules/{id}/lecons', ModulesComponent::class)->name('lecons');
Route::get('/lecons/{id}', OneLeconComponent::class)->name('onelecon');
Route::get('/login', LoginComponent::class)->name('login');
Route::get('/register', RegisterComponent::class)->name('register');
Route::get('/quiz/{id}', QuizComponent::class)->name('quiz');
Route::post('/correction', [QuizComponent::class, 'correction'])->name('correction');

Route::get('/formations', AllDashFormationComponent::class)->name('formations');
Route::get('/add-formation', AddFormationComponent::class)->name('addformation');
Route::get('/formation/{id}', EdithFormationComponent::class)->name('editformation');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
