<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangeCurrencyController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FeatureOptionController;
use App\Http\Controllers\Frontend\AboutController as FrontendAboutController;
use App\Http\Controllers\Frontend\FaqController as FrontendFaqController;
use App\Http\Controllers\Frontend\FormController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PortfolioController as FrontendPortfolioController;
use App\Http\Controllers\Frontend\PostController as FrontendPostController;
use App\Http\Controllers\Frontend\ProjectController as FrontendProjectController;
use App\Http\Controllers\Frontend\ServiceController as FrontendServiceController;
use App\Http\Controllers\Frontend\TeamController as FrontendTeamController;
use App\Http\Controllers\Frontend\VideoController as FrontendVideoController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\InfoOptionController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShowBuySellController;
use App\Http\Controllers\SubmittedFormController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VideoCategoryController;
use App\Http\Controllers\VideoController;
use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('portfolios', [FrontendPortfolioController::class, 'index'])->name('portfolios');
Route::get('portfolio/{portfolio}', [FrontendPortfolioController::class, 'show'])->name('frontend.portfolio.show');

Route::get('projects', [FrontendProjectController::class, 'index'])->name('projects');
Route::get('project/{project}', [FrontendProjectController::class, 'show'])->name('frontend.project.show');
Route::get('teams', [FrontendTeamController::class, 'index'])->name('frontend.team.index');
Route::get('team/{user}', [FrontendTeamController::class, 'show'])->name('frontend.user.show');

Route::view('contact', 'frontend.contact')->name('contact');
Route::post('contact-form', [FormController::class, 'storeContactForm'])->name('form.contact');
Route::post('project-form', [FormController::class, 'storeProjectForm'])->name('form.project');
Route::post('portfolio-form', [FormController::class, 'storePortfolioForm'])->name('form.portfolio');
Route::post('job-form', [FormController::class, 'storeJobForm'])->name('form.job');
Route::post('buy-sell-form', [FormController::class, 'storeBuySellForm'])->name('form.buy_sell');

Route::post('comment', [CommentController::class, 'store'])->name('comment.store');
Route::get('comment/{user}', [CommentController::class, 'show'])->name('user.comments');
Route::get('locale/{locale}', LocaleController::class)->name('locale');
Route::get('currency/{currency}', ChangeCurrencyController::class)->name('currency');

Route::view('dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');
Route::view('career', 'frontend.career')->name('career');
Route::get('buy-sell', ShowBuySellController::class)->name('buy_sell');
Route::get('videos', [FrontendVideoController::class, 'index'])->name('videos');
Route::get('services', [FrontendServiceController::class, 'index'])->name('frontend.services');
Route::get('about', FrontendAboutController::class)->name('frontend.about');
Route::get('faq', FrontendFaqController::class)->name('frontend.faq');
Route::get('blog', [FrontendPostController::class, 'index'])->name('frontend.blog');
Route::get('blog/{post}', [FrontendPostController::class, 'show'])->name('frontend.post.show');

Route::middleware('auth')->prefix('admin')->withoutMiddleware(LocaleMiddleware::class)->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::post('/', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('category.show');
        Route::post('/{category}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('children/{category?}/', [CategoryController::class, 'getChildren'])->name('category.children');
        Route::get('info/{category?}/', [CategoryController::class, 'getInfo'])->name('category.info');
        Route::get('{category}/delete', [CategoryController::class, 'destroy'])->name('category.delete');
    });

    Route::prefix('info')->group(function () {
        Route::get('/', [InfoController::class, 'index'])->name('info.index');
        Route::get('/create', [InfoController::class, 'create'])->name('info.create');
        Route::post('/', [InfoController::class, 'store'])->name('info.store');
        Route::get('/{info}/edit', [InfoController::class, 'edit'])->name('info.edit');
        Route::get('/{info}', [InfoController::class, 'show'])->name('info.show');
        Route::post('/{info}', [InfoController::class, 'update'])->name('info.update');
        Route::get('{info}/delete', [InfoController::class, 'destroy'])->name('info.delete');

        Route::prefix('{info}/option')->name('info.option.')->group(function ($feature) {
            Route::post('/', [InfoOptionController::class, 'store'])->name('store');
            Route::get('/', [InfoOptionController::class, 'index'])->name('index');
            Route::get('create', [InfoOptionController::class, 'create'])->name('create');
            Route::post('{infoOption}', [InfoOptionController::class, 'update'])->name('update');
            Route::get('{infoOption}/delete', [InfoOptionController::class, 'destroy'])->name('delete');
        });
    });
    Route::prefix('feature')->group(function () {
        Route::get('/', [FeatureController::class, 'index'])->name('feature.index');
        Route::post('/', [FeatureController::class, 'store'])->name('feature.store');
        Route::get('/{feature}', [FeatureController::class, 'show'])->name('feature.show');
        Route::post('/{feature}', [FeatureController::class, 'update'])->name('feature.update');
        Route::get('{feature}/delete', [FeatureController::class, 'destroy'])->name('feature.delete');
        Route::prefix('{feature}/option')->name('option.')->group(function ($feature) {
            Route::post('/', [FeatureOptionController::class, 'store'])->name('store');
            Route::get('/', [FeatureOptionController::class, 'index'])->name('index');
            Route::get('create', [FeatureOptionController::class, 'create'])->name('create');
            Route::post('{featureOption}', [FeatureOptionController::class, 'update'])->name('update');
            Route::get('{featureOption}/delete', [FeatureOptionController::class, 'destroy'])->name('delete');
        });
    });
    Route::prefix('portfolio')->group(function () {
        Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
        Route::get('create', [PortfolioController::class, 'create'])->name('portfolio.create');
        Route::post('/', [PortfolioController::class, 'store'])->name('portfolio.store');
        Route::get('/{portfolio}', [PortfolioController::class, 'show'])->name('portfolio.show');
        Route::get('/{portfolio}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
        Route::post('/{portfolio}/update', [PortfolioController::class, 'update'])->name('portfolio.update');
        Route::get('{portfolio}/delete', [PortfolioController::class, 'destroy'])->name('portfolio.delete');
        Route::get('{portfolio}/image/{image}/delete', [PortfolioController::class, 'removeImage'])->name('image.delete');
    });
    Route::prefix('project')->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('project.index');
        Route::get('create', [ProjectController::class, 'create'])->name('project.create');
        Route::post('/', [ProjectController::class, 'store'])->name('project.store');
        Route::get('/{project}', [ProjectController::class, 'show'])->name('project.show');
        Route::get('/{project}/edit', [ProjectController::class, 'edit'])->name('project.edit');
        Route::post('/{project}/update', [ProjectController::class, 'update'])->name('project.update');
        Route::get('{project}/delete', [ProjectController::class, 'destroy'])->name('project.delete');
        Route::get('{project}/image/{image}/delete', [ProjectController::class, 'removeImage'])->name('project.image.delete');
        Route::get('{project}/flat/{flat}/delete', [ProjectController::class, 'removeFlat'])->name('project.flat.delete');
    });

    Route::prefix('department')->group(function () {
        Route::get('/', [DepartmentController::class, 'index'])->name('department.index');
        Route::post('/', [DepartmentController::class, 'store'])->name('department.store');
        Route::get('/{department}', [DepartmentController::class, 'show'])->name('department.show');
        Route::post('/{department}', [DepartmentController::class, 'update'])->name('department.update');
        Route::get('{department}/delete', [DepartmentController::class, 'destroy'])->name('department.delete');
    });

    Route::prefix('team')->group(function () {
        Route::get('/', [TeamController::class, 'index'])->name('team.index');
        Route::get('/create', [TeamController::class, 'create'])->name('team.create');
        Route::post('/', [TeamController::class, 'store'])->name('team.store');
        Route::get('/{user}', [TeamController::class, 'edit'])->name('team.edit');
        Route::post('/{user}', [TeamController::class, 'update'])->name('team.update');
        Route::get('{user}/delete', [TeamController::class, 'destroy'])->name('team.delete');
    });

    Route::prefix('service')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('service.index');
        Route::get('/create', [ServiceController::class, 'create'])->name('service.create');
        Route::post('/', [ServiceController::class, 'store'])->name('service.store');
        Route::get('/{service}', [ServiceController::class, 'edit'])->name('service.edit');
        Route::post('/{service}', [ServiceController::class, 'update'])->name('service.update');
        Route::get('{service}/delete', [ServiceController::class, 'destroy'])->name('service.delete');
    });

    Route::prefix('job-application')->group(function () {
        Route::get('/', [JobApplicationController::class, 'index'])->name('job_application.index');
        Route::get('{jobApplication}/delete', [JobApplicationController::class, 'destroy'])->name('job_application.delete');
    });

    Route::prefix('forms')->group(function () {
        Route::get('/', [SubmittedFormController::class, 'index'])->name('form.index');
        Route::get('{form}', [SubmittedFormController::class, 'destroy'])->name('form.delete');
    });
    Route::prefix('comments')->group(function () {
        Route::get('/', [CommentController::class, 'index'])->name('comment.index');
        Route::put('{comment}/toggle', [CommentController::class, 'toggleStatus'])->name('comment.toggle');
        Route::get('{comment}/delete', [CommentController::class, 'destroy'])->name('comment.delete');
    });

    Route::prefix('video-category')->name('video_category.')->group(function () {
        Route::post('/', [VideoCategoryController::class, 'store'])->name('store');
        Route::get('/', [VideoCategoryController::class, 'index'])->name('index');
        Route::post('/{videoCategory}', [VideoCategoryController::class, 'update'])->name('update');
        Route::get('/{videoCategory}/delete', [VideoCategoryController::class, 'destroy'])->name('delete');
    });

    Route::prefix('video')->group(function () {
        Route::get('/', [VideoController::class, 'index'])->name('video.index');
        Route::post('/', [VideoController::class, 'store'])->name('video.store');
        Route::post('{video}', [VideoController::class, 'update'])->name('video.update');
        Route::get('{video}/delete', [VideoController::class, 'destroy'])->name('video.delete');
    });
    Route::prefix('about')->group(function () {
        Route::get('/', [AboutController::class, 'index'])->name('about.index');
        Route::post('/', [AboutController::class, 'store'])->name('about.store');
        Route::post('{about}', [AboutController::class, 'update'])->name('about.update');
        Route::get('{about}/delete', [AboutController::class, 'destroy'])->name('about.delete');
    });
    Route::prefix('faq')->group(function () {
        Route::get('/', [FaqController::class, 'index'])->name('faq.index');
        Route::get('/create', [FaqController::class, 'create'])->name('faq.create');
        Route::post('/', [FaqController::class, 'store'])->name('faq.store');
        Route::post('{faq}', [FaqController::class, 'update'])->name('faq.update');
        Route::get('{faq}/edit', [FaqController::class, 'edit'])->name('faq.edit');
        Route::get('{faq}/delete', [FaqController::class, 'destroy'])->name('faq.delete');
    });

    Route::prefix('post')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('post.index');
        Route::get('/create', [PostController::class, 'create'])->name('post.create');
        Route::post('/', [PostController::class, 'store'])->name('post.store');
        Route::post('{post}', [PostController::class, 'update'])->name('post.update');
        Route::get('{post}/edit', [PostController::class, 'edit'])->name('post.edit');
        Route::get('{post}/delete', [PostController::class, 'destroy'])->name('post.delete');
    });
});
Route::get('towns/{province?}', [CountryController::class, 'towns'])->name('province.towns');
Route::get('districts/{town?}', [CountryController::class, 'districts'])->name('towns.districts');
require __DIR__.'/auth.php';
