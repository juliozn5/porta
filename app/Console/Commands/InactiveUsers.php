<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Mail\SendMailable;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class InactiveUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'inactive:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia un email a usuarios que llevan 30 dias o mas sin iniciar sesion';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $Users = User::all();
        $now = Carbon::now();

        $verify_days = $now->subDays(30);

        foreach($Users as $user ){
            if ($user['last_session'] <=   $verify_days && $now->diffInDays($user['last_session']) > 29 ){
                Log::info(  $now->diffInDays($user['last_session'])); 
               Mail::to('juliozn5dev@gmail.com')->send(new SendMailable($now->diffInDays($user['last_session'])));
            }
        }

        //Mail::to('juliozn5dev@gmail.com')->send(new SendMailable('id'));
        
    }
}
