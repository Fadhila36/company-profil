<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CompanyInstallerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'company:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install fresh Company Profile';

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
        $this->call('key:generate');
        $this->call('migrate:fresh');
        $this->call('db:seed', ['--class' => 'UserTableSeeder']);
    }
}
