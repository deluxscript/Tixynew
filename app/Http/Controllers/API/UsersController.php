<?php

namespace app\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends ApiBaseController
{

    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }
}