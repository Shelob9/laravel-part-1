<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Hello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello {name=Roy}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Say hi';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info( sprintf( 'Hello %s', $this->argument('name') ) );
        return 0;
    }
}
