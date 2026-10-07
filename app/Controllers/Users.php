<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index(): string
    {
        $users = (new UserModel())->orderBy('id', 'ASC')->findAll();

        return view('users/index', [
            'title'  => 'User Accounts',
            'active' => 'users',
            'users'  => $users,
        ]);
    }
}
