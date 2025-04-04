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
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\GeneralInfoController;
use App\Http\Controllers\SkillCategoryController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ExperienceYearController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\frontend\PageController;

Route::name('frontend.')->group(function(){
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/services', [PageController::class, 'services'])->name('services');
    Route::get('/services/{id}', [PageController::class, 'serviceDetail'])->name('service.detail');
    Route::get('/projects', [PageController::class, 'projects'])->name('projects');
    Route::get('/project/{id}', [PageController::class, 'projectDetail'])->name('project.detail');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::post('/contacts-store', [ContactController::class, 'store'])->name('contact.store');
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
    Route::resource('contacts', ContactController::class)->except(['show', 'create', 'edit', 'update']);
    Route::resource('social_media', SocialMediaController::class)->except(['show']);
    Route::resource('projects', ProjectController::class)->except(['show']);
    Route::resource('skill_categories', SkillCategoryController::class);
    Route::resource('service_categories', ServiceCategoryController::class)->except(['show']);

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
    Route::get('service_categories/data', [ServiceCategoryController::class, 'show'])->name('service_categories.data');
    Route::get('skill_categories/data', [SkillCategoryController::class, 'show'])->name('skill_categories.data');

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
    Route::get('service_categories/{id}/delete', [ServiceCategoryController::class, 'destroy'])->name('service_categories.delete');
    Route::get('skill_categories/{id}/delete', [SkillCategoryController::class, 'destroy'])->name('skill_categories.delete');

    // Add route to handle image removal
    Route::delete('projects/remove-image/{id}', [ProjectController::class, 'removeImage'])->name('projects.remove-image');

    // Add routes for General Information
    Route::get('general-info', [GeneralInfoController::class, 'index'])->name('general_info.index');
    Route::put('general-info', [GeneralInfoController::class, 'update'])->name('general_info.update');

    // Add routes for updating the service section image
    Route::get('services/section-image', [ServiceController::class, 'editSectionImage'])->name('services.section-image');
    Route::post('services/section-image', [ServiceController::class, 'updateSectionImage'])->name('services.update-section-image');

    // Add routes for updating the experience section image
    Route::get('experiences/section-image', [ExperienceController::class, 'editSectionImage'])->name('experiences.section-image');
    Route::post('experiences/section-image', [ExperienceController::class, 'updateSectionImage'])->name('experiences.update-section-image');

    // Add routes for Experience Year
    Route::get('experience_years', [ExperienceYearController::class, 'index'])->name('experience_years.index');
    Route::put('experience_years', [ExperienceYearController::class, 'update'])->name('experience_years.update');

    // Add routes for Pricing
    Route::get('pricings', [PricingController::class, 'index'])->name('pricings.index');
    Route::get('pricings/data', [PricingController::class, 'show'])->name('pricings.data');
    Route::get('pricings/create', [PricingController::class, 'create'])->name('pricings.create');
    Route::post('pricings', [PricingController::class, 'store'])->name('pricings.store');
    Route::get('pricings/{id}/edit', [PricingController::class, 'edit'])->name('pricings.edit');
    Route::put('pricings/{id}', [PricingController::class, 'update'])->name('pricings.update');
    Route::get('pricings/{id}/delete', [PricingController::class, 'destroy'])->name('pricings.delete');
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
