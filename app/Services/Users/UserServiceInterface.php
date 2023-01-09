<?php

namespace App\Services\Users;

use App\Http\Requests\UsersRequest;
use App\Models\User;
use Illuminate\Http\Request;

interface UserServiceInterface {
    /**
     * Creates a User
     *
     * @param UsersRequest$request
     * @return User
     */
    public function createUser(UsersRequest $request): User;

    /**
     * Logs out or destroy the token of a certain user
     *
     * @param Request $request
     * @return void
     */
    public function logout(Request $request): void;
}
