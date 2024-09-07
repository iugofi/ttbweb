<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Models\Users;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SaveUserDetails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $UserData;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $UserData)
    {
        $this->UserData = $UserData;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = $this->UserData['email'];
        $firstname = $this->UserData['firstname'];
        $lastname = $this->UserData['lastname'];
        $user = Users::where('email', $email)->first();
        if (!$user) {
            Users::create([
                'email' => $email,
                'firstname' => $firstname,
                'lastname' => $lastname,
            ]);
        }
    }
}
