<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return User::all();
    }

    public function store(Request $request)
    {
        return User::create($request->all());
    }

    public function show(User $user)
    {
        return $user;
    }

    public function update(User $user)
    {
        $user->update(request()->all());
        return $user;
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['result' => 'ok']);
    }
}
