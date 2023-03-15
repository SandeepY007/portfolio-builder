<?php

use App\Http\Controllers\AcademicController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\ObjectiveController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>'auth'], function (){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/newPortfolio', PortfolioController::class)->name('create');
    Route::resource('introduction', IntroductionController::class);
    Route::resource('objective', ObjectiveController::class);
    Route::resource('skill', SkillController::class);
    Route::resource('academic', AcademicController::class);
    Route::resource('experience', ExperienceController::class);
    Route::resource('projects', ProjectController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
