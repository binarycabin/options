<?php

namespace BinaryCabin\Options\Commands;

use Illuminate\Console\Command;

class MakeOption extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:option {className}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a new option class';

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
     * @return mixed
     */
    public function handle()
    {
        $creator = new \BinaryCabin\Options\Creator\OptionCreator();
        $creator->setInterface($this);
        $creator->setClassName($this->argument('className'));
        $creator->create();
    }
}