<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class name extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
            $name = $this->ask('What is your surname?');
            $password = $this->secret('What is the password?');
            if ($this->confirm('Do you wish to continue?')) {
    //
}
         $userId = $this->argument('user');

        $this->info("My name is ".$userId.' '.$name);
    }
}
