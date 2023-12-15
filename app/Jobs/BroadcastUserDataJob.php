<?php

namespace App\Jobs;

use App\Events\UserDataEvent;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;

class BroadcastUserDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function handle()
    {
        event(new UserDataEvent($this->user));
    }
}
