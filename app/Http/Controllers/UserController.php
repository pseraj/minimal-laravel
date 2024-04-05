<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(UserRequest $request)
    {
        return UserResource::collection(User::where('email', 'like', $request->query)->find());
    }
}
