<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// 1. HOME
Route::get('/', [PortfolioController::class, 'home'])->name('home');

// 2. ABOUT
Route::get('/about', [PortfolioController::class, 'about'])->name('about');

// 3. EDUCATION
Route::get('/education', [PortfolioController::class, 'education'])->name('education');

// 4. SKILLS
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');

// 5. EXPERIENCE
Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');

// 6. PROJECTS
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');

// 7. ACHIEVEMENTS
Route::get('/achievements', [PortfolioController::class, 'achievements'])->name('achievements');

// 8. HOBBIES
Route::get('/hobbies', [PortfolioController::class, 'hobbies'])->name('hobbies');

// 9. CONTACT
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact', [PortfolioController::class, 'sendContact'])->name('contact.send');