<?php

use App\Http\Controllers\Admin\AdminCareerController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminGalleryController;
use App\Http\Controllers\Admin\AdminJobApplicationController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AdminOperationController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\Admin\AdminSustainabilityReportController;
use App\Http\Controllers\Admin\AdminTeamController;
use App\Http\Controllers\Admin\CompanyProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\ContactController;
use App\Models\CompanyProfile;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Project;
use App\Models\SustainabilityReport;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $company = CompanyProfile::first();
    $projects = Project::active()->latest()->take(6)->get();
    $news = News::published()->latest()->take(3)->get();
    $galleries = Gallery::latest()->take(6)->get();

    return view('welcome', compact('company', 'projects', 'news', 'galleries'));
})->name('home');

Route::get('/about', fn () => view('pages.about'))->name('about');
Route::get('/operations', fn () => view('pages.operations'))->name('operations');
Route::get('/projects', fn () => view('pages.projects'))->name('projects');
Route::get('/news', fn () => view('pages.news'))->name('news');
Route::get('/news/{slug}', function ($slug) {
    $article = News::where('slug', $slug)->firstOrFail();

    return view('pages.news-detail', compact('article'));
})->name('news.detail');
Route::get('/gallery', fn () => view('pages.gallery'))->name('gallery');
Route::get('/careers', fn () => view('pages.careers'))->name('careers');
Route::get('/contact', fn () => view('pages.contact'))->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/sustainability', function () {
    $company = CompanyProfile::first();
    $reports = SustainabilityReport::latest()->get();

    return view('pages.sustainability', compact('company', 'reports'));
})->name('sustainability');

Route::get('/mining-sites', fn () => view('pages.mining-sites'))->name('mining-sites');

Route::get('/sitemap.xml', function () {
    $urls = [
        route('home'), route('about'), route('operations'), route('projects'),
        route('news'), route('gallery'), route('careers'), route('contact'),
        route('sustainability'), route('mining-sites'),
    ];
    $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";
    foreach ($urls as $url) {
        $xml .= "  <url>\n    <loc>{$url}</loc>\n    <changefreq>monthly</changefreq>\n    <priority>0.8</priority>\n  </url>\n";
    }
    $xml .= '</urlset>';

    return response($xml, 200)->header('Content-Type', 'application/xml');
})->name('sitemap');

Route::get('/careers/{career}/apply', [ApplyController::class, 'showForm'])->name('apply.form');
Route::post('/careers/{career}/apply', [ApplyController::class, 'submit'])->name('apply.submit');
Route::get('/careers/{career}/applied', [ApplyController::class, 'success'])->name('apply.success');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware('admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('company/{id}/edit', [CompanyProfileController::class, 'edit'])->name('company.edit');
        Route::put('company/{id}', [CompanyProfileController::class, 'update'])->name('company.update');
        Route::resource('projects', AdminProjectController::class);
        Route::resource('operations', AdminOperationController::class);
        Route::resource('news', AdminNewsController::class);
        Route::resource('teams', AdminTeamController::class);
        Route::resource('galleries', AdminGalleryController::class);
        Route::resource('careers', AdminCareerController::class);
        Route::resource('contacts', AdminContactController::class)->only(['index', 'show', 'destroy']);
        Route::resource('reports', AdminSustainabilityReportController::class);

        Route::get('applications', [AdminJobApplicationController::class, 'index'])->name('applications.index');
        Route::get('applications/{application}', [AdminJobApplicationController::class, 'show'])->name('applications.show');
        Route::put('applications/{application}/status', [AdminJobApplicationController::class, 'updateStatus'])->name('applications.status');
        Route::get('applications/{application}/download/{file}', [AdminJobApplicationController::class, 'download'])->name('applications.download');
        Route::delete('applications/{application}', [AdminJobApplicationController::class, 'destroy'])->name('applications.destroy');
    });
});
