<?php

namespace App\Services\Users;

use App\Http\Requests\UsersRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserService implements UserServiceInterface
{
    /**
     * @inheritDoc
     */
    public function createUser(UsersRequest $request): User
    {
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => password_hash($request->password, PASSWORD_BCRYPT),
            'role' => $request->role
        ]);
    }

    public function logout(Request $request): void
    {
        $request->user()->token()->revoke();
    }
}
