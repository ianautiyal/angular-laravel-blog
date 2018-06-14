<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;
use Tymon\JWTAuth\Exceptions\JWTException;

use App\User;

/**
* [AuthController]
* @package laravel controller
* @author Ajay Nautiyal
*/
class AuthController extends Controller
{

    /**
    * [emailLogin]
    * Login user with email and password.
    * @param Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function emailLogin(Request $request)
    {
    }

    /**
    * [redirectToProvider]
    * Redirect user to Provider authentication page.
    * @param string $provider
    * @return \Illuminate\Http\Response
    */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
    * [handleProviderCallback]
    * Obtain the user information from Provider.
    * @param string $provider
    * @param string $code
    * @return \Illuminate\Http\Response
    */
    public function handleProviderCallback($provider, $code)
    {
        $driver = Socialite::driver($provider);
        $token  = $driver->getAccessTokenResponse($code);
        $_user  = $driver->userFromToken($token['access_token']);
    }
}
