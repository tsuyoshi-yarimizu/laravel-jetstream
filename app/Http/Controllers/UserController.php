<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(UserStoreRequest $request)
    {
        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->save();

        return redirect('/user');
    }

    public function edit($userId)
    {
        $user = User::find($userId);
        return view('user.edit', [
            'user' => $user
        ]);
    }

    public function update(UserUpdateRequest $request, $userId)
    {
        $user = User::find($userId);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if ($request->get('new_password')) {
            $user->password = Hash::make($request->get('password'));
        }
        $user->save();

        return redirect('/user');
    }
}
