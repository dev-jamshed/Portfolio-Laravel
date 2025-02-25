<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\GeneralInfoController;


Route::name('frontend.')->group(function(){
    
    Route::get('/', [HomeController::class, 'index'])->name('home');

});




Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    
    Route::get('dashboard',function () {
        return view('admin.dashboard.dashboard');
    })->name('dashboard');

    Route::resource('services', ServiceController::class)->except(['show']);
    Route::resource('counters', CounterController::class)->except(['show']);
    Route::resource('banners', BannerController::class)->except(['show']);
    Route::resource('skills', SkillController::class)->except(['show']);
    Route::resource('educations', EducationController::class)->except(['show']);
    Route::resource('experiences', ExperienceController::class)->except(['show']);
    Route::resource('clients', ClientController::class)->except(['show']);
    Route::resource('reviews', ReviewController::class)->except(['show']);
    Route::resource('contacts', ContactController::class)->except(['show']);
    Route::resource('social_media', SocialMediaController::class)->except(['show']);
    Route::resource('projects', ProjectController::class)->except(['show']);

    // Add the show routes for DataTables
    Route::get('services/data', [ServiceController::class, 'show'])->name('services.data');
    Route::get('counters/data', [CounterController::class, 'show'])->name('counters.data');
    Route::get('banners/data', [BannerController::class, 'show'])->name('banners.data');
    Route::get('skills/data', [SkillController::class, 'show'])->name('skills.data');
    Route::get('educations/data', [EducationController::class, 'show'])->name('educations.data');
    Route::get('experiences/data', [ExperienceController::class, 'show'])->name('experiences.data');
    Route::get('clients/data', [ClientController::class, 'show'])->name('clients.data');
    Route::get('reviews/data', [ReviewController::class, 'show'])->name('reviews.data');
    Route::get('contacts/data', [ContactController::class, 'show'])->name('contacts.data');
    Route::get('social_media/data', [SocialMediaController::class, 'show'])->name('social_media.data');
    Route::get('projects/data', [ProjectController::class, 'show'])->name('projects.data');

    // Add the Delete routes for DataTables
    Route::get('services/{id}/delete', [ServiceController::class, 'destroy'])->name('services.delete');
    Route::get('counters/{id}/delete', [CounterController::class, 'destroy'])->name('counters.delete');
    Route::get('banners/{id}/delete', [BannerController::class, 'destroy'])->name('banners.delete');
    Route::get('skills/{id}/delete', [SkillController::class, 'destroy'])->name('skills.delete');
    Route::get('educations/{id}/delete', [EducationController::class, 'destroy'])->name('educations.delete');
    Route::get('experiences/{id}/delete', [ExperienceController::class, 'destroy'])->name('experiences.delete');
    Route::get('clients/{id}/delete', [ClientController::class, 'destroy'])->name('clients.delete');
    Route::get('reviews/{id}/delete', [ReviewController::class, 'destroy'])->name('reviews.delete');
    Route::get('contacts/{id}/delete', [ContactController::class, 'destroy'])->name('contacts.delete');
    Route::get('social_media/{id}/delete', [SocialMediaController::class, 'destroy'])->name('social_media.delete');
    Route::get('projects/{id}/delete', [ProjectController::class, 'destroy'])->name('projects.delete');

    // Add route to handle image removal
    Route::delete('projects/remove-image/{id}', [ProjectController::class, 'removeImage'])->name('projects.remove-image');

    // Add routes for General Information
    Route::get('general-info', [GeneralInfoController::class, 'index'])->name('general_info.index');
    Route::put('general-info', [GeneralInfoController::class, 'update'])->name('general_info.update');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/profile', function () {
        return view('profile.show');
    })->name('profile');
});
