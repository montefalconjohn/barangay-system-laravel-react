<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Users\UserServiceInterface;
use App\Http\Requests\UsersRequest;
use App\Http\Resources\UsersResource;

class RegisterController extends Controller
{
    /** @var UserServiceInterface */
    private $userService;

    /**
     * RegisterController constructor.
     * 
     * @param UserServiceInterface $user
     */
    public function __construct(UserServiceInterface $user)
    {
        $this->userService = $user;
    }
    
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        return new UsersResource($this->userService->createUser($request));
    }
}
