<?php

namespace App\Services\Users;

use App\Models\User;
use Illuminate\Http\Request;

interface UserServiceInterface {
    /**
     * Creates a User
     * 
     * @param $request
     * @return User
     */
    public function createUser($request): User;

    /**
     * Logs in a certain user
     * 
     * @param Request $request
     */
    public function login(Request $request);

    /**
     * Logs out or destroy the token of a certain user
     * 
     * @param Request $request
     * @return void
     */
    public function logout(Request $request): void;
}