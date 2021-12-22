<?php

namespace App\Services\Users;

use App\Models\User;
use App\Services\Users\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UserService implements UserServiceInterface {

    /**
     * @inheritDoc
     */
    public function createUser($request): User
    {
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => password_hash($request->password, PASSWORD_BCRYPT),
            'role' => $request->role
        ]);
    }

    public function login($request)
    {
    //     $clientId = \config('oauth.client_id');
    //     $clientSecret = \config('oauth.client_secret');
    //     $url = \config('oauth.api_url');

    //     // $http = new \GuzzleHttp\Client([
    //     //     'Content-Type' => 'application/json'
    //     // ]);

    //     // http://localhost:8000/oauth/token
    //     //  $response = $http->post("http://localhost:8000/oauth/token", [
    //     //      'form_params' => [
    //     //         'grant_type' => 'password',
    //     //         'client_id' => $clientId,
    //     //         'client_secret' => $clientSecret,
    //     //         'username' => $request->username,
    //     //         'password' => $request->password
    //     //      ]
    //     // ]);
        
    //     // $http = new \GuzzleHttp\Client();
    //     // $request = $http->post($url . '/oauth/token', [
    //     //     'form_params' => [
    //     //         'grant_type' => 'password',
    //     //         'client_id' => $clientId,
    //     //         'client_secret' => $clientSecret,
    //     //         'username' => $request->username,
    //     //         'password' => $request->password
    //     //      ]
    //     // ]);

    //     $request->request->add([
    //             'grant_type' => 'password',
    //             'client_id' => $clientId,
    //             'client_secret' => $clientSecret,
    //             'username' => $request->username,
    //             'password' => $request->password
    //         ]);

    // $tokenRequest = $request->create(
    //         $url.'/oauth/token',
    //         'post'
    // );

    // $instance = Route::dispatch($tokenRequest);

    // return json_decode($instance->getContent());
    
    //     return $request->getBody();
        
    //     var_dump($request->username);
    }

    public function logout(Request $request): void
    {
        $request->user()->token()->revoke();
    }
}