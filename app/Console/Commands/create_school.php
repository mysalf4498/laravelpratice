<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class create_school extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:create_school';

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
           // $dbname = $this->ask('Enter database name');
           // config(['database.connections.mysql.host' => '127.0.0.2']);
        // putenv("DB_DATABASE=hero");
        $currency = config('database.connections.mysql.host');
           // config('database.connections.mysql.host') = '127.0.0.2';
           
           env('DB_DATABASE') = 'laravel';
           echo env('DB_DATABASE');
        // $_ENV['DB_DATABASE'] = 'value';
        // $this->info($currency);
    }
}
