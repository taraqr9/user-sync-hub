<?php

namespace App\Http\Controllers;

use App\Events\UserDataEvent;
use App\Models\User;

class UserController extends Controller
{
    public function broadcast()
    {
        $users = User::query()->find(1);

            broadcast(new UserDataEvent($users));
//        foreach ($users as $user) {
//            usleep(50000); // 50 milliseconds, adjust as necessary
//        }

        return response()->json(['message' => 'User data broadcasted successfully']);
    }
}
