<?php

use app\controller\Api\CacheController;
use app\controller\Api\DbUpdateController;
use app\controller\Api\DeleteResourceController;
use app\controller\Api\PostArticleController;
use app\controller\Api\PushController;
use app\controller\Api\ResourceUpdateController;
use app\controller\Home\AboutController;
use app\controller\Home\ArticleController;
use app\controller\Home\FaqController;
use app\controller\Home\ContactController;
use app\controller\Home\HomeController;
use app\controller\Home\NewsController;
use app\controller\Home\ServiceController;
use app\controller\Home\SitemapController;
use app\middleware\VerifyAPIToken;
use Webman\Route;


// web
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about.html', [AboutController::class, 'index'])->name('about');
Route::get('/faq.html', [FaqController::class, 'index'])->name('faq');
Route::get('/service.html', [ServiceController::class, 'index'])->name('service');
Route::get('/contact.html', [ContactController::class, 'index'])->name('contact');
Route::get('/news.html', [NewsController::class, 'index'])->name('news');
Route::get('/cases/{id}.html', [ArticleController::class, 'index'])->name('article');
Route::get('/news/{id}.html', [ArticleController::class, 'index'])->name('article');
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// api
Route::post('/api/push', [PushController::class, 'pushImage'])->middleware([VerifyAPIToken::class]);
Route::post('/api/update', [ResourceUpdateController::class, 'updateResource'])->middleware([VerifyAPIToken::class]);
Route::post('/api/sql', [DbUpdateController::class, 'updateDb'])->middleware([VerifyAPIToken::class]);
Route::post('/api/post', [PostArticleController::class, 'insert'])->middleware([VerifyAPIToken::class]);
Route::post('/api/clear-cache', [CacheController::class, 'clear'])->middleware([VerifyAPIToken::class]);
Route::post('/api/delete', [DeleteResourceController::class, 'delete'])->middleware([VerifyAPIToken::class]);

Route::fallback(fn () => view('/view/errors/404')->withStatus(404));
