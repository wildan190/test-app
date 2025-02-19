<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'permissions', 'middleware' => 'auth', 'middleware' => 'permission:Permissions'], function () {
    Route::get('/', [PermissionController::class, 'index'])->name('permissions.index');
    Route::get('/create', [PermissionController::class, 'create'])->name('permissions.create');
    Route::post('/', [PermissionController::class, 'store'])->name('permissions.store');
});

Route::group(['prefix' => 'roles', 'middleware' => 'auth', 'middleware' => 'permission:Roles'], function () {
    Route::get('/', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/', [RoleController::class, 'store'])->name('roles.store');
});

Route::group(['prefix' => 'reports', 'middleware' => 'auth', 'middleware' => 'permission:Report'], function () {
    Route::get('/', [ReportController::class, 'index'])->name('reports.index');
});

Route::group(['prefix' => 'reports', 'middleware' => 'auth', 'middleware' => 'permission:CreateReport'], function () {
    Route::get('/create', [ReportController::class, 'create'])->name('reports.create');
    Route::post('/', [ReportController::class, 'store'])->name('reports.store');
});

Route::group(['prefix' => 'settings', 'middleware' => 'auth', 'middleware' => 'permission:Settings'], function () {
    Route::get('/', [SettingsController::class, 'index'])->name('settings.index');
});

Route::group(['prefix' => 'users-management', 'middleware' => 'auth', 'middleware' => 'permission:Assign'], function () {
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('users.update');
});

Route::group(['prefix' => 'users-management', 'middleware' => 'auth', 'middleware' => 'permission:AccessUser'], function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['prefix' => 'users-management', 'middleware' => 'auth', 'middleware' => 'permission:AccessUser'], function () {
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/', [UserController::class, 'createUser'])->name('createUser');
});