<?php

namespace App\Http\Controllers;

use App\Jobs\BroadcastUserDataJob;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function broadcast(): JsonResponse
    {
        User::chunk(200, function ($users) {
            foreach ($users as $user) {
                BroadcastUserDataJob::dispatch($user);
            }
        });

        return response()->json(['message' => 'User data broadcast successfully']);
    }
}
