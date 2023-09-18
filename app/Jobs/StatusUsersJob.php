<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class StatusUsersJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    private $users_idS;
    public function __construct($users_idS)
    {
        $this->users_idS = $users_idS;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $users = $this->users_idS;
        foreach ($users  as $idS) {
            User::where('id', $idS)->update([

                'status' => 1

            ]);
        }
    }
}
