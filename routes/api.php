<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', '\Modules\Auth\Http\Controllers\LoginController@logout');

    Route::get('user', function (Request $request) {
        return $request->user();
    });

    Route::get('acl', '\Modules\Acl\Http\Controllers\AclController@getACL');
    Route::get('menu', '\Modules\Menu\Http\Controllers\MenuController@getMenu');
    //Route::resource('organization', '\Modules\Organization\Http\Controllers\OrganizationController');
    Route::post('organization/getData', '\Modules\Organization\Http\Controllers\OrganizationController@getData');

    Route::patch('settings/profile', 'Settings\ProfileController@update');
    Route::patch('settings/password', 'Settings\PasswordController@update');
});

Route::group(['middleware' => 'guest:api'], function () {
    Route::post('login', '\Modules\Auth\Http\Controllers\LoginController@login');
    Route::post('register', '\Modules\Auth\Http\Controllers\RegisterController@register');
    Route::post('password/email', '\Modules\Auth\Http\Controllers\ForgotPasswordController@sendResetLinkEmail');
    Route::post('password/reset', '\Modules\Auth\Http\Controllers\ResetPasswordController@reset');
});
