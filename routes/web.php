<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [
    'as' => 'root', 'uses' => 'HomeController@serve'
]);

Route::get('login/{provider}', [
    'as' => 'redirectToProvider', 'uses' => 'AuthController@redirectToProvider'
]);

Route::get('login/{provider}/{code}', [
    'as' => 'handleProviderCallback', 'uses' => 'AuthController@handleProviderCallback'
]);

Route::get('{any}', 'HomeController@serve')->where('any','.+');
