<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\NewsMenuController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\SocialNetworkController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FooterMenuController;
use App\Http\Controllers\InfoAboutMeController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\CategoryGameController;
use App\Http\Controllers\GameController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mainMenu',[MainMenuController::class,'index']);


Route::get('newsMenu',[NewsMenuController::class,'index']);

Route::get('logo',[LogoController::class,'index']);

Route::get('socialNetwork',[SocialNetworkController::class,'index']);

Route::get('banner',[BannerController::class,'index']);

Route::get('footerMenu',[FooterMenuController::class,'index']);

Route::get('infoAboutMe',[InfoAboutMeController::class,'index']);

Route::get('sidebar',[SidebarController::class,'index']);

Route::get('categoryGame',[CategoryGameController::class,'index']);

Route::get('game',[GameController::class,'index']);

Route::get('post',[PostController::class,'index']);